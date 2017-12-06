### let ckeditor can upload image

1、add`config.image_previewText=' '; //预览区域显示内容
	config.filebrowserImageUploadUrl='/upload_image'` to config.js
2、modify the image.js to let upload button show up

3、add uploadImage to Topic controller and add route

4、turn off the crsf middleware for the route and turn off the auth in Topic controller

5、turn off the laravel debug because it will reuturn html affect the result; 

6、delete the config cache file because the laravel administator will generate the wrong cache config file

