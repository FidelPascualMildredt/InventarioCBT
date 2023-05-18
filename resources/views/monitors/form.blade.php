{{-- <h1>{{$modo}} monitors</h1>

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

<br> --}}
<!DOCTYPE html>
<html>
<head>
    <title>{{$modo}} monitors</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>{{$modo}} monitors</h1>

        <form>
            <div class="form-group">
                <label for="serial_number">Número de serie</label>
                <input type="text" class="form-control" name="serial_number" id="serial_number" value="{{ isset($monitors->serial_number) ? $monitors->serial_number : '' }}">
            </div>

            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ isset($monitors->model) ? $monitors->model : '' }}">
            </div>

            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" name="brand" id="brand" value="{{ isset($monitors->brand) ? $monitors->brand : '' }}">
            </div>

            <div class="form-group">
                <label for="connection_type">Tipo de conexión</label>
                <input type="text" class="form-control" name="connection_type" id="connection_type" value="{{ isset($monitors->connection_type) ? $monitors->connection_type : '' }}">
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <input type="text" class="form-control" name="status" id="status" value="{{ isset($monitors->status) ? $monitors->status : '' }}">
            </div>

            <div class="form-group">
                <label for="location">Ubicación</label>
                <input type="text" class="form-control" name="location" id="location" value="{{ isset($monitors->location) ? $monitors->location : '' }}">
            </div>

            <button type="submit" class="btn btn-primary">{{ $modo }} DATOS</button>
            <a href="{{ url('monitors/') }}" class="btn btn-danger">Regresar</a>
        </form>
    </div>

    <!-- Agregar el enlace al archivo JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

