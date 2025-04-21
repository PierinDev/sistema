<h1>{{$modo}}</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>


@endif
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
    <br>
</div>


<div class="form-group">

    <label for="Apellidopaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="Apellidopaterno" id="Apellidopaterno" value="{{isset($empleado->Apellidopaterno)?$empleado->Apellidopaterno:old('Apellidopaterno')}}">
    <br>
</div>
<div class="form-group">

    <label for="Apellidomaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="Apellidomaterno" id="Apellidomaterno" value="{{isset($empleado->Apellidomaterno)?$empleado->Apellidomaterno:old('Apellidomaterno')}}">
    <br>
</div>
<div class="form-group">

    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
    <br>
</div>
<div class="form-group">

    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="100px">
    @endif
    <input type="file" class="form-control" name="Foto" id="Foto" value="">
    <br>
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{url('empleado')}}">Regresar</a>


<br>