<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea><br><br>

    <label>Precio:</label>
    <input type="number" step="0.01" name="precio" required><br><br>

    <label>Stock:</label>
    <input type="number" name="stock" required><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('productos.index') }}">Volver</a>
