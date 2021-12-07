<!DOCTYPE html>
<html lang="en" data-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMYL - Pro Dashboard</title>
    <link rel="stylesheet" href="{{ asset('smylmrz/css/app.css') }}" />
  </head>
  <body>
    <div id="app" class="app">
      @include('demo::partials.sidebar')

      <main>
        @include('demo::partials.header')

        <div id="content" class="content">
          @yield('content')
        </div>

        @include('demo::partials.footer')
      </main>

    </div>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('smylmrz/js/app.js') }}"></script>
</html>
