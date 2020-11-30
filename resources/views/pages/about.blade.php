@extends('base')

@section('title')

About | US 
@endsection

@section('content')

<img src="{{ asset('images/Folder1.jpg') }}" alt="ma deuxieme img">


 <h1> je suis le developeur ouroboros &hearts;</h1>

<p> retour a la page d'accuile  <a href="{{ route('app_home') }}">Home </a></p>



@endsection