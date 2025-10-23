<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
    <title>@yield('title')</title>
    
</head>

<body class="flex flex-col min-h-screen bg-white">
    <!-- Navbar -->
    <x-navbar :username="$username" :email="$email" :foto="$foto" />

    <!-- Konten Utama -->
    <main class="flex-grow px-10 py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>