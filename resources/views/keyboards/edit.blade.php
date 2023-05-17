
<form action="{{ url('/keyboards/'.$keyboard->id)}}" method="post" enctype="multipart/form-data">

@csrf
{{method_field('PATCH')}}
@include('keyboards.form',['modo'=>'Editar'])

</form>
