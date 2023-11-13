<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


        @livewireStyles()
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('includesAdmin.navbar')


          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include('includesAdmin.sidebar')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            {{$slot}}
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          @include('includesAdmin.footer')

          <!-- Control Sidebar -->
          <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}"></script>
        @livewireScripts

        <script>
            window.addEventListener('show-modal',function(e){
                $('#addEtudiant').modal('show');
            })
            window.addEventListener('hide-modal',function(e){
                $('#addEtudiant').modal('hide');
            })
            window.addEventListener('show-modalUser',function(e){
                $('#addNewUser').modal('show');
            })

            window.addEventListener('hide-modalUser',function(e){
                $('#addNewUser').modal('hide');
            })
            window.addEventListener('show-delete-modal',function(e){
                $('#deleteConfirmation').modal('show');
            })
            window.addEventListener('hide-delete-modal',function(e){
                $('#deleteConfirmation').modal('hide');
            })

        </script>
        </body>


</html>
