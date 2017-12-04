### notify use in email with Queue supported

1、 add via and toMail to TopicReplied Notification

2、modify the .env and config/Mail.php to set the email

3、php artisan config:cache

4、php artisan horizon:terminate and then the supervisord will restart it and load the new email conf