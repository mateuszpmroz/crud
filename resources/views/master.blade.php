<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD, BOOTSTRAP, SASS - Project</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">CRUD</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/">Main page</a></li>
            <li><a href="/create">Create element</a></li>
        </ul>
    </div>
</nav>
<div class="container content">
    @yield('content')
</div>
</body>
</html>
