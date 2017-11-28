### add user curd

1、`php artisan make:controller UsersController --resource --model=User`

2、add resource route to routes/web.php

3、`php artisan make:request UserRequest` and then modify the UserRequest.php 

	authorize,rules,message functions to validate the input

4、`php artisan make:migration add_avatar_and_introduction_to_users_table --table=users` 

 	and then modify the file, then migrate,then change $fillable

5、add user update policy `php artisan make:policy UserPolicy` then add update policy function to the file and register it to AuthServiceProvider.php

6、add ImageUploaderHandler.`composer require intervention/image` then add handler

7、modify the UsersController.php and add the show,edit,update controller

8、edit view.(add layouts/_message.blade.php,common/error.blade.php)(set carbon  `\Carbon\Carbon::setLocale('zh');` )

