calgen.py -- sigcomm script for generating an ical calendar file for google calendar, with support to event add + update
             Author: Rodolfo S. Antunes (rsantunes@inf.ufrgs.br)

python calgen.py <output_dir> <spreadsheet list>

important: 1/ cannot be used on those sheets that have no schedule info
           2/ event removal is not supported, events that are removed from the schedule must be 
              manually removed from the calendar too
           3/ this script is on testing mode for now -- cannot be used on production yet
