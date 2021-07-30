@extends("layouts.master")
@section("contenido")
     <main class="container-fluid">
         <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-12 mx-auto">
                <div class="card-header bg-dark bg-gradient text-light">
                    <span>Ingresar Lectura de Medidor</span>
                </div>
                <div class="card-body">
                    <label for="fecha-txt" class="form-label">Ingrese Fecha</label>
                    <input type="date" class="form-control" id="fecha-txt">
                </div>
                <div class="card-body">
                    <label for="hora-txt" class="form-label">Ingrese Hora</label>
                    <input type="time" class="form-control" id="hora-txt">
                </div>
                <div class="card-body">
                    <label for="medidor-txt" class="form-label">Medidor</label>
                    <input type="number" class="form-control" id="medidor-txt" min="0" max="500">
                </div>
                <div class="card-body">
                    <label for="direccion-txt" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion-txt">
                </div>
                <div class="card-body">
                    <label for="valor-txt" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor-txt" min="0" max="10">
                </div>
                <div class="card-body">
                    <label for="tipo-select" class="form-label">Tipo de medida</label>
                    <select class="form-control" id="tipo-select">
                    </select>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar Lectura</button>
                </div>
            </div>
         </div>
     </main>
@endsection

@section("javascript")
    <script src="{{asset('js/servicios/tipoService.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <script src="{{asset('js/boton.js')}}"></script>
@endsection