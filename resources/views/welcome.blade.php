<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CERTIFICADOS PREPARATORIA</title>
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5581/5581976.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
      </head>
    <body>
    @include('sweetalert::alert')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="/" class="nav-link" style="color:black;">
              Certificados de preparatoria</a>
            </li>
          </ul>
    </nav>
    <div style="margin-bottom: 30px">
      <h2 style="text-align: center;font-weight: 700;font-size: 2.2rem;">CERTIFICADOS DE PREPARATORIA ABIERTA</h2>
    </div>
    <div class="container text-center" style="margin-top: 40px;">
      <div class="row align-items-center">
        <div class="col-lg-3 col-6">
        <div class="card bg-info" style="border-radius: 0.25rem;box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);display: block;margin-bottom: 20px;position: relative;">
          <div class="card-body" style="padding: 10px;">
            <h3 class="card-title" style="font-weight: 700; text-align:center;color: #f8f9fa; font-size: 2.2rem;">Certificado Plan 22</h3>
          </div>
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.1); color: rgba(255, 255, 255, 0.8);display: block;padding: 3px 0;position: relative;text-align: center;text-decoration: none;z-index: 10;">
            <a href="/22"style="color: rgba(255, 255, 255); text-decoration: none; font-size: 1.2rem;">Generar certificado<i class="bi bi-arrow-right-circle" style="margin-left:5px;"></i></a>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="card bg-warning"style="border-radius: 0.25rem;box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);display: block;margin-bottom: 20px;position: relative;">
          <div class="card-body" style="padding: 10px;">
            <h3 class="card-title" style="font-weight: 700; text-align:center;color: #f8f9fa; font-size: 2.2rem;">Certificado Plan 33</h3>
          </div>
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.1); color: rgba(255, 255, 255, 0.8);display: block;padding: 3px 0;position: relative;text-align: center;text-decoration: none;z-index: 10;">
            <a href="/33"style="color: rgba(255, 255, 255); text-decoration: none; font-size: 1.2rem;">Generar certificado<i class="bi bi-arrow-right-circle" style="margin-left:5px;"></i></a>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="card bg-success"style="border-radius: 0.25rem;box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);display: block;margin-bottom: 20px;position: relative;">
          <div class="card-body" style="padding: 10px;">
            <h3 class="card-title" style="font-weight: 700; text-align:center;color: #f8f9fa; font-size: 2.2rem;">Certificado Parcial 22</h3>
          </div>
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.1); color: rgba(255, 255, 255, 0.8);display: block;padding: 3px 0;position: relative;text-align: center;text-decoration: none;z-index: 10;">
            <a href="/parcial"style="color: rgba(255, 255, 255); text-decoration: none; font-size: 1.2rem;">Generar certificado<i class="bi bi-arrow-right-circle" style="margin-left:5px;"></i></a>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-6">
        <div class="card bg-danger"style="border-radius: 0.25rem;box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);display: block;margin-bottom: 20px;position: relative;">
          <div class="card-body" style="padding: 10px;">
            <h3 class="card-title" style="font-weight: 700; text-align:center;color: #f8f9fa; font-size: 2.2rem;">Certificado Parcial 33</h3>
          </div>
          <div class="card-body" style="background-color: rgba(0, 0, 0, 0.1); color: rgba(255, 255, 255, 0.8);display: block;padding: 3px 0;position: relative;text-align: center;text-decoration: none;z-index: 10;">
            <a href="/parcial33"style="color: rgba(255, 255, 255); text-decoration: none; font-size: 1.2rem;">Generar certificado<i class="bi bi-arrow-right-circle" style="margin-left:5px;"></i></a>
          </div>
        </div>
        </div>
      </div>
    </div>
</body>
</html>
