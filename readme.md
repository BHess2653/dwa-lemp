# DWA-1709 Deployment
Setting up a server and installing Wordpress.

## Local Installation
Create project folder (example info)
```
$ cd /projects

$ mkdir wordpress

$ cd wordpress
```

## Deployment
For Deployment you will need to have these.

* Server Details
  * x1 Ubuntu 16.04 DigitalOcean Server
  * MariaDB (not Mysql)
  * Nginx
  * PHP
* Wordpress (Downloaded from the server setup)

This next part is an example of how to deploy to your server using SCP.

three things you will need:
  * Users credentials that you made on your server (Not root user).
  * IP address for your server.
  * humans.txt (download or create by you)

humans.txt is just an example file you can download it from here or create it yourself.

humans.txt
```
/* Group */

Name: John Smith

Site: http://bhess.me
```
After you download or create humans.txt cd to its location and nano it to make sure it looks like mine up above.

```
$ cd /projects/wordpress/humans.txt

$ nano humans.txt
```

Once you have verified that humans.txt looks like mine we can then deploy it to the server using SCP.

```
$ scp humans.txt username@IP_address:/var/www/html
```

After that login to your server and check to see if the file is there. You can then use cat to view the file and make sure its the same as local.

```
$ ssh username@IP_address

$ cd /var/www/html && ls

$ cat humans.txt
```

## Server Setup
Don't have a server up and running? no problem just follow this guide to get it up and running.
[Server Setup Guide](https://github.com/BHess2653/dwa-lemp/blob/master/setup.md)
