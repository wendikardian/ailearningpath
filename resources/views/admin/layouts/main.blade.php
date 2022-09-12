<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} - eCraft2Learn </title>
    <link rel="icon" type="image/x-icon" href="res/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <div class="flex">
      <!-- Side Bar Menu -->
        @include('admin.partials.sidebar')
      <!-- End Side Bar Menu -->

      <!-- Content -->
      <div class="w-full h-full p-2 mx-8 overflow-y-auto">
        <!-- Content Header -->
        @include('admin.partials.header')
        <!-- End Content Header -->
        @yield('content')
      </div>
      <!-- End Content -->
    </div>
  </body>
</html>
