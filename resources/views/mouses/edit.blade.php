
<form action="{{ url('/mouses/'.$mouse->id)}}" method="post" enctype="multipart/form-data">

@csrf
{{method_field('PATCH')}}
@include('mouses.form',['modo'=>'Editar'])

</form>
