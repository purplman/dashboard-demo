<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMYL - Pro Dashboard</title>
    <link rel="stylesheet" href="{{ asset('smylmrz/css/app.css') }}" />
  </head>
  <body>
    <div id="app">
      <main>
        <div class="auth">
          @yield('content')
        </div>
      </main>
    </div>
  </body>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>
