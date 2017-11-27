### add laravel auth 

1、`php artisan make:auth`

2、`php artisan migrate`

3、chown the new created file by the root user to www user,or i can't modify the file through sublime sftp remotely `chown -R www:www laravel-experiment`

4、move the auth route from the Router.php to /routes/web.php,make it more clear to see

5、change the redirect path of the auth related controllers and middware `RedirectIfAuthenticated`  to '/' from original '/home'

6、reconstruct the view structure by split the app.blade.php into _header.blade.php,_footer.blade.php,and pages/root.blade.php(create corresponse controller).then modify route,let '/' point to 'PagesController@root'




