<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('admin.includes.head')
<body>
@include('admin.includes.sidebar')
@include('admin.includes.header')
@yield('content')
@include('admin.includes.footer')
@include('admin.includes.scripts')
@stack('scripts')
</body>
</html>
