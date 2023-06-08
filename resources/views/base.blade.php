<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

     <body>
     @yield('content')
        
    
        <footer>
            <p>&copy; {{date('Y')}} &middot; <a href="/abouts-us">About Us</a></p>
        </footer>
    </body>
</html>

