### notify author when topic replied

1、`php artisan notifications:table` and then `php artisan migrate` to create the notification table

2、`php artisan make:migration add_notification_count_to_users_table --table=users` and add the notification_count column then migrate

3、`php artisan make:notification TopicRelied` and add toDatabase data

4、modify the User model to add notify and markAsRead function 

5、modify Reply created observer to notify the user when reply created

6、create the NotificationsController and related view and route  to display notifications. change layouts._header view