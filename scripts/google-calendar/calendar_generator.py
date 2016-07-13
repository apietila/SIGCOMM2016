#!/usr/bin/python
# coding=utf-8

#
# CalendarGenerator class: parses a Google spreasheet containing the schedule
# for an event and creates an ICS file to import into Google calendar or other
# calendar applications.
#
# This code was inspired by the "proggen.py" script
# Author: Rodolfo S. Antunes (rsantunes@inf.ufrgs.br)
#

from icalendar import Calendar, Event, vText
from datetime import datetime as dt
from hashlib import md5
import os

class CalendarGenerator:
   INPUT_DATE_FORMAT = '%A, %B %d, %Y, %I:%M%p'
   UID_SUFFIX = '@Sigcomm2016'
   EVENT_TRANSLATE = dict(gaia='GAIA', hotmiddlebox='HotMiddlebox', qoe='Internet-QoE', lancomm='LANCOMM', netpl='NetPL', sigcomm='SIGCOMM')

   def __init__(self):
      self.cal = Calendar()
      self.cal.add('prodid', '-//My calendar product//mxm.dk//')
      self.cal.add('version', '2.0')
      self.current_event = None
      self.processing_event = False
      self.current_description = dict(Talks=u"", Posters=u"", Demos=u"", Chair=u"", Discussion=u"", Keynote=u"")
      return

   def ResetSummary(self):
      description = ""
      if len(self.current_description['Chair']) > 0:
         u'Chair: {}\n\n'.format(self.current_description['Chair'])
      for ik in ['Talks', 'Demos', 'Posters']:
         if len(self.current_description[ik]) > 0:
            description += u'{}: {}\n\n'.format(ik, self.current_description[ik])
      if len(self.current_description['Discussion']) > 0:
         description += u'{}'.format(self.current_description['Discussion'])
      elif len(self.current_description['Keynote']) > 0:
         description += u'{}'.format(self.current_description['Keynote'])
      else:
         description = description[:-2]
      self.current_event.add('description', description)
      self.current_description = dict(Talks=u"", Posters=u"", Demos=u"", Chair=u"", Discussion=u"", Keynote=u"")
      return

   def ToIcal(self):
      return self.cal.to_ical()

   def Day(self, date_string):
      self.current_date = date_string
      return

   def GenerateUid(self, eventtitle, uid):
      uid_string = '{}-{}@{}'.format(uid, eventtitle, self.UID_SUFFIX)
      return md5(uid_string).hexdigest()

   def Session(self, eventtitle, duration, title, location, uid, chair='', nodescription=False):
      if self.processing_event:
         self.FinishSession()
      new_event = Event()
      new_event.add( 'uid', self.GenerateUid(eventtitle, uid) )
      print_title = self.EVENT_TRANSLATE[eventtitle]
      new_event.add( 'summary', '{} {}'.format(print_title, title) )
      new_event.add( 'location', location )
      session_duration = duration.split('-')
      session_start = dt.strptime(self.current_date + ', ' + session_duration[0].strip(), self.INPUT_DATE_FORMAT)
      new_event.add('dtstart', session_start)
      if len(session_duration) > 1:
         session_end = dt.strptime(self.current_date + ', ' + session_duration[1].strip(), self.INPUT_DATE_FORMAT)
         new_event.add('dtend', session_end)
      if nodescription:
         self.cal.add_component(new_event)
      else:
         self.current_event = new_event
         self.current_description['Chair'] = chair.strip()
         self.processing_event = True
      return

   def FinishSession(self):
      self.ResetSummary()
      self.cal.add_component(self.current_event)
      self.processing_event = False
      return

   def SessionItem(self, itemtype, title, authors=''):
      if len(authors) > 0:
         self.current_description[itemtype] += u'\n\n* Title: {} – Authors: {}'.format(title, authors)
      else:
         self.current_description[itemtype] += u'* {}'.format(title)
      return

   def SessionKeynote(self, title, author, abstract, shortbio):
      aux_session = u'Title:\n{}\n\n'.format(title)
      aux_session += u'Speaker:\n{}\n\n'.format(author)
      aux_session += u'Abstract:\n{}\n\n'.format(abstract)
      aux_session += u'Speaker Bio:\n{}'.format(shortbio)
      self.current_description['Keynote'] += aux_session
      return

   def ParseWorksheet(self, title, values, outdir):
      for raw_row in values:
         row = [x.strip() for x in raw_row]
         if row[0] == 'day':
            self.Day(row[1])
         elif row[0] == 'session':
            self.Session(title, row[1], row[3], row[2], row[10], chair=row[4])
         elif row[0] == 'talk':
            self.SessionItem('Talks', row[3], row[4])
         elif row[0] == 'poster':
            self.SessionItem('Posters', row[3], row[4])
         elif row[0] == 'demo':
            self.SessionItem('Demos', row[3], row[4])
         elif row[0] == 'disc':
            self.SessionItem('Discussion', row[3])
         elif row[0] == 'keynote':
            self.SessionKeynote(row[3], row[4], row[5], row[6])
         elif row[0] == 'social':
            self.Session(title, row[1], row[3], row[2], row[10], nodescription=True)
      if self.processing_event:
         self.FinishSession()
      with open( os.path.join(outdir, title+'.ics'), 'w' ) as arq:
         arq.write( self.ToIcal() )
      return
