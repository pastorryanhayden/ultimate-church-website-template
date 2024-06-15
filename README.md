## Project Setup

To setup this project, set the following variables in the .env file.

```dotENV
CHURCH_NAME="Example Church"
CHURCH_CITY="Peoria, Illinois"
FLARE_KEY=
ADMIN_USERS=ryan.hayden@hey.com
VULTR_BUCKET=
VULTR_REGION=ewr1
VULTR_ACCESS_KEY=
VULTR_SECRET_KEY=
VULTR_ENDPOINT=
```

## Database Setup

Then copy the base sqlite database (found at `~/Documents/1.Projects/UltimateChurchWebsite/base.sqlite` on your mac) into `/database/database.sqlite.`


## Files Setup



Finally, you need to set the domain to work on vultr.  Change the settings in the `cors_rules.xml` file locally and then run the following commands from that folder on a mac that has been setup with your vultr account:

```shell
s3cmd mb s3://BUCKET 
s3cmd setcors cors_rules.xml s3://BUCKET
```
(Where BUCKET is the name of that site's bucket you set in the .env file above)

