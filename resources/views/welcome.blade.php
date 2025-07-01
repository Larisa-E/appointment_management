<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Application</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">

        <!-- Navigation -->
        <nav class="w-full bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold">My Application</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500">Home</a>
                    <a href="{{ route('admin.employees.index') }}" class="text-gray-700 hover:text-blue-500">Employees</a>
                    <a href="{{ route('admin.profile.edit') }}" class="text-gray-700 hover:text-blue-500">Profile</a>
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-blue-500">Admin</a>
                </div>
                <div class="flex items-center">
                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-blue-500">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-blue-500 px-3">Login</a>
                        <a href="{{ route('register') }}" class="text-blue-500 px-3">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex flex-col items-center justify-center flex-1">
            <h2 class="text-2xl font-semibold">Welcome to My Application</h2>
            <p class="mt-4 text-center">Explore our features and get the most out of your experience.</p>
            <div class="mt-6">
                @auth
                    <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Get Started</a>
                @endauth
            </div>
        </main>

        <!-- Footer -->
        <footer class="w-full py-6 text-center bg-white shadow">
            <p class="text-sm text-gray-500">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
        </footer>

    </div>
</body>
</html>