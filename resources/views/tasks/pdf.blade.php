<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task PDF</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6vZ6q4LxwFqYPZ5HmzBQbHzFEpF5W44IK6X6kFhOVpFhF9ZTgtRZt12Vjw" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4 text-dark">Task Details</h1>
        
        <div class="card shadow-sm mb-4 bg-white">
            <div class="card-body">
                <p><strong class="strong-text">Day:</strong> <span class="text-muted">{{ $task->day }}</span></p>
                <p><strong class="strong-text">Title:</strong> <span class="text-muted">{{ $task->title }}</span></p>
                
                <p>
                    <strong>Description:</strong>
                    <span class="text-muted" style="display: block; min-height: 60px;">{!! nl2br(e($task->description)) !!}
                    </span>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb5iGkTgPUxkEw7zF4m0JEoHk3Y4l5a8y8iE+YVCZsc95pmyS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0w6p4XhNSkkw+6IarG04vsSTmH5MSMYmT3iR0hF0p/9v8I9f" crossorigin="anonymous"></script>
</body>
</html>
