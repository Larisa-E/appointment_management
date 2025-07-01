<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white h-screen shadow-md">
            <div class="p-4">
                <h2 class="text-lg font-bold mb-4">Dashboard</h2>
                <ul>
                    <li class="mb-2"><a href="{{ route('admin.employees.index') }}" class="text-blue-500 hover:underline">Employees</a></li>
                    <li class="mb-2"><a href="{{ route('admin.leave.index') }}" class="text-blue-500 hover:underline">Leaves</a></li>
                    <li class="mb-2"><a href="{{ route('admin.payroll.index') }}" class="text-blue-500 hover:underline">Payroll</a></li>
                    <li class="mb-2"><a href="{{ route('admin.schedule.index') }}" class="text-blue-500 hover:underline">Schedules</a></li>
                    <li class="mb-2"><a href="{{ route('admin.user.index') }}" class="text-blue-500 hover:underline">Users</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 p-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-bold text-xl">Employees</h3>
                    <p>Manage employee details, roles, and departments.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-bold text-xl">Leaves</h3>
                    <p>Track leave requests and approvals.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-bold text-xl">Payroll</h3>
                    <p>Manage salary, deductions, and bonuses.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-bold text-xl">Schedules</h3>
                    <p>Organize work schedules and shifts.</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="font-bold text-xl">Users</h3>
                    <p>Manage user accounts and permissions.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>