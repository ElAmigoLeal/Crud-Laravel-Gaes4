@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Domicilio</h5>
<br>

<div class="d-grid gap-2">
   <a href="domicilios/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Carro</th>
<th class="table-dark" scope="col">Descripcion</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($domicilio as $d)

    <tr>

<td>{{ $d->idDomicilio}}</td>
<td>{{ $d->idCarro}}</td>
<td>{{ $d->descripcion}}</td>






<td><a href="domicilios/{{$d->idDomicilio}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('domicilios.destroy',$d->idDomicilio) }}" method="POST">
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