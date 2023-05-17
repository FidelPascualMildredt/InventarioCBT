<h1>{{$modo}} keyboards</h1>

<label for="serial_number">Número de serie</label>
<input type="text" name="serial_number" id="serial_number" value="{{ isset($keyboards->serial_number) ? $keyboards->serial_number : '' }}"><br>

<label for="model">Modelo</label>
<input type="text" name="model" id="model" value="{{ isset($keyboards->model) ? $keyboards->model : '' }}"><br>

<label for="brand">Marca</label>
<input type="text" name="brand" id="brand" value="{{ isset($keyboards->brand) ? $keyboards->brand : '' }}"><br>

<label for="connection_type">Tipo de conexión</label>
<input type="text" name="connection_type" id="connection_type" value="{{ isset($keyboards->connection_type) ? $keyboards->connection_type : '' }}"><br>

<label for="status">Estado</label>
<input type="text" name="status" id="status" value="{{ isset($keyboards->status) ? $keyboards->status : '' }}"><br>

<label for="location">Ubicación</label>
<input type="text" name="location" id="location" value="{{ isset($keyboards->location) ? $keyboards->location : '' }}"><br>

<input type="submit" value="{{ $modo }} DATOS">
<a href="{{ url('keyboards/') }}">Regresar</a>

<br>
