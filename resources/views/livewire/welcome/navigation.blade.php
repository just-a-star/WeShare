<nav class="container relative mx-auto p-4">
    <!-- Flex Container For Nav Items -->
    <div class="my-4 flex items-center justify-end space-x-10">
        <x-button lg flat secondary label="Features" href="#">Features</x-button>
        <x-button lg flat secondary label="FAQ" href="#">FAQ</x-button>
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white"
                wire:navigate>Dashboard</a>
        @else
            @if (Route::has('register'))
                <x-button lg flat secondary label="Register" href="{{ url('register') }} " wire:navigate></x-button>
            @endif

            <x-button lg light primary label="Login" href="{{ route('login') }}" wire:navigate>Login</x-button>
        @endauth
    </div>
</nav>
