### Integrate laravel-permission package

1、 `composer require spatie/laravel-permission` 

2、`php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"`

3、`php artisan migrate`

4、`php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"`

5、add HasRoles trait to the user

6、`php artisan make:migration seed_roles_and_permissions_data`and modify the file to add permissions and roles ,then migrate it
6、add  role to user in UsersTableSeeder and `php artisan db:seed --class=UsersTableSeeder`