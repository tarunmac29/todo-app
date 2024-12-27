@extends('layouts.layout')

@section('content')
<h1 class="text-center mb-4 text-light">Add New Task</h1>

<div class="container">
    <!-- Dark-themed form container -->
    <form action="{{ route('tasks.store') }}" method="POST" class="card p-4 shadow bg-dark text-light">
        @csrf
        
        <!-- Day Number Input -->
        <div class="mb-3">
            <label for="day" class="form-label">Day (1-31)</label>
            <input type="number" name="day" id="day" class="form-control bg-dark text-light border-light" min="1" max="31" required>
        </div>

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" name="title" id="title" class="form-control bg-dark text-light border-light" required>
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea name="description" id="description" class="form-control bg-dark text-light border-light" rows="4" required></textarea>
        </div>

        

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Create New Task</button>

        <!-- Cancel Button -->
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-2">Back to Task List</a>
    </form>
</div>
@endsection
