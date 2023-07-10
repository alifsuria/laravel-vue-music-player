<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="laravel-version" content="{{ Illuminate\Foundation\Application::VERSION }}">
    <meta name="php-version" content="{{ PHP_VERSION }}">
    <meta name="app-name" content="{{ env('APP_NAME') }}">

    <title>{{env('APP_NAME')}}</title>
    
    @vite(["resources/js/app.js"])
</head>

<body>
    <div id="app"></div>
</body>

</html>