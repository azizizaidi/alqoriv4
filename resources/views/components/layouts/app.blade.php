<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ env('APP_NAME') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @filamentStyles
    @vite('resources/css/app.css')
    @vite('resources/css/filament/admin/theme.css') <!-- Ensure this is included -->
</head>

<body class="antialiased">
    @livewire('alert') <!-- Include Livewire Alert component here -->
    
    <input type="checkbox" id="sidebar-toggle" class="hidden" />

    <!-- Sidebar -->
    <label for="sidebar-toggle" class="sidebar-toggle-label fixed top-4 left-4 p-2 bg-blue-500 text-white cursor-pointer z-50">Toggle Sidebar</label>
    <div id="sidebar" class="sidebar bg-gray-800 transition-transform duration-300 ease-in-out">
        <!-- Sidebar content -->
    </div>

    <!-- Main Content -->
    <div id="content" class="main-content transition-all duration-300 ease-in-out">
        <!-- Content -->
        {{ $slot }}
    </div>

    @livewire('notifications')

    @filamentScripts
    @vite('resources/js/app.js')
    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>
</html>
