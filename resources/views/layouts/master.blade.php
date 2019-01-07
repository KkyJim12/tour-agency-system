<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/custom.css">
      <link rel="stylesheet" href="/assets/design-css/style.css">
      <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="/assets/css/rw-core.css">
      <link rel="stylesheet" href="/assets/css/rw-colors.css">
      <link rel="stylesheet" href="/assets/css/thumbnail_image_carousel.css">
      <link rel="stylesheet" href="/assets/css/ion.rangeSlider.css">
      <link rel="stylesheet" href="/assets/css/ion.rangeSlider.skinHTML5.css">
      <link rel="stylesheet" href="/assets/css/ion.rangeSlider.skinHTML5.css">
      <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
      <script src="/assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="/assets/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
      <script src="/assets/js/responsive_bootstrap_carousel.js" type="text/javascript"></script>
      <script src="/assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
      <script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
      <link type="text/css" rel="stylesheet" href="/assets/css/lightslider.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/css/lightgallery.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
      <script src="/assets/js/lightslider.js"></script>
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="@yield('title')">
      <meta name="description" content="@yield('meata')">
   </head>
   <body>
     <div id="cover"> </div>
      @include('components.fb-js')
      @include('components.navbar')
      @yield('content')
      @include('components.js')
      @include('components.footer')
      @include('components.last-footer')
      @include('components.addline')
   </body>
</html>
