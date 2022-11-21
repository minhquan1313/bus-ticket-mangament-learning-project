<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('master_title')</title>

    @vite('resources/css/app.css')

    <!-- Fonts SVN Poppins -->
    @vite('resources/css/fonts/SVNPoppins/stylesheet.css')

    <!-- Fonts Material icons -->
    @vite('resources/css/fonts/materialIcon.css')
</head>

<body class="text-[#343A40] bg-oWhite">
    @yield('master_body')
</body>

</html>
