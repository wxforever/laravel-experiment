### List user replies

1、`php artisan make:scaffold Replies --schema="topic_id:integer:unsigned:default(0):index,user_id:integer:unsigned:default(0):index,content:text"`

2、edit factory and seeder

3、modify Reply Topic User Model to add relation to user and topic

4、add topics._reply_list view and include it into topics.show view, add users._replies view  and include it into users.show view