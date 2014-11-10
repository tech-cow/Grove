So for local development, you're gonna want to install 
MySQL on your machine, most recent version should be fine.

Loading the schema into your local sql server(unix-based):
	-Start/Log into mysql in this directory with 
		"mysql -u <username> -p"

		-The -p flag denotes you're gonna use a password and the -u flag denotes 
		with what user you're logging into. I think there's some prep you might have to do
		for that, but the sql lab on the moodle covers that so it's a nice little thing to
		reference if you have trouble with this part.
	-Load the schema into the database simply by running
		"source grovesqlsetup.sql;"
		
		-as far as I know that's all you'll have to do, and then of course we need to have
		consistent access patterns for great justice and whatnot. 
	-Enjoy your (hopefully correctly) set-up sql database

For windows:
	I have no clue :D 

