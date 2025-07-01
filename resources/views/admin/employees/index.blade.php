@extends('layouts.app')

@section('title')
{{ __('Manage Employees') }}
<!-- Tailwind CSS -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white shadow-md">
            <div class="p-4">
                <h2 class="text-lg font-bold mb-4">Dashboard</h2>
                <ul>
                    <li class="mb-2"><a href="{{ route('admin.employees.index') }}"
                            class="text-blue-500 hover:underline">Employees</a></li>
                    <li class="mb-2"><a href="{{ route('admin.leave.index') }}"
                            class="text-blue-500 hover:underline">Leaves</a></li>
                    <li class="mb-2"><a href="{{ route('admin.payroll.index') }}"
                            class="text-blue-500 hover:underline">Payroll</a></li>
                    <li class="mb-2"><a href="{{ route('admin.schedule.index') }}"
                            class="text-blue-500 hover:underline">Schedules</a></li>
                    <li class="mb-2"><a href="{{ route('admin.user.index') }}"
                            class="text-blue-500 hover:underline">Users</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow p-6 bg-gray-100">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold">Employees</h1>
                <a href="{{ route('admin.employees.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    <span class="ps-1">{{ __('Add New') }}</span>
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="font-bold text-lg mb-4">Employee List</h2>>
                <a href="{{ route('admin.employees.create') }}" class="btn btn-primary mb-3">Create Employee</a>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employee as $employee)
                            <tr class="text-gray-700">
                                <td class="border px-4 py-2">{{ $employee->id }}</td>
                                <td class="border px-4 py-2">{{ $employee->name }}</td>
                                <td class="border px-4 py-2">{{ $employee->email }}</td>
                                <td class="border px-4 py-2">{{ $employee->position }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('admin.employees.show', $employee->id) }}"
                                        class="text-blue-500 hover:underline">View Profile</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
@endsection