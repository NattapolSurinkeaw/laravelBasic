<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <?php
        $user = 'nattapol';
        $money = 1500;
    ?>
  </h1>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</body>
</html>