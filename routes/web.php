<?php

use Illuminate\Support\Facades\Route;

route::get('/',function(){

    return view("pages/Home");
});

route::get('/about-us',function(){

    return view("/pages/about");
});