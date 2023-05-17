@extends('layouts.app2')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{ url('equipments/create') }}">Registrar nuevo equipo</a>

<input type="text" id="buscar" onkeyup="buscar()" placeholder="Buscar por nombre..." class="buscador">

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Numero de serie </th>
            <th>Estado</th>
            <th>Estado</th>
            <th>QR</th>
            <th>Mouse</th>
            <th>Ordenador</th>
            <th>Teclado</th>
            <th>Monitor</th>
            <th>Acciónes</th>
        </tr>
    </thead>

    <tbody id="tabla-equipos">
         @foreach( $equipments as $equipment )
        <tr>
            <td>{{ $equipment->id }}</td>
            <td>{{ $equipment->serial_number }}</td>
            <td>{{ $equipment->status }}</td>
            <td>{{ $equipment->user }}</td>
            <td>{{ $equipment->QR }}</td>
            <td>{{ $equipment->mouses_id }}</td>
            <td>{{ $equipment->ordenadores_id }}</td>
            <td>{{ $equipment->keyboards_id }}</td>
            <td>{{ $equipment->monitors_id }}</td>

            <td>
            
             <a href="{{ url('/equipments/'.$equipment->id.'/edit')}}">
                 Editar
            </a>

        <form action="{{ url('/equipments/'.$equipment->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borrar">

</form>
    
    </td>
</tr>
@endforeach 
    </tbody>
</table>
</div>

<script>
function buscar() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("buscar");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabla-usuarios");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (filter.length >= 3 && txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else if (filter.length < 3) {
        tr[i].style.display = ""; // Mostrar todos los registros si el filtro está vacío
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@endsection