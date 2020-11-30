@extends('base')



@section('title' ,config('app.name'))


@section('content')


<img src="images/Folder.jpg" alt="ma premier img">
 <h1> hello city je debut en laravel</h1>

 <p>  l'heure actuel est {{ date('h:i A')}} .</p>

 @endsection