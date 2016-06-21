
from __future__ import print_function
import httplib2
import os

from apiclient import discovery
import oauth2client
from oauth2client import client
from oauth2client import tools

SCOPES = 'https://www.googleapis.com/auth/spreadsheets.readonly'
CLIENT_SECRET_FILE = 'client_secret.json'
APPLICATION_NAME = 'Sigcomm16'
SPREADSHEETID = '1AK4VdEuogGTaFRLia8Ef-AaZdAJOu5AxE7KAA1Nj7tU'

def get_credentials():
    """Gets valid user credentials from storage.

    If nothing has been stored, or if the stored credentials are invalid,
    the OAuth2 flow is completed to obtain the new credentials.

    Returns:
        Credentials, the obtained credential.
    """
    home_dir = os.path.expanduser('~')
    credential_dir = os.path.join(home_dir, '.credentials')
    if not os.path.exists(credential_dir):
        os.makedirs(credential_dir)
    credential_path = os.path.join(credential_dir,
                                   'sheets.googleapis.com-sigcomm16.json')

    store = oauth2client.file.Storage(credential_path)
    credentials = store.get()
    if not credentials or credentials.invalid:
        flow = client.flow_from_clientsecrets(CLIENT_SECRET_FILE, SCOPES)
        flow.user_agent = APPLICATION_NAME
        if flags:
            credentials = tools.run_flow(flow, store, flags)
        else: # Needed only for compatibility with Python 2.6
            credentials = tools.run(flow, store)
        print('Storing credentials to ' + credential_path)
    return credentials

def proggen(worksheet, values, outdir):
    """
    TODO: could use some template engine here instead of just writing out the html/php .. 
    but the page is pretty simple, so this should do.
    """
    output = os.path.join(outdir, worksheet + '.php')
    print("Generating prog %s ..."%(output))

    f = open(output, 'w')

    f.write("""<ul class="program" data-role="listview" data-filter="true" data-inset="true" data-theme="d" data-dividertheme="a" data-filter-placeholder="Filter program...">
<?php
""")

    for i,row in enumerate(values):
        if (len(row)<1):
            continue            
        row = [i.strip() for i in row]

        line=None

        type = row[0]
        if (type == 'day' and len(row)>=2):
            line="""tprog_add_header("%s");
"""%row[1]

        elif (type == 'session' and len(row)>=3):
            time = row[1]
            title = row[2]
            chair = (row[3] if len(row)>3 else "")
            style = ""
            if (i == len(values)-1):
                # last session
                line="""tprog_add_session("%s", "%s", "%s", "%s", true);
"""%(time, title, chair, style)
            else:
                line="""tprog_add_session("%s", "%s", "%s", "%s");
"""%(time, title, chair, style)

        elif (type == 'talk' and len(row)>=4):
            paper=row[2]
            link=""
            authors=row[3]
            info=""
            slides=""
            video=""
            line="""tprog_add_item("%s", "%s", "%s", "%s", "%s", "%s");
"""%(paper, link, authors, info, slides, video)

        elif (type == 'break' and len(row)>=3):
            time = row[1]
            title = row[2]
            line="""tprog_add_session("%s", "%s", "", "");
"""%(time, title)

        if (line!=None):
            f.write(line.encode("utf-8"))

    f.write("""?>
</ul>
""")
    f.close()

def main(outdir):
    credentials = get_credentials()
    http = credentials.authorize(httplib2.Http())
    discoveryUrl = ('https://sheets.googleapis.com/$discovery/rest?'
                    'version=v4')
    service = discovery.build('sheets', 'v4', http=http,
                              discoveryServiceUrl=discoveryUrl)

    result = service.spreadsheets().get(
        spreadsheetId=SPREADSHEETID).execute()

    sheets = result.get('sheets', [])
    if len(sheets)==0:
        print('No worksheets found.')
    else:
        for ws in sheets:
            # Note we assume the header row to be present !!!
            rangeName = '%s!A2:F'%ws['properties']['title']
            result = service.spreadsheets().values().get(
                spreadsheetId=SPREADSHEETID, range=rangeName).execute()
            values = result.get('values', [])
            proggen(ws['properties']['title'], values, outdir)

    print("Done!")

if __name__ == '__main__':
    import sys
    if (len(sys.argv)<=1):
        print('Usage: python %s <outputdir>'%sys.argv[0])  
        sys.exit(1)

    outdir = sys.argv[1]
    if not os.path.exists(outdir):
        os.makedirs(outdir)
    main(outdir)

