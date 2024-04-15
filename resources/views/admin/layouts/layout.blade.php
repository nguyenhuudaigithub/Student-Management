<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>{{ config('app.name', 'Admin') }}</title>

    @include('admin.partials.scripts')

</head>

<body>
    @include('admin.partials.navbar')
    <section id="container">
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('contentAdmin')
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <!-- @include('admin.partials.footer') -->
        <!--footer end-->
    </section>
</body>

</html>
