@extends('layouts.main')
@section('titulo', $titulo)
    
@section('contenido')
     <main id="main" class="main">

    <div class="pagetitle">
        <h1> Categoria</h1>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agregar Categorias</h5>
            
              <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <label for="nombre">Nombre de la Categoria</label>
                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

