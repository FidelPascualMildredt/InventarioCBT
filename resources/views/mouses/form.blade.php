{{-- <h1>{{$modo}} mouses</h1>

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

<br> --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $modo }} mouses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
        <div class="container-fluid">
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $modo }} mouses</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('/mouses' . (isset($mouses->id) ? '/' . $mouses->id : '')) }}" method="POST">
                            @csrf
                            @if (isset($mouses->id))
                                @method('PUT')
                            @endif

                            <div class="mb-3">
                                <label for="serial_number" class="form-label">Número de serie</label>
                                <input type="text" class="form-control" name="serial_number" id="serial_number"
                                    value="{{ isset($mouses->serial_number) ? $mouses->serial_number : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="model" class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="model" id="model"
                                    value="{{ isset($mouses->model) ? $mouses->model : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="brand" class="form-label">Marca</label>
                                <input type="text" class="form-control" name="brand" id="brand"
                                    value="{{ isset($mouses->brand) ? $mouses->brand : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="connection_type" class="form-label">Tipo de conexión</label>
                                <input type="text" class="form-control" name="connection_type" id="connection_type"
                                    value="{{ isset($mouses->connection_type) ? $mouses->connection_type : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Estado</label>
                                <input type="text" class="form-control" name="status" id="status"
                                    value="{{ isset($mouses->status) ? $mouses->status : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Ubicación</label>
                                <input type="text" class="form-control" name="location" id="location"
                                    value="{{ isset($mouses->location) ? $mouses->location : '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Ubicación</label>
                                <input type="text" class="form-control" name="location" id="location"
                                    value="{{ isset($mouses->location) ? $mouses->location : '' }}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="{{ $modo }} DATOS">
                            <a href="{{ url('mouses/') }}" type="submit" class="btn btn-danger m-1" href="/usuarios"
                                id="regresar">Regresar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
