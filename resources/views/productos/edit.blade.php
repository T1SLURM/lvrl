@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark fw-bold">
                Editar Producto
            </div>

            <div class="card-body">

                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text"
                               name="nombre"
                               value="{{ $producto->nombre }}"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="descripcion"
                                  class="form-control"
                                  rows="3"
                                  required>{{ $producto->descripcion }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number"
                                   step="0.01"
                                   name="precio"
                                   value="{{ $producto->precio }}"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number"
                                   name="stock"
                                   value="{{ $producto->stock }}"
                                   class="form-control"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('productos.index') }}"
                           class="btn btn-secondary">
                            Volver
                        </a>

                        <button type="submit"
                                class="btn btn-success">
                            Actualizar Producto
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection
