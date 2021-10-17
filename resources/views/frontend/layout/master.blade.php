<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--    css section--}}
    @include('frontend.layout.partials.head')
    {{--    css section--}}

    <style type="text/css" id="enject"></style>
</head>
<body>
<!-- Header Start====================================================================== -->
@include('frontend.layout.partials.header')
<!-- Header End====================================================================== -->

@yield('content')

<!-- Footer ================================================================== -->
@include('frontend.layout.partials.footer')
<!-- Themes switcher section ============================================================================================= -->
@include('frontend.layout.partials.sesectionbox')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
@include('frontend.layout.partials.script')

</body>
</html>
