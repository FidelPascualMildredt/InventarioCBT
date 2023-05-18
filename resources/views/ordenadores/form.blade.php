{{-- <h1>{{$modo}} ordenadores</h1>

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

<br> --}}

<!DOCTYPE html>
<html>
<head>
    <title>{{$modo}} ordenadores</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>{{$modo}} ordenadores</h1>

        <form>
            <div class="form-group">
                <label for="serial_number">Número de serie</label>
                <input type="text" class="form-control" name="serial_number" id="serial_number" value="{{ isset($ordenadores->serial_number) ? $ordenadores->serial_number : '' }}">
            </div>

            <div class="form-group">
                <label for="model">Modelo</label>
                <input type="text" class="form-control" name="model" id="model" value="{{ isset($ordenadores->model) ? $ordenadores->model : '' }}">
            </div>

            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" name="brand" id="brand" value="{{ isset($ordenadores->brand) ? $ordenadores->brand : '' }}">
            </div>

            <div class="form-group">
                <label for="ram">RAM</label>
                <input type="text" class="form-control" name="ram" id="ram" value="{{ isset($ordenadores->ram) ? $ordenadores->ram : '' }}">
            </div>

            <div class="form-group">
                <label for="processor">Procesador</label>
                <input type="text" class="form-control" name="processor" id="processor" value="{{ isset($ordenadores->processor) ? $ordenadores->processor : '' }}">
            </div>

            <div class="form-group">
                <label for="hard_disk">Disco Duro</label>
                <input type="text" class="form-control" name="hard_disk" id="hard_disk" value="{{ isset($ordenadores->hard_disk) ? $ordenadores->hard_disk : '' }}">
            </div>

            <div class="form-group">
                <label for="network_connection">Conexión de Red</label>
                <input type="text" class="form-control" name="network_connection" id="network_connection" value="{{ isset($ordenadores->network_connection) ? $ordenadores->network_connection : '' }}">
            </div>

            <div class="form-group">
                <label for="location">Ubicación</label>
                <input type="text" class="form-control" name="location" id="location" value="{{ isset($ordenadores->location) ? $ordenadores->location : '' }}">
            </div>

            <button type="submit" class="btn btn-primary">{{ $modo }} DATOS</button>
            <a href="{{ url('ordenadores/') }}" class="btn btn-danger">Regresar</a>
        </form>
    </div>

    <!-- Agregar el enlace al archivo JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

