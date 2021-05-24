<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body> 
   <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('img/logo.jpg')}}" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route("registrar_consola")}}">Registrar Consola</a>
              <a class="nav-link" href="{{route("registrar_juegos")}}">Registrar Juego</a>
              <a class="nav-link" href="{{route("ver_consola")}}">Ver Consolas</a>
              <a class="nav-link" href="{{route("ver_juegos")}}">Ver Juegos</a>
            </div>
          </div>
        </div>
      </nav>
   </header>
   <main class="container-fluid pt-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <span>Agregar Consola</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-txt">
                        </div>
                        <div class="mb-3">
                            <label for="marca-select" class="form-label">Marca</label>
                            <select id="marca-txt" class="form-select">
                                <option value="Microsoft">Microsoft</option>
                                <option value="Sony">Sony</option>
                                <option value="Nintendo">Nintendo</option>
                                <option value="Sega">Sega</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="anio-txt">Año de Lanzamiento</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" id="registrar-btn" class="btn btn-success">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </main>
   <footer>

   </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="vendor/tinymce/js/tinymce/tinymce.min.js"> </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!---Librerias de otros antes de mi archivo-->
    <script src="js/index.js"></script>

  </body>
</html>