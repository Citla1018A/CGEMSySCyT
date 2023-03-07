<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CERTIFICADOS PREPARATORIA</title>
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5581/5581976.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
        <link rel="stylesheet" href="/resources/css/welcome.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>
    <body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="/" style="color:black;" class="nav-link">Certificados de Preparatoria</a>
            </li>
          </ul>
    </nav>
    <div class="container">
      <form enctype="multipart/form-data" action="obtenerDatos22" method="POST">
      @csrf
      <div class="row">
        <div class="col"></div>
            <div class="col">
                <h1 style="font-weight: 700;font-size: 2.2rem;margin-bottom: 1px;">Certificado Plan 22 </h1>
            </div>
        <div class="col"></div>
      </div>
      <div style="margin-top: 30px">
        <h3 style="text-align: center;font-size: 1.5rem;font-weight: 200; color:black;">Ingrese el documento XML</h3>
        <input style="color:dark; background:#DFDEDE;" class="form-control form-control-lg" accept="text/xml" name="documentoXML" required="" type="file" id="documentoXML">
            <p id="status"></p> 
      </div>
      <div class="container text-center" >
            <div class="row">
              <div class="col align-self-center">
                <h6 style="text-align: center;font-size: 1.3rem;font-weight: 200; color:black;">Selecciona o arrastra el archivo</h6>
                <!--<button style="height:45px; width: 20%; margin-top: 10px;" type="submit" class="btn btn-danger btn-lg"><i class="bi bi-check-lg"></i>Aceptar</button>-->
                <button  style="height:60px; width: 20%; margin-top: 10px;" type="submit"  class="btn btn-danger btn-lg">Aceptar</button>
              </div>
            </div>
      </div>
      </form>
    </div>
    </body>
</html>