@extends('layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">categorias</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Editar categoria</a></li>
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
                            <form method="POST" action="{{ route('categorias.update', $categoria) }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required
                                        value="{{ $categoria->nombre }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea name="descripcion" class="form-control" placeholder="Descripción">{{ $categoria->descripcion }}</textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Actualizar categoria</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection