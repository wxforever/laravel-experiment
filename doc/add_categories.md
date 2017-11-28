###add categrories

1、`php artisan make:model Models/Category -m` 

2、then add $fillable and modify the migration file

3、then  `php artisan make:migration seed_categories_data --table=categories`  and add seeds

4、`php artisan migrate`


