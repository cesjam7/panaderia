@extends('layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Productos</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Editar Producto</a></li>
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
                            <form method="POST" action="{{ route('productos.update', $producto) }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required
                                        value="{{ $producto->nombre }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea name="descripcion" class="form-control" placeholder="Descripción">{{ $producto->descripcion }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="number" step="0.01" class="form-control" name="precio" placeholder="Precio" required
                                        value="{{ $producto->precio }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input type="number" class="form-control" name="stock" placeholder="Stock" required
                                        value="{{ $producto->stock }}">
                                </div>
                                <button class="btn btn-primary" type="submit">Actualizar Producto</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection