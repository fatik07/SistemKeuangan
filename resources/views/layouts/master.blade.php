<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
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