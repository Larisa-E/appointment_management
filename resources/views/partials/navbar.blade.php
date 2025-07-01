<!-- resources/views/partials/navbar.blade.php -->

<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}">
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex">
                    <a href="{{ url('/home') }}" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5">
                        Home
                    </a>
                    <!-- Add more navigation links as needed -->
                </div>
            </div>
        </div>
    </div>
</nav>
