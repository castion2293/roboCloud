<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <title>Robotech Cloud @yield('title')</title>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('styles')
</head>

<body>
<div id="app">
    @yield('content')

    @yield('scripts')
</div>

<script src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>
