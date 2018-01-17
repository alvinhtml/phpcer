<?php

namespace App\Http\Controllers;

class HomeController
{
    public function __construct()
    {

    }

    public function index($parmes)
    {
        echo $parmes;
    }

}
?>
