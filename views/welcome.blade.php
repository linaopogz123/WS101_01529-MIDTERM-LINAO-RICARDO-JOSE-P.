<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LINAOMIDTERM</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <style>

        center{
            padding-top: 300px;
        }
    </style>
    <body>
        <center>
            <form action="/loginme" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                USERNAME : <input type="username" name="username"><br/>
                PASSWORD : <input type="password" name="password"><br/>
                <a href="http://127.0.0.1:8000/dashboard">Login</a>
            </form>
        </center>
    </body>


</html>
