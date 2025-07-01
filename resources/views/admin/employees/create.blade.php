@extends('layouts.admin')
{{-- @extends('admin') --}}

@section('title')
    {{ __('Add New Employee') }}
@endsection

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Dashboard</h1>

            <h1>Create Employee</h1>

    <form method="POST" action="{{ route('admin.employees.store') }}">
        @csrf
        <div class="form-group">
            <label for="firstname">Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Position</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <!-- Add more input fields for other employee details -->

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

        </div>
    </main>
@endsection