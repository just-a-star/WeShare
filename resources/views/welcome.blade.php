<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WeShare - Sharing notes effortlessly</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 antialiased">
    <div
        class="bg-dots-darker dark:bg-dots-lighter container relative mx-auto min-h-screen bg-center p-6 selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
        @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif
        <section>
            <div container flex flex-col-reverse mx-auto p-6 lg:flex-row lg:mb-0>
                {{-- Content --}}
                <div class="flex flex-col space-y-5 lg:mt-8 lg:w-1/2">
                    <h1 class="text-center text-3xl font-semibold text-sky-950 lg:text-left lg:text-6xl">Welcome to
                        WeShare - Your Ultimate Note Sharing App
                    </h1>
                    <p class="text-center text-lg text-gray-500 lg:mt-0 lg:text-left lg:text-2xl">Discover a new way to
                        create, share, and engage with notes like never before.</p>
                </div>
                {{-- Buttons Nav --}}
                <div>Hello</div>
            </div>
        </section>

        {{-- <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex items-center justify-center">
                <x-application-logo class="block w-auto h-16 fill-current text-sky-950 dark:text-gray-300" />
                <p class="p-2 text-xl font-semibold text-center text-sky-950 dark:text-gray-300">WeShare
                </p>
            </div>



            <div class="text-sm text-center text-gray-500 ms-4 dark:text-gray-400 sm:ms-0 sm:text-end">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div> --}}
    </div>
    </div>
</body>

</html>
