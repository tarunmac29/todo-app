@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Register Here</h1>

    <form action="{{ route('registerSave') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Username:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Username..." required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email..." required />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password..." required />
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Confirm Password..." required />
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="/" class="btn btn-secondary">Back</a>
        </div>
    </form>

    @if ($errors->any())
        <div class="mt-4 alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
