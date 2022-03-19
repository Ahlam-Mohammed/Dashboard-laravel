<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    <!-- Styles -->
    @include('layouts.simple.style')

    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">

            {{-- Loading screen --}}
            @include('components.dashboard.loader')

            {{-- Sidebar --}}
            @include('components.dashboard.sidebar')

            <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">

                {{-- Header --}}
                @include('layouts.simple.header')

                {{-- Main content --}}
                <main>
                    <div class="mt-4">
                        @yield('content')
                    </div>
                </main>
            </div>

        </div>
    </div>

    {{-- Script --}}
    @include('layouts.simple.script')
    @livewireScripts
</body>
</html>
