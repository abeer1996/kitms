<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kodeeo &mdash; IT Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/aos.css">

    <link rel="stylesheet" href="{{asset('/')}}Frontend/assets/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
   <!-- Header Code -->
   @include('Frontend.Partials.header')

    <!-- Main Code -->
    @yield('content')
     
   <!-- Footer Code -->
@include('Frontend.Partials.footer')
  
    
  </div> <!-- .site-wrap -->

  <script src="{{asset('/')}}Frontend/assets/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery-ui.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/popper.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/owl.carousel.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery.stellar.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery.countdown.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/aos.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery.fancybox.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/js/jquery.sticky.js"></script>

  
  <script src="{{asset('/')}}Frontend/assets/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    
  </body>
</html>