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
              <h5 class="card-title">Administrar Categorias</h5>
             <a href="{{ route('categorias.create') }}" class="btn btn-primary">
              <i class="fa-solid fa-plus"></i> Nueva Categoria</a>
              <hr>
              <!-- Table with stripped rows -->
              <table  class="table datatable">
              
                <thead>
                  <tr>
                    <th>
                      Nombre
                    </th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                  <tr>
                      <td>{{ $item->nombre}}</td>
                    <td>
                      <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                      <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</a>
                    </td>
                  
                  </tr>
                @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

