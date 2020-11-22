<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city </title>

        
    </head>
    <body >
        <h1>hello les bros je fais du laravel</h1>

        <p>  it's currently {{ date('h:i A')}} </p>

        <footer>
        <p> &copy; Copyright {{date('Y')}} &middot; <a href="#">About Us</a>/p>
        </footer>
    </body>
</html>
