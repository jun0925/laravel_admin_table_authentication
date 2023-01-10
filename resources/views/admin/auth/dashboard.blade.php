<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if(session()->has('message'))
            {{ session()->get('message') }}
        @endif
    </div>
    <div class="container">
        Welcome, Admin
    </div>
    <a href="/admin/logout">Logout</a>
</body>
</html>