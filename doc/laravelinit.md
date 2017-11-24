###init laravel enviroment experiement

1、win10 virturalbox install centos7 virtual machine

2、use the linux panel(chinese bt panel)to install nginx1.8,php7.1,mysql5.7,phpmyadmin,redis and memcache

3、init a website on bt panel and change the nginx config to laravel config,change the
root path to public path，add try files,change server_name to ip address

4、use composer to install  laravel installer globally on centos and add composer global vendor path  to enviroment path

5、use laravel installer new a project which name is laraveltest

6、change .env file to set the database setting accord to what bt panel create

7、cd laraveltest,chmod -R 777 vendor public storage

8、install sublime plugin sftp to edit the file on virtual machine centos use the ftp created by bt panel when init the website

9、chown -R www:www laraveltest then we can edit the file throught the ftp connection