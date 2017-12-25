### add sidebar links

1、php artisan make:scaffold Links --schema="title:string:comment('资源的描述'):index,link:string:comment('资源的链接'):index" and chown -R www:www .

2、modify LinkFactory,then modify LinksTableSeeder,then `php artisan db:seed --class=LinksTableSeeder`

3、modify Link model to add getAllCached function
4、modify the LinkObserver saved function to clear cache when update Link
5、modify category and topic controller to pass link parameter,then modify the view to show it

6、modify config/administrator.php and add config/administrator/links.php