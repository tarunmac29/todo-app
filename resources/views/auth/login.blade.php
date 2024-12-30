@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h1 class="h4">Login Here</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('loginMatch') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" 
                                   class="form-control" 
                                   placeholder="Enter Email..." 
                                   value="{{ old('email') }}" 
                                   required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" 
                                   class="form-control" 
                                   placeholder="Enter Password..." 
                                   required />
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="/" class="btn btn-link">Back</a>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="card-footer bg-danger text-white">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
