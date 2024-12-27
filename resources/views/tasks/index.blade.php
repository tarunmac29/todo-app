@extends('layouts.layout')

@section('content')
<h1 class="text-center mb-4 text-light">Daily Task List</h1>

<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add New Task</a>


<div class="container">
    <table class="table table-striped table-dark">
        

        <thead class="table-dark">
            <tr>
                <th>Day</th>
                <th>Task Title</th>
                <th>Task Description</th>
                <th>Manage Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->day }}</td>
                <!-- <td>{{ $task->title }}</td> -->
                <td>{{ Str::limit($task->title, 60) }}</td>
                <td>{{ Str::limit($task->description, 50) }}</td>

                <td>
                    <!-- View Button -->
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info">View</a>
                    <!-- Edit Button -->
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <!-- Delete Button -->
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
