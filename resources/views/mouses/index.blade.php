@extends('layouts.app2')

@section('content')
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('mouses/create') }}">Registrar nuevo Mouse</a>

<table class="table table-bordered ">
        <tr>
            <th>ID</th>
            <th>Numero de serie </th>
            <th>Modelo</th>
            <th>Brand</th>
            <th>connection_type</th>
            <th>status</th>
            <th>location</th>
            <th>Operaciones</th>

        </tr>
    </thead>

    <tbody id="tabla-mouses">
         @foreach( $mouses as $mouse )
        <tr>
            <td>{{ $mouse->id }}</td>
            <td>{{ $mouse->serial_number }}</td>
            <td>{{ $mouse->model }}</td>
            <td>{{ $mouse->brand }}</td>
            <td>{{ $mouse->connection_type }}</td>
            <td>{{ $mouse->status }}</td>
            <td>{{ $mouse->location }}</td>
            <td>


             <a href="{{ url('/mouses/'.$mouse->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>

            </a>

        <form action="{{ url('/mouses/'.$mouse->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borrar" class="btn btn-danger"> <i class="fa-regular fa-trash-can"></i> </button>

</form>

    </td>
</tr>
@endforeach
    </tbody>
</table>
</div>



@endsection
