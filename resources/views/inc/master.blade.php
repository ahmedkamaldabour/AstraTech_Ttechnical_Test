<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Tool</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('admin.users') }}">User Data</a></li>
        <li><a href="{{ route('admin.import') }}">Import Excel</a></li>
    </ul>
</nav>

<div class="content">
    @yield('content')
</div>
</body>
</html>
