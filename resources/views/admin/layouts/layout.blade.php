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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/661cb7151ec1082f04e2494f/1hrg2mc44';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>
