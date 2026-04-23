<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <h1>Users List</h1>
    <ul>
        @foreach ($users as $user)
            <li>Hello, {{ $user->name }}</li>
        @endforeach
    </ul>

    @if($users->isEmpty())
        <p>No users found.</p>
    @endif
</body>
</html>
