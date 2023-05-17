@extends('layouts.app2')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('monitors/create') }}">Registrar nuevo Monitor</a>


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

    <tbody id="tabla-monitor">
         @foreach( $monitors as $monitor )
        <tr>
            <td>{{ $monitor->id }}</td>
            <td>{{ $monitor->serial_number }}</td>
            <td>{{ $monitor->model }}</td>
            <td>{{ $monitor->brand }}</td>
            <td>{{ $monitor->connection_type }}</td>
            <td>{{ $monitor->status }}</td>
            <td>{{ $monitor->location }}</td>
            <td>
            
            
             <a href="{{ url('/monitors/'.$monitor->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>
                 
            </a>

        <form action="{{ url('/monitors/'.$monitor->id ) }}" method="post">
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