<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6YkJ6K+Q6nHwH6Mk4dF3T1d11y6FvT94gFd6Th44T3XfP6w0k9vZ2Zy9Jk" crossorigin="anonymous">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Task Manager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.create') }}">Add Task</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        <p>&copy; {{ date('Y') }} Task Manager. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybGRfF4U9fv1V7Rk8g3D1g7F8eqOol7RE5YflF47pF8P3kF7t5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0+YJQ8c+X3+ONMw7b4p5V5h5Vp05C5Rzq6fdyHpt5pU9ak8h" crossorigin="anonymous"></script>
</body>
</html>
