### add captcha

1、`composer require mews/captcha`, because the use of laravel 5.5,don't need to manual add provider and facade

2、modify `RegisterController.php` to add captcha rules

3、modify `register.blade.php` to add captcha_src and click event
