<!doctype html>
<html lang="en">
    @include('layout.head')
<body>
<div id="wrapper">
    @include('layout.header', ['transparentHeader' => $transparentHeader ?? false])

    @yield('content')

    @include('layout.footer')
</div>
</body>
</html>
