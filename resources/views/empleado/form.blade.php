    <h1>{{$modo}} Empleado</h1>

    @if (count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <div class="form-group">
        <label for="Nombres"> Nombres </label>
        <input type="text" class="form-control" name="Nombres" value="{{ isset($empleado->Nombres)?$empleado->Nombres:old('Nombres') }}" id="Nombres">
    </div>
    <div class="form-group">
        <label for="Apellidos"> Apellidos </label>
        <input type="text" class="form-control" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" id="Apellidos">
    </div>
    <label for="Email"> Email </label>
    <input type="text" class="form-control" name="Email" value="{{ isset($empleado->Email)?$empleado->Email:old('Email') }}" id="Email">
    <br>
    <div class="form-group">
        <label for="Foto"> Foto </label>
        @if (isset($empleado->Foto))
            <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
        @endif
        <input type="file" class="form-control" name="Foto" value="" id="Foto">
    </div>

    <br>

    <input type="submit" class="btn btn-success" value="{{$modo}} datos">

    <a class="btn btn-primary" href="{{ url('empleado/')}}"> Regresar </a>

    <br>