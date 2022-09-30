@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Permiso</h5>
<br>

<div class="d-grid gap-2">
   <a href="permisos/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Descripcion</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($permiso as $p)

    <tr>

<td>{{ $p->idPermiso}}</td>
<td>{{ $p->descripcion}}</td>



<td><a href="permisos/{{$p->idPermiso}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('permisos.destroy',$p->idPermiso) }}" method="POST">
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