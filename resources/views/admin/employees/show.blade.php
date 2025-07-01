@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>
    <ul>
        <li><strong>Name:</strong> {{ $employee->name }}</li>
        <li><strong>Email:</strong> {{ $employee->email }}</li>
        <li><strong>Position:</strong> {{ $employee->position }}</li>
    </ul>
    <a href="{{ route('admin.employees.show', $employee->id) }}">View Profile</a>
</div>
@endsection