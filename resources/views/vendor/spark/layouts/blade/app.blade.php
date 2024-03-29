<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Specific Meta Information -->
    @stack('meta-information')

    <!-- Page Specific Open Graph Tags -->
    @stack('open-graph-tags')

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    @stack('fonts')

    <!-- CSS -->
    <link href="/css/app.css" rel="stylesheet">
    
    <!-- Page Specific CSS -->
    @stack('css')

    <!-- Page Specific Scripts -->
    @yield('scripts', '')
    @stack('header-scripts')

    <!-- Global Spark Object -->
    <script>
        window.Spark = <?php echo json_encode(array_merge(
            Spark::scriptVariables(), []
        )); ?>;
    </script>
</head>
<body class="with-navbar">
    <div>
        <!-- Navigation -->
        @if (Auth::check())
            @include('spark::nav.blade.user')
        @else
            @include('spark::nav.guest')
        @endif

        <!-- Main Content -->
        @yield('content')

        <!-- JavaScript -->
        <script src="/js/app.js"></script>
        @stack('footer-scripts')
    </div>
</body>
</html>
