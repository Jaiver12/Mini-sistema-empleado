@extends('layout.app')

@section('content')
    <h2>Registro</h2>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fullname">Nombre Compero</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="dni">Cedula</label>
            <input type="text" name="dni" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <div class="form-group">
              <label for="">Contrato</label>
              <select class="form-control" name="contrato_id" id="contrato_id">
                <option>-------- Selecciona un tipo de contrato --------</option>
                @foreach ($contratos as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>                    
                @endforeach
              </select>
            </div>
        </div>

        <a href="/" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection