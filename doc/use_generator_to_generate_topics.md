### use summerblue/generator to generate topics

1、`php artisan make:scaffold Topics --schema="title:string:index,body:text,user_id:unsigned:index,category_id:unsigned:index,reply_count:unsigned:default(0),view_count:unsigned:default(0),last_reply_user_id:unsigned:default(0),order:unsigned:default(0),excerpt:text,slug:string:nullable"`
