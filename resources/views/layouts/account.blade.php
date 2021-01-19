<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @include('layouts.includes.styles')
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <x-layout.header />
            @include('layouts.navigation')
            <!-- Page Content -->
            <main>
                <div class="py-10 px-5 md:pt-8 md:pb-24 bg-primary-900">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="flex md:p-6 ">
                                <div class="block flex-1">
                                <h1 class="hidden md:flex w-full text-4xl text-white font-bold">Personal info</h1>
                                    <nav class="flex text-white rounded font-sans w-full md:mt-3">
                                    <ol class="list-reset flex text-grey-dark">
                                    <li><a href="#" class="text-blue font-bold">Home</a></li>
                                    <li><span class="mx-2">/</span></li>
                                    <li><a href="#" class="text-blue font-bold">Account</a></li>
                                    <li><span class="mx-2">/</span></li>
                                    <li>Perssonal info</li>
                                    </ol>
                                    </nav>
                                </div>
                                <div class="hidden md:flex items-center justify-center">
                                <x-logout-form class="bg-primary-700 py-3 px-6 text-white font-bold"> </x-logout-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-4 max-w-7xl mx-5 md:mx-auto md:-mt-20 gap-8 sm:px-6 lg:px-8">
    <div class="hidden lg:block lg:col-span-1">
        <div class="flex justify-center items-center bg-white shadow rounded-t-lg">
            <div class="block text-center mt-6">
                <div class="relative">
                <img class="rounded-full w-full" src="{{ Storage::url('img/img1.jpg') }}" alt="Profile Photo">
                    <span class="absolute right-3 bottom-5">
                    <img src="{{ Storage::url('img/top-vendor.svg') }}" alt="">
                    </span>
                    </div>
                    <p class="flex flex-col font-bold text-2xl mt-3">
                    Natalie Curtis
                        <span class="text-gray-400 text-sm">natalie@example.com</span>
                    </p>
            </div>
        </div>
        <nav class="py-5 bg-white shadow rounded-b-lg">
         <h2 class="font-bold mb-3 mx-4">ACCOUNT</h2>
          <ul class="block mx-0 my-3">
              <li class="py-2 border-l-4 border-info-900"><a href="{{ route('account-overview') }}" class="mx-6 text-info-600 hover:text-info-800 text-sm block"><i class="fas fa-id-card mr-3"></i> <span class="text-base">Personal info</span></a></li>
              <li class="py-2"><a href="{{ route('account-login-and-security') }}" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-shield-alt mr-3"></i> <span class="text-base">Login & Security</span></a></li>
              <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-bell mr-3"></i> <span class="text-base">Notifications</span></a></li>
              <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block relative"><i class="fas fa-sliders-h mr-3"></i> <span class="text-base">Preferences</span><small class="text-xs text-info-900 bg-gray-300 rounded-full text-center h-4 w-4 absolute top-2 right-1">2</small></a></li>
          </ul>
         <h2 class="font-bold mb-3 mx-4">SHOPPING</h2>
            <ul class="block mx-0 my-3">
                <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-shopping-basket mr-3"></i> <span class="text-base">Your orders</span></a></li>
                <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-heart mr-3"></i> <span class="text-base">Wishlist</span></a></li>
            </ul>
         <h2 class="font-bold mb-3 mx-4">BILLING</h2>
            <ul class="block mx-0 my-3">
                <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-credit-card mr-3"></i> <span class="text-base">Plans & payment</span></a></li>
                <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block"><i class="fas fa-map-marker-alt mr-3"></i> <span class="text-base">Address</span></a></li>
                <li class="py-2"><a href="" class="mx-6 text-gray-600 hover:text-info-800 text-sm block relative"><i class="fas fa-users mr-3"></i> <span class="text-base">Teams </span><small class="text-xs bg-gray-300 rounded-lg px-1 absolute mt-2 right-1">+2 new users</small></a></li>
            </ul>
        </nav>
    </div>
    <div class="col-span-4 lg:col-span-3">
                {{ $slot }}
    </div>
    </div>
            </main>
            <x-layout.footer />
        </div>
         @include('layouts.includes.scripts')
        <!-- <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        <script src="{{ asset('js/form.js')}}"></script> -->

        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var quill = new Quill('#description', {
                theme: 'snow'
            });
        </script>
    </body>
</html>