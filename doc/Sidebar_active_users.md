###slidebar active users

1、add ActiveUserHelper Traits and use it in User Model

2、`php artisan make:command CalculateActiveUser` and edit the file ,then add schedule in app/Console/Kernel.php and add `* * * * * www php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1` to  /etc/crontab,focus on the www user name,don't foget this; and add HOME=/.check  if it run right though /var/log/cron file

3、modify the Category and Topic controller  to  add pass active_user to view,then modify the view to show the active user