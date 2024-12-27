@extends('layouts.layout')

@section('content')
<h1 class="text-center mb-4 text-light">Task Details</h1>

<div class="container">
    <!-- Dark-themed card container -->
    <div class="card shadow mb-3 bg-dark text-light">
        <div class="card-body">
            <h3 class="card-title">Task Title : {{ $task->title }}</h3>
            <p class="card-text"><strong>Day:</strong> {{ $task->day }}</p>
            <!-- <p class="card-text">{{ $task->description }}</p> -->
        
            <p class="card-text"><strong>Task Description:</strong></p>
            <pre class="card-text bg-dark text-light p-3 rounded" style="white-space: pre-wrap; word-wrap: break-word;">{{ $task->description }}</pre>


            <a href="{{ route('tasks.index') }}" class="btn btn-info">Back to List</a>

            <!-- Download Buttons -->
            <a href="{{ route('tasks.downloadPdf', $task->id) }}" class="btn btn-info">Download as PDF</a>
            <!-- <a href="{{ route('tasks.downloadWord', $task->id) }}" class="btn btn-info">Download as Word</a> -->
        </div>
    </div>
</div>
@endsection
