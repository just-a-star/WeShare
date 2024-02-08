<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WeShare - Sharing notes effortlessly</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden antialiased">
    <div class="container relative mx-auto p-6">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif


        <section id="hero">
            {{-- Container for image & content --}}
            <div class="container mx-auto flex flex-col-reverse p-6 lg:mb-0 lg:flex-row">
                {{-- Content --}}
                <div class="flex flex-col space-y-10 p-2 lg:mt-16 lg:w-1/2">
                    <h1 class="text-center text-3xl font-bold text-sky-950 lg:text-left lg:text-6xl">WeShare Your
                        Ultimate Note Sharing App
                    </h1>
                    <p
                        class="mx-auto max-w-md text-center text-lg text-gray-400 lg:mx-0 lg:mt-0 lg:text-left lg:text-2xl">
                        Discover a new way
                        to
                        create, share, and engage with notes like never before. With WeShare, bring your thoughts to
                        life, share insights, and collaborate effortlessly with others. </p>

                    {{-- Buttons Hero --}}
                    <div class="flex w-full items-center justify-center space-x-4 lg:justify-start">
                        <x-button primary class="text-xl font-semibold" xl light wire:navigate
                            href="{{ url('register') }}">Sign Up
                            Now!</x-button>
                        <x-button secondary class="text-xl font-semibold" xl light wire:navigate
                            href="{{}}">Learn
                            More</x-button>
                    </div>
                </div>

                <div class="relative mx-auto lg:mx-0 lg:mb-0 lg:w-1/2">
                    <div class="bg-hero"></div>
                    <img src="{{ asset('images/notes.svg') }}"
                        class="relative z-10 overflow-x-visible lg:top-24 xl:top-0 xl:w-3/4" overflow-x-visible>

                </div>

            </div>
        </section>

    </div>



</body>

</html>
