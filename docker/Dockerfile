FROM ubuntu:ubuntu14_04

# install apache
sudo apt-get install apache2

# install updates
sudo service apache2 restart

# install nano
sudo apt-get install nano

# install mysql
sudo apt-get install mysql-server-5.5
#Create a password for root (prompt during installation)

# install php
sudo apt-get install php5 php-pear
sudo apt-get install php5-mysql
mkdir /var/log/php
chown www-data /var/log/php

#restart apache server
service apache2 start

# Add BridgeIris Portal Website, Database
ADD BRiDGEIrisPortal/codes/database_dump/uz_clinical_db.sql /
ADD BRiDGEIrisPortal/codes /var/www/html

#Start script: Start httpd and mysqld, load DB dump 
ADD startup.sh /usr/bin/startup.sh
RUN chmod +x /usr/bin/startup.sh

EXPOSE 80

CMD ["startup.sh"]
