<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('custom.bootstrap')
    @yield('Judul')
</head>
<body>
    <div class="container-fluid">
        @include('layout.navbar')

        @yield('pagecontent')
    </div>

    @include('custom.bootstrapjs')
</body>
</html>