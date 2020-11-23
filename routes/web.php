<?php

use Illuminate\Support\Facades\Route;

route::get('/',function(){

    return view("Home");
});

route::get('/about-us',function(){

    return view("about");
});