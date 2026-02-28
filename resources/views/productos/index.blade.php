@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Lista de Productos</h2>
    <a href="{{ route('productos.create') }}" class="btn btn-primary">
        + Nuevo Producto
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        @if($productos->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td style="max-width: 250px;">
                            {{ Str::limit($producto->descripcion, 60) }}
                        </td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $producto->stock }}
                            </span>
                        </td>
                        <td class="text-center">

                            <a href="{{ route('productos.edit', $producto->id) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('productos.destroy', $producto->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                                    Eliminar
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @else
            <div class="alert alert-info text-center">
                No hay productos registrados.
            </div>
        @endif

    </div>
</div>

@endsection
