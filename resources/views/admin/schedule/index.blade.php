<!-- resources/views/admin/schedule/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Schedule Management</h1>
    <!-- Add your schedule management table or content here -->
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Employee Name</th>
                <th class="py-2">Schedule Date</th>
                <th class="py-2">Start Time</th>
                <th class="py-2">End Time</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row -->
            <tr>
                <td class="py-2">1</td>
                <td class="py-2">Jane Doe</td>
                <td class="py-2">2024-11-20</td>
                <td class="py-2">09:00 AM</td>
                <td class="py-2">05:00 PM</td>
                <td class="py-2">
                    <a href="#" class="text-blue-500">Edit</a>
                    <a href="#" class="text-red-500">Delete</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection