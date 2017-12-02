### User can create reply

1、modify the Reply controller to add auth middleware and delete the function not need and change the routes/web.php route

2、modify the Reply request to add  filter rule

3、modify the Reply observer to increase the reply count and clean the content

4、add the  topics._reply_box view and add it to topics.show view with condition the Auth::check()