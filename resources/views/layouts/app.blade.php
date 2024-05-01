<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @hasSection('title') - @yield('title') @endif</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body x-data="{ close: false }" class="font-inter antialiased ">
    <x-banner />
    
    <div :class="{'sm:ml-[280px]': ! close, 'left-0': close}" class="min-h-screen sm:ml-[280px] transition-all duration-300">
        @livewire('navigation-menu')        

        <!-- Page Content -->
        @livewire('SidebarNavigation')
        <main>
            @slot('header')
                {{ $header ?? '' }}
            @endslot
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewire('wire-elements-modal')
    @livewireScripts
</body>

</html>
