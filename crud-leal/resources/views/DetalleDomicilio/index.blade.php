@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Detalle Domicilio</h5>
<br>

<div class="d-grid gap-2">
   <a href="detalledomicilios/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Domicilio</th>
<th class="table-dark" scope="col">Estado</th>
<th class="table-dark" scope="col">Direccion</th>
<th class="table-dark" scope="col">Telefono</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($detalledomicilio as $d)

    <tr>

<td>{{ $d->id}}</td>
<td>{{ $d->idDomicilio}}</td>
<td>{{ $d->estado}}</td>
<td>{{ $d->direccion}}</td>
<td>{{ $d->telefono}}</td>



<td><a href="detalledomicilios/{{$d->id}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('detalledomicilios.destroy',$d->id) }}" method="POST">
@csrf
@method('DELETE')
    
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>

    </tr>
    @endforeach
</tbody>
</table>

@endsection