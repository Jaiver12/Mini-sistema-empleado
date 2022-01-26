@extends('layout.app')

@section('content')
    <h2>Editar</h2>
    <form action="/update/{{$empleado->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fullname">Nombre Compero</label>
            <input type="text" name="fullname" class="form-control" value="{{$empleado->Fullname}}">
        </div>

        <div class="mb-3">
            <label for="dni">Cedula</label>
            <input type="text" name="dni" class="form-control" value="{{$empleado->dni}}">
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{$empleado->email}}">
        </div>

        <div class="mb-3">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" class="form-control" value="{{$empleado->phone}}">
        </div>

        <div class="mb-3">
            <div class="form-group">
              <label for="">Contrato</label>
              <select class="form-control" name="contrato_id" id="contrato_id">
                @foreach ($contratos as $item)
                <option value="{{ $item->id }}"
                    @if ($item->id == $empleado->contrato_id)
                        selected
                    @endif
                    >
                    {{ $item->name }}
                </option>                      
                @endforeach
              </select>
            </div>
        </div>

        <a href="/" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection