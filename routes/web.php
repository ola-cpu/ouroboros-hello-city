<?php

use Illuminate\Support\Facades\Route;

route::get('/',function(){

    return view("pages/Home");
})->name('app_home');

route::get('/about-us',function(){

    return view("/pages/about");
})->name('app_about');