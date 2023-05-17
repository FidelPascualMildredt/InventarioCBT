<h1>{{$modo}} mouses</h1>

<label for="serial_number">Número de serie</label>
<input type="text" name="serial_number" id="serial_number" value="{{ isset($mouses->serial_number) ? $mouses->serial_number : '' }}"><br>

<label for="model">Modelo</label>
<input type="text" name="model" id="model" value="{{ isset($mouses->model) ? $mouses->model : '' }}"><br>

<label for="brand">Marca</label>
<input type="text" name="brand" id="brand" value="{{ isset($mouses->brand) ? $mouses->brand : '' }}"><br>

<label for="connection_type">Tipo de conexión</label>
<input type="text" name="connection_type" id="connection_type" value="{{ isset($mouses->connection_type) ? $mouses->connection_type : '' }}"><br>

<label for="status">Estado</label>
<input type="text" name="status" id="status" value="{{ isset($mouses->status) ? $mouses->status : '' }}"><br>

<label for="location">Ubicación</label>
<input type="text" name="location" id="location" value="{{ isset($mouses->location) ? $mouses->location : '' }}"><br>

<input type="submit" value="{{ $modo }} DATOS">
<a href="{{ url('mouses/') }}">Regresar</a>

<br>
