### auto translate slug

1、`composer require "overtrue/laravel-pinyin:~3.0"` and then  add translate handler

2、modify the TopicObserver.php saving functon to translate title

3、modify the Topic model to add slug link creator

4、modify the route in routes/web.php  and controller and view that has topic show route
