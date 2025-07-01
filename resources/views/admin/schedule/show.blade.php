@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Schedule Details</h1>
    <ul>
        <li><strong>Employee:</strong> {{ $schedule->employee->name }}</li>
        <li><strong>Day:</strong> {{ $schedule->day }}</li>
        <li><strong>Start Time:</strong> {{ $schedule->start_time }}</li>
        <li><strong>End Time:</strong> {{ $schedule->end_time }}</li>
    </ul>
    <a href="{{ route('schedules.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection