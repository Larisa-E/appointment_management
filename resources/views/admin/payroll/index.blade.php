<!-- resources/views/admin/payroll/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-xl font-bold mb-4">Payroll Management</h1>
    <!-- Add your payroll management table or content here -->
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Employee Name</th>
                <th class="py-2">Salary</th>
                <th class="py-2">Deductions</th>
                <th class="py-2">Net Pay</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample row -->
            <tr>
                <td class="py-2">1</td>
                <td class="py-2">John Doe</td>
                <td class="py-2">$3000</td>
                <td class="py-2">$200</td>
                <td class="py-2">$2800</td>
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