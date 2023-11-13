<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Université Polytechnique de Bucarest (UPB)</title>

        <!-- Favicons -->
  <link href="{{ asset('dist/img/upb.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="{{asset('assets/colorlib/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">

        <!-- DATE-PICKER -->
        <link rel="stylesheet" href="{{asset('assets/colorlib/vendor/date-picker/css/datepicker.min.css')}}">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="{{asset('assets/colorlib/css/style.css')}}">
        <!-- Fonts -->
         <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        @livewireStyles
    </head>
    <body class="hold-transition">

        <div class="wrapper">
             @include('includeStudent.header')



            <div class="content-wrapper">
                    {{$slot}}
                    <!-- /.content -->
            </div>


             @include('includeStudent.footer')
        </div>

        @livewireScripts

 <!-- Vendor JS Files -->
 <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
 <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
 <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
 <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
 <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
 <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('assets/js/main.js')}}"></script>
 <script src="{{asset('asstes/js/jquery-3.3.1.min.js')}}"></script>

            <!-- JQUERY STEP -->
            <script src="{{asset('asstes/js/jquery.steps.j')}}s"></script>

            <!-- DATE-PICKER -->
            <script src="{{asset('assets/}vendor/date-picker/js/datepicker.js')}}"></script>
            <script src="{{asset('assets/vendor/date-picker/js/datepicker.en.js')}}"></script>

            <script src="{{asset('asstes/js/main.js')}}"></script>


            <script src="js/jquery-3.3.1.min.js"></script>
    </body>


</html>
