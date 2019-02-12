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


Add to .env file 

~~~
APP_THEME=default
~~~


-----------
### Theme has many features to help you get started with Laravel

-----------
~~~php
thview() 
~~~

The thview function retrieves theme's view instance:
~~~php
$data = ['1',2];
return thview('welcome',compact('data'));
~~~
-----------
~~~php
thasset()
~~~

The thasset function generates a URL for an asset using the current scheme of the request (HTTP or HTTPS):

~~~php
{{thasset("style.css")}}
~~~

-----------
~~~php
thchange()
~~~
The thchange function using to  change theme from .env:



~~~php
$themename = 'themedemo'; //theme name

$check = thchange($themename); //change function

if($check){
    echo "success";
}else{
    echo "error";
}
~~~

-----------
Adding themes Example : config/theme.php

~~~php
'default' => [
        'views' => 'themes.default',
        'assets' => 'themes/default',
    ],

//addnew theme
'newtheme' => [
    'views' => 'themes.newtheme',
    'assets' => 'themes/newtheme',
]
~~~