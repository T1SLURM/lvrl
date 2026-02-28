<h1>Lista de Productos</h1>

<a href="{{ route('productos.create') }}">Nuevo Producto</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>

    @foreach($productos as $producto)
    <tr>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->stock }}</td>
    </tr>
    @endforeach
</table>
