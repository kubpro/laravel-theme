<?php

if (! function_exists('thview')) {

    /**
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function thview($view = null, $data = [], $mergeData = []){

        $view = thconfig('view',$view);

        return view($view,$data,$mergeData);
    }
}

if (! function_exists('thasset')) {

    /**
     * @param $path
     * @param null $secure
     * @return mixed
     */
    function thasset($path, $secure = null)
    {
        $path= thconfig('asset',$path);

        return app('url')->asset($path, $secure);
    }
}


if (! function_exists('thconfig')) {

    /**
     * @param $type
     * @param null $value
     * @return string
     */
    function thconfig($type,$value = null){

        $theme = env('APP_THEME', config('theme.select'));
        if ($type=='view'){


            $views= config("theme.".$theme.".views").".".$value;

            return $views;

        }elseif($type=='asset'){


            $asset = config("theme.".$theme.".assets")."/".$value;

            return $asset;
        }
    }
}




if (! function_exists('thchange')) {

    /**
     * @param $name
     * @return bool
     */
    function thchange($name){
        //env file path
        $path = app()->environmentFilePath();


        $key = 'APP_THEME';

        $escaped = preg_quote('='.env($key), '/');

        $file = file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$name}",
            file_get_contents($path)
        ));

        if ($file){
            return true;
        }else{
            return false;
        }
    }
}











