{{--
<h1>{{$modo}} equipments</h1>

<label for="serial_number">Número de serie</label>
    <input type="text" name="serial_number" id="serial_number" value="{{ old('serial_number') }}"><br>

    <label for="status">Estado</label>
    <input type="text" name="status" id="status" value="{{ old('status') }}"><br>

    <label for="QR">Código QR</label>
    <input type="text" name="QR" id="QR" value="{{ old('QR') }}"><br>

    <label for="mouses_id">Mouse</label>
    <select name="mouses_id" id="mouses_id">
        @foreach($mouses as $mouse)
            <option value="{{ $mouse->id }}">{{ $mouse->name }}</option>
        @endforeach
    </select><br>

    <label for="ordenadores_id">Ordenador</label>
    <select name="ordenadores_id" id="ordenadores_id">
        @foreach($ordenadores as $ordenador)
            <option value="{{ $ordenador->id }}">{{ $ordenador->name }}</option>
        @endforeach
    </select><br>

    <label for="keyboards_id">Teclado</label>
    <select name="keyboards_id" id="keyboards_id">
        @foreach($keyboards as $keyboard)
            <option value="{{ $keyboard->id }}">{{ $keyboard->name }}</option>
        @endforeach
    </select><br>

    <label for="monitors_id">Monitor</label>
    <select name="monitors_id" id="monitors_id">
        @foreach($monitors as $monitor)
            <option value="{{ $monitor->id }}">{{ $monitor->name }}</option>
        @endforeach
    </select><br>

<input type="submit"  value="{{ $modo }} DATOS">
<a href="{{ url('usuarios/') }}">Regresar</a>

<br> --}}
<!DOCTYPE html>
<html>
<head>
    <title>{{$modo}} Equipments</title>
    <!-- Agregar los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>{{$modo}} Equipments</h1>

        <form>
            <div class="form-group">
                <label for="serial_number">Número de serie</label>
                <input type="text" class="form-control" name="serial_number" id="serial_number" value="{{ old('serial_number') }}">
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <input type="text" class="form-control" name="status" id="status" value="{{ old('status') }}">
            </div>

            <div class="form-group">
                <label for="QR">Código QR</label>
                <input type="text" class="form-control" name="QR" id="QR" value="{{ old('QR') }}">
            </div>

            <div class="form-group">
                <label for="mouses_id">Mouse</label>
                <select class="form-control" name="mouses_id" id="mouses_id">
                    @foreach($mouses as $mouse)
                        <option value="{{ $mouse->id }}">{{ $mouse->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ordenadores_id">Ordenador</label>
                <select class="form-control" name="ordenadores_id" id="ordenadores_id">
                    @foreach($ordenadores as $ordenador)
                        <option value="{{ $ordenador->id }}">{{ $ordenador->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="keyboards_id">Teclado</label>
                <select class="form-control" name="keyboards_id" id="keyboards_id">
                    @foreach($keyboards as $keyboard)
                        <option value="{{ $keyboard->id }}">{{ $keyboard->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="monitors_id">Monitor</label>
                <select class="form-control" name="monitors_id" id="monitors_id">
                    @foreach($monitors as $monitor)
                        <option value="{{ $monitor->id }}">{{ $monitor->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">{{ $modo }} DATOS</button>
            <a href="{{ url('usuarios/') }}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>

    <!-- Agregar el enlace al archivo JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
