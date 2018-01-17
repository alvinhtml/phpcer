<?php

namespace Routes;



class Route
{


    static $registor = [];
    static $action;
    static $controller;

    static function register($method, $url, $action) {
        self::$registor[$method][$url] = $action;
        // echo '<pre>';
        // var_dump(self::$registor);
        // echo '</pre>';
    }

    public static function get($url, $action) {
        //var_dump(self::$registor);
        self::register("GET", $url, $action);
    }

    public static function dispatcher() {

        echo "<pre>";
        print_r($_SERVER);



        $callable = self::$registor[$_SERVER['REQUEST_METHOD']][$_SERVER['REDIRECT_URL']];

        if (is_callable($callable)) {
            $callable();
        } else {
            if (is_string($callable)) {
                $explodes = explode('@', $callable);
                call_user_func(array('\\App\Http\Controllers\\'.$explodes[0], $explodes[1]), "h-o-m-e");
            } else {
                
            }
        }


        // var_dump(is_callable($fun));

        // $_SERVER['REQUEST_METHOD']
        //
        //
        // $ActionMethod = explode('@', self::$registor[$_SERVER['REQUEST_METHOD']][$url]);
        // var_dump($ActionMethod);
    }
}
