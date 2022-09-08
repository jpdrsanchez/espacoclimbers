<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home | Espaço Climbers</title>
  @livewireStyles
  @vite(['resources/scss/web/app.scss', 'resources/js/web/app.js', 'resources/js/app.js'])
</head>
<body>
@livewireScripts
</body>
</html>
