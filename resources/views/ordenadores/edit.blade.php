
<form action="{{ url('/ordenadores/'.$ordenador->id)}}" method="post" enctype="multipart/form-data">

@csrf
{{method_field('PATCH')}}
@include('ordenadores.form',['modo'=>'Editar'])

</form>
