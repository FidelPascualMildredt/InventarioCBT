<h1>{{$modo}} monitors</h1>

<label for="serial_number">Número de serie</label>
<input type="text" name="serial_number" id="serial_number" value="{{ isset($monitors->serial_number) ? $monitors->serial_number : '' }}"><br>

<label for="model">Modelo</label>
<input type="text" name="model" id="model" value="{{ isset($monitors->model) ? $monitors->model : '' }}"><br>

<label for="brand">Marca</label>
<input type="text" name="brand" id="brand" value="{{ isset($monitors->brand) ? $monitors->brand : '' }}"><br>

<label for="connection_type">Tipo de conexión</label>
<input type="text" name="connection_type" id="connection_type" value="{{ isset($monitors->connection_type) ? $monitors->connection_type : '' }}"><br>

<label for="status">Estado</label>
<input type="text" name="status" id="status" value="{{ isset($monitors->status) ? $monitors->status : '' }}"><br>

<label for="location">Ubicación</label>
<input type="text" name="location" id="location" value="{{ isset($monitors->location) ? $monitors->location : '' }}"><br>

<input type="submit" value="{{ $modo }} DATOS">
<a href="{{ url('monitors/') }}">Regresar</a>

<br>
