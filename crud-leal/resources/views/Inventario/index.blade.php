@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Inventarios</h5>
<br>

<div class="d-grid gap-2">
   <a href="proveedores/create" class="btn btn-outline-primary"  >CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark"  scope="col">Id </th>
<th class="table-dark"  scope="col">Id Producto</th>
<th class="table-dark" scope="col">Producto</th>
<th class="table-dark" scope="col">Cantidad</th>
<th class="table-dark" ></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($inventario as $inventario)

    <tr>

<td>{{ $inventario->idInventario}}</td>
<td>{{ $inventario->idProducto}}</td>
<td>{{ $inventario->Producto}}</td>
<td>{{ $inventario->cantidad}}</td>







<td><a href="inventarios/{{$inventario->idInventario}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('inventarios.destroy',$inventario->idInventario) }}" method="POST">
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