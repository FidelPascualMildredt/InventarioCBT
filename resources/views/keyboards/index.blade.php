@extends('layouts.app2')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('keyboards/create') }}">Registrar nuevo Keyboard</a>


<table class="table table-light">

    <thead class="thead-light">
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

    <tbody id="tabla-keyboards">
         @foreach( $keyboards as $keyboard )
        <tr>
            <td>{{ $keyboard->id }}</td>
            <td>{{ $keyboard->serial_number }}</td>
            <td>{{ $keyboard->model }}</td>
            <td>{{ $keyboard->brand }}</td>
            <td>{{ $keyboard->connection_type }}</td>
            <td>{{ $keyboard->status }}</td>
            <td>{{ $keyboard->location }}</td>
            <td>
            
            
             <a href="{{ url('/keyboards/'.$keyboard->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>
                 
            </a>

        <form action="{{ url('/keyboards/'.$keyboard->id ) }}" method="post">
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