@extends('layouts.app')

@section('content')

    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Categorias</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Listado</a></li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mb-4 pb-3">
                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm">Agregar producto</a>
            </div>
            <div class="filter cm-content-box box-primary">
                <div class="content-title SlideToolHeader">
                    <div class="cpa">
                        <i class="fa-solid fa-file-lines me-1"></i>Lista de categorias
                    </div>
                    <div class="tools">
                        <a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="cm-content-body form excerpt">
                    <div class="card-body pb-4">
                        <div class="table-responsive">
                            <table class="table" border="1" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorias as $producto)
                                        <tr>
                                            <td>{{ $producto->nombre }}</td>
                                            <td>{{ $producto->descripcion }}</td>
                                            <td class="text-nowrap text-end">
                                                <a href="{{ route('categorias.edit', $producto) }}" class="btn btn-warning btn-sm content-icon">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('categorias.destroy', $producto) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm content-icon" onclick="return confirm('¿Estás seguro de eliminar este producto?');">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection