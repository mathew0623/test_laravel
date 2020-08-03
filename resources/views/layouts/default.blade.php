<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'TEST') - Laravel </title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">TEST</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">HELP</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">SIGN IN</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>