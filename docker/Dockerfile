FROM centos:centos6

# install http
RUN  yum install -y http://dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm

# install httpd
RUN yum -y install httpd vim-enhanced bash-completion unzip git nano

# install mysql
RUN yum install -y mysql mysql-server
RUN echo "NETWORKING=yes" > /etc/sysconfig/network

# install php
RUN yum install -y php php-mysql php-devel php-gd php-pecl-memcache php-pspell php-snmp php-xmlrpc php-xml
RUN yum install -y phpmyadmin



# Add CliniPhenome DB dump, Website, and api_file 
ADD BRiDGEIrisPortal/BrideIRISportalsite /var/www/html

#Start script: Start httpd and mysqld, load DB dump 
ADD startup.sh /usr/bin/startup.sh
RUN chmod +x /usr/bin/startup.sh

EXPOSE 80

CMD ["startup.sh"]
