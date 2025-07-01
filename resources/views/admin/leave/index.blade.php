@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Leave Management</h1>
    
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Employee Name</th>
                <th class="py-2">Leave Type</th>
                <th class="py-2">Start Date</th>
                <th class="py-2">End Date</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td class="py-2">1</td>
                <td class="py-2">John Doe</td>
                <td class="py-2">Annual Leave</td>
                <td class="py-2">2024-11-01</td>
                <td class="py-2">2024-11-15</td>
                <td class="py-2">
                    <a href="#" class="text-blue-500">Edit</a>
                    <a href="#" class="text-red-500">Delete</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>
@endsection