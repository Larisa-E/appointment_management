@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Schedule</h1>
    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_id">Employee</label>
            <select name="employee_id" id="employee_id" class="form-control" required>
                @foreach($employees as $employee)
                <option value="{{ $employee->id }}" {{ $employee->id == $schedule->employee_id ? 'selected' : '' }}>{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="day">Day</label>
            <input type="text" name="day" id="day" value="{{ $schedule->day }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time" value="{{ $schedule->start_time }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time" value="{{ $schedule->end_time }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Schedule</button>
    </form>
</div>
@endsection