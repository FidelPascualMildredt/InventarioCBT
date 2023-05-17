@extends('layouts.app2')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('ordenadores/create') }}">Registrar nuevo ordenador</a>


<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Numero de serie </th>
            <th>Modelo</th>
            <th>Brand</th>
            <th>Ram</th>
            <th>Processor</th>
            <th>Hard Disk</th>
            <th>Network Connection</th>
            <th>location</th>
            <th>Operaciones</th>
            
        </tr>
    </thead>

    <tbody id="tabla-ordenadors">
         @foreach( $ordenadors as $ordenador )
        <tr>
            <td>{{ $ordenador->id }}</td>
            <td>{{ $ordenador->serial_number }}</td>
            <td>{{ $ordenador->model }}</td>
            <td>{{ $ordenador->brand }}</td>
            <td>{{ $ordenador->ram }}</td>
            <td>{{ $ordenador->processor }}</td>
            <td>{{ $ordenador->hard_disk }}</td>
            <td>{{ $ordenador->network_connection }}</td>
            <td>{{ $ordenador->location }}</td>
            <td>
            
            
             <a href="{{ url('/ordenadors/'.$ordenador->id.'/edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>
                 
            </a>

        <form action="{{ url('/ordenadors/'.$ordenador->id ) }}" method="post">
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