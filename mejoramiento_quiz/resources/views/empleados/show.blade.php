


    <h1>Empleado {{ $empleado->tfno }}</h1>
    <p>Teléfono: {{ $empleado->tfno }}</p>
    <p>Número de hijos: {{ $empleado->num_hijos }}</p>
    <p>NIF: {{ $empleado->nif }}</p>
    <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>

