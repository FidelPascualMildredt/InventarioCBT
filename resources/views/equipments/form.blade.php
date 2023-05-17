
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

<br>
