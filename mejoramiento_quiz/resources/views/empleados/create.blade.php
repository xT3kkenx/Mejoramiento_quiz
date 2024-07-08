
    <h1>Crear nuevo empleado</h1>
    <form action="{{ route('empleados.store') }}" method="post">
        @csrf
        <label for="tfno">Teléfono:</label>
        <input type="text" id="tfno" name="tfno"><br><br>
        <label for="num_hijos">Número de hijos:</label>
        <input type="number" id="num_hijos" name="num_hijos"><br><br>
        <label for="nif">NIF:</label>
        <input type="text" id="nif" name="nif"><br><br>
        <button type="submit">Crear</button>
    </form>




