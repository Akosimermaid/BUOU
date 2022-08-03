<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BUOU') }}</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Style -->
        <style>
             .navig{
                margin-top:2.5%;
                padding-bottom:0;
                height:100%;
                position: relative;
                width:20%;
                float:left;
                margin-right:1%;
            }
            #table{
             
                float:center;
                margin:2%;
                margin-top:0;
                padding:5%;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                @include('layouts.sidebar')
                <!-- slot refers to the dashboard.blade.php -->
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
