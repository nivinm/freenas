# freenas
My Freenas Scripts

#rsync_files_remotely
This script rsyncs remote locations for Freenas. 
Its pretty self explanatory, tries to sync up 3 times and sleeps 10 seconds between each retry. 

Emails:
Success: I awk file types and send the output to myself to know which files were synced. 
Fail: I cat the log file into the email body to tell me why the job failed. 

Mysql:  
I use jexec because mysql is installed on a separate jail.
