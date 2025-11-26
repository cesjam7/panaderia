@extends('layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Categorias</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Agregar categoria</a></li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    <div class="card h-auto">
                        <div class="card-body">
                            <form method="POST" action="{{ route('categorias.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea name="descripcion" class="form-control" placeholder="Descripción"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Crear categoria</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection