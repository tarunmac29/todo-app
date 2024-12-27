@extends('layouts.layout')

@section('content')
<h1 class="text-center mb-4 text-light">Edit Task</h1>

<div class="container bg-dark text-light p-4 rounded">
    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="card p-4 shadow bg-dark text-light">
        @csrf
        @method('PUT')

        <!-- Day Number Input -->
        <div class="mb-3">
            <label for="day" class="form-label">Day Number (1-31)</label>
            <input 
                type="number" 
                name="day" 
                id="day" 
                class="form-control bg-dark text-light" 
                min="1" 
                max="31" 
                value="{{ old('day', $task->day) }}">
        </div>
        
        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                class="form-control bg-dark text-light" 
                value="{{ old('title', $task->title) }}" 
                required>
        </div>
        
        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea 
                name="description" 
                id="description" 
                class="form-control bg-dark text-light" 
                rows="4" 
                required>{{ old('description', $task->description) }}</textarea>
        </div>
                
        <!-- Submit and Cancel Buttons -->
        <button type="submit" class="btn btn-success">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-2">Back to Task List</a>
    </form>
</div>
@endsection
