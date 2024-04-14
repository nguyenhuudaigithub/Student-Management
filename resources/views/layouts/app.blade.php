<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Hutech') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- js -->
    @include('partials.scripts')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('partials.spinner')
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->

        <!-- Content Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="bg-light rounded">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->


        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


</body>

</html>
