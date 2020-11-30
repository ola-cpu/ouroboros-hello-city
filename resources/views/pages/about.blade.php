@extends('base',['pageTitle' => 'About Us | hello pays'])

@section('title')

About | US 
@endsection

@section('content')

<img src="{{ asset('images/Folder1.jpg') }}" alt="ma deuxieme img" class="my-12 rounded-full shadow-md">


 <h1 class="mb-5 text-gray-700"> je suis le developeur ouroboros <span class="text-pink-500"> &hearts;</span>
 </h1>

<p> retour a la page d'accuile  <a href="{{ route('app_home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Home </a></p>



@endsection