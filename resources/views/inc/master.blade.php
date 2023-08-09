<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TASK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    @stack('styles')
</head>
<body>
<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">TASK</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.users') }}">User Data</a></li>
            <li><a href="{{ route('admin.import') }}">Import Excel</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@stack('scripts')
</body>
</html>
