@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')


@section('contenido')
<h5 class="text-center">Descuento</h5>
<br>

<div class="d-grid gap-2">
   <a href="descuentos/create" class="btn btn-outline-primary"  >CREAR</a>
</div>   
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark" scope="col">ID </th>
<th class="table-dark" scope="col">Valor Descuento</th>
<th class="table-dark" scope="col">Fecha Descuento</th>
<th class="table-dark"></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($descuento as $d)

    <tr>

<td>{{ $d->idDescuento}}</td>
<td>{{ $d->valorDescuento}}</td>
<td>{{ $d->fechaDescuento}}</td>






<td><a href="descuentos/{{$d->idDescuento}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('descuentos.destroy',$d->idDescuento) }}" method="POST">
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