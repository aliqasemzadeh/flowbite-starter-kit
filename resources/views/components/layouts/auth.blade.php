<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="bg-gray-50 dark:bg-gray-900">
<x-notifications />
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{ route('home') }}" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <x-logo />
            {{ config('app.name') }}
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
@include('partials.foot')
</body>
</html>
