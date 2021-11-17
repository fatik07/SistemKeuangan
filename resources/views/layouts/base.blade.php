<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="_token" content="{{csrf_token()}}" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  
  <title>@yield('title') | DESAKU</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/logo/desaku.png') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <style>
    .dataTables_scrollHeadInner{
      width:100% !important;
    }
  </style>
  @stack('back-style')
</head>

<body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
  
        {{-- navbar --}}
        @include('includes.navbar')
  
        {{-- sidebar --}}
        <div class="main-sidebar">
          @include('includes.sidebar')
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
          @yield('content')
        </div>
  
        {{-- footer --}}
        <footer class="main-footer">
          @include('includes.footer')
        </footer>
      </div>
    </div>
  
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
