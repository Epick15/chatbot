<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title inertia>Epick System</title>

    <meta name="description"
        content="OneUI Vue Edition is a Bootstrap 5 Admin Template & UI Framework based on Vue.js 3. Created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Favicon Links -->
    <link rel="shortcut icon" href="{{ asset('/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('/assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <base href="{{ url('/') }}/">

    <!-- Compiled App Resources -->
    @vite(['resources/js/app.js', "resources/js/views/{$page['component']}.vue"])
    @inertiaHead

    <!-- DataTables Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

</head>

<body>
    @inertia
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery and DataTables Scripts -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
