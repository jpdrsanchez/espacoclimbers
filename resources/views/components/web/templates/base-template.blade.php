<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
  <meta name="description" content="{{$description}}">
  @livewireStyles
  @vite(['resources/js/web/app.js', 'resources/js/app.js', 'resources/scss/web/app.scss'])
</head>
<body class="app-body">
<x-web.components.menu/>
<div class="app-body__wrapper">
  {{$slot}}
</div>
<x-web.components.footer/>
@livewireScripts
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
