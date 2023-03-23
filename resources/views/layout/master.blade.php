{{-- navbar --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <script src="jquery-3.6.3.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="jsquery.js"></script>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Index</title>
    <style>
  </style>
  </head>
  <body>
    <div name="menu">
      <header>
        <h2 class="logo">BagasJuan</h2>
        <nav class="navigation">
          <a href="home" >Home</a>
          {{-- <a href="inputdataset" >Input Dataset</a> --}}
          <a href="inputdata" >Input Data</a>
          <a href="showdata" >Show Data</a>
          <a href="showdataset" >Show DataSet</a>
          <a href="login" >Login</a>
          <a href="#" type="button" name="exit"  class="btn btnLogout-popup"><ion-icon name="log-out-outline"></ion-icon></a>
        </nav>
      </header>
      <div class="footer"></div>
    </div>

    @yield('content')
  </body>
</html>
