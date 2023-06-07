<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>

     <body>
        <h1> hello from Diourbel !</h1>
        <p>l'heure actuel est {{date('H:i A')}}. </p>
        <footer>
            <p>&copy; {{date('Y')}} &middot; <a href="#">About Us</a></p>
        </footer>
    </body>
</html>
