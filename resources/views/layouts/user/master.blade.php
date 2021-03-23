<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.user.partials.head')
</head>
<body>
    @include('layouts.user.partials.header')
    @yield('content')
    @yield('page_script')
</body>
</html>
