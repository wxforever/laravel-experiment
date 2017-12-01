### Add queue for translate slug

1、create the job TranslateSlug `php artisan make:job TranslateSlug` and modify it to accept topic model and handle translate

2、modify the TopicObserver to dispatch TranslateSlug job when saved

3、Because the QUEUE_DRIVER=sync,the job will work already;

4、`composer require laravel/horizon`

5、`php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"` then we can access horizon through /horizon route

6、`yum install -y supervisor` and `cat /etc/supervisord.conf` and add horizon.ini in /etc/supervisord.d/ which we can find in laravel's offcial site about laravel horizon,then we can `systemctl enable supervisord.service` and run `supervisord` cmd

7、change the .env queue driver to redis then we can monitor the queue through laravel horizon and keep horizon alive though the supervisor
 