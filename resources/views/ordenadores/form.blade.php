<h1>{{$modo}} ordenadores</h1>

<label for="serial_number">Número de serie</label>
<input type="text" name="serial_number" id="serial_number" value="{{ isset($ordenadores->serial_number) ? $ordenadores->serial_number : '' }}"><br>

<label for="model">Modelo</label>
<input type="text" name="model" id="model" value="{{ isset($ordenadores->model) ? $ordenadores->model : '' }}"><br>

<label for="brand">Marca</label>
<input type="text" name="brand" id="brand" value="{{ isset($ordenadores->brand) ? $ordenadores->brand : '' }}"><br>

<label for="ram">RAM</label>
<input type="text" name="ram" id="ram" value="{{ isset($ordenadores->ram) ? $ordenadores->ram : '' }}"><br>

<label for="processor">Procesador</label>
<input type="text" name="processor" id="processor" value="{{ isset($ordenadores->processor) ? $ordenadores->processor : '' }}"><br>

<label for="hard_disk">Disco Duro</label>
<input type="text" name="hard_disk" id="hard_disk" value="{{ isset($ordenadores->hard_disk) ? $ordenadores->hard_disk : '' }}"><br>

<label for="network_connection">Conexión de Red</label>
<input type="text" name="network_connection" id="network_connection" value="{{ isset($ordenadores->network_connection) ? $ordenadores->network_connection : '' }}"><br>

<label for="location">Ubicación</label>
<input type="text" name="location" id="location" value="{{ isset($ordenadores->location) ? $ordenadores->location : '' }}"><br>

<input type="submit" value="{{ $modo }} DATOS">
<a href="{{ url('ordenadores/') }}">Regresar</a>

<br>