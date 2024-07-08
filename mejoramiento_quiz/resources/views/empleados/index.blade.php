

    <h1>Lista de Empleados</h1>
    <ul>
        @foreach($empleados as $empleado)
            <li>
                {{ $empleado->tfno }} - {{ $empleado->nif }} - {{ $empleado->num_hijos }}
                <a href="{{ route('empleados.show', $empleado->id) }}">Ver</a>
                <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('empleados.create') }}">Crear nuevo empleado</a>

