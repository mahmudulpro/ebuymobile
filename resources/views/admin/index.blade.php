<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminPanel</title>
</head>
<body>
<table>
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th>User</th>
    <th>Admin</th>
    <th>Author</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <form action="#" method="post">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}<input type="hidden" name="email" value="{{ $user->email }}"></td>
                <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                <td><input type="checkbox" {{ $user->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
