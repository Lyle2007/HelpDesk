<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}} - @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <style>
        .hover-cog:hover{
            -webkit-animation: fa-spin 2s linear infinite;
            animation: fa-spin 2s linear infinite;
        }

    </style>

</head>
<body>
