
    <h1>Editar empleado {{ $empleado->tfno }}</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="tfno">Teléfono:</label>
        <input type="text" id="tfno" name="tfno" value="{{ $empleado->tfno }}"><br><br>
        <label for="num_hijos">Número de hijos:</label>
        <input type="number" id="num_hijos" name="num_hijos" value="{{ $empleado->num_hijos }}"><br><br>
        <label for="nif">NIF:</label>
        <input type="text" id="nif" name="nif" value="{{ $empleado->nif }}"><br><br>
        <button type="submit">Actualizar</button>
    </form>


