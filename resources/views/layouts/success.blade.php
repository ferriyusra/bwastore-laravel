<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  {{-- style --}}
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
  

</head>

<body>
 

    {{-- start page content --}}
    @yield('content')
    {{-- end page content --}}

    {{-- start footer --}}
    @include('includes.footer')
    {{-- end footer --}}

    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>