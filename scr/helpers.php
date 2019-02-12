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

        $theme = env('KUB_THEME', config('theme.select'));
        if ($type=='view'){


            $views= config("theme.".$theme.".views").".".$value;

            return $views;

        }elseif($type=='asset'){


            $asset = config("theme.".$theme.".assets")."/".$value;

            return $asset;
        }
    }
}







