@extends('base',['pageTitle' => 'hello pays'])






@section('content')


<img src="{{ asset('images/Folder.jpg') }}" alt="ma premier img" class="mt-12 rounded shadow-md h-32">
 
 <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600"> hello city je debut en laravel</h1>

 <p class="text-lg text-gray-800">  l'heure actuel est {{ date('h:i A')}} .</p>

 @endsection