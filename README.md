# Laravel Theme


To get the latest version of Theme simply require it in your `composer.json` file.

~~~
"kubpro/theme" : "dev-master"
~~~


You'll then need to run `composer install` to download it and have the autoloader updated.

Once Theme is installed you need to register the service provider with the application. Open up `config/app.php` and find the `providers` key.

~~~
'providers' => [

    Kubpro\Theme\Providers\ThemeServiceProvider::class,

]
~~~


Publish config using artisan CLI.
~~~
php artisan vendor:publish --provider="Kubpro\Theme\Providers\ThemeServiceProvider"
~~~


Finding from both theme's view and application's view.
~~~php

return thview('welcome',compact('data'));

~~~

To check whether a theme exists.


