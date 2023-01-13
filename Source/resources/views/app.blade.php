
<!DOCTYPE html>
<html>
<head>
    <title>Show patient</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<body>
<div class="container">
    @yield('content')
</div>

@yield('script')
</body>
</html>

