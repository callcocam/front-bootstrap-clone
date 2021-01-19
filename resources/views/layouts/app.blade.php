<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="flex max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8 justify-between items-center">
                <div>
                <x-dropdown width="48" align="left">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>United States</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#">
                            English
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            Deutsch
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            Español‎
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex  space-x-2 mr-10">
                        <x-nav-link href="#">Help</x-nav-link>
                        <x-nav-link href="#">Contacts</x-nav-link>
                    </div>
                    <div class="flex">
                    <ul class="flex  space-x-2">
                        <li><x-nav-link href="#"><i class="fas fa-search"></i></x-nav-link></li>
                        <li><x-nav-link href="#"><i class="fas fa-shopping-cart"></i></x-nav-link></li>
                        <li><x-nav-link href="#"><i class="fas fa-user-circle"></i></x-nav-link></li>
                    </ul>
                    </div>
                </div>
                </div>
            </header>
            @include('layouts.navigation')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
