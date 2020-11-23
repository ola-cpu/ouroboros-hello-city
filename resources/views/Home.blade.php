<!DOCTYPE html >
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name ="viewport" content="width=device-width, initial-scale=1">

<title>Hello city </title>

</head>
<body>
 <h1> hello city je debut en laravel</h1>

 <p>  l'heure actuel est {{ date('h:i A')}} .</p>

 <footer>
 <p> &copy; Copyright {{date('y')}} &middot; <a href="/about-us">About-Us </a> </p>
 </footer>
 </body>
 </html>