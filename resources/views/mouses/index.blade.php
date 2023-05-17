@extends('layouts.app2')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('mouses/create') }}">Registrar nuevo Mouse</a>


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