@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Productos</h5>
<br>

<div class="d-grid gap-2">
   <a href="proveedores/create" class="btn btn-outline-primary"  >CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4" >


    <thead>
        <tr>
<th class="table-dark"  scope="col">Id </th>
<th class="table-dark"  scope="col">Id Categoria</th>
<th class="table-dark" scope="col">Id Descuentos</th>
<th class="table-dark" scope="col">Nombre producto</th>
<th class="table-dark" scope="col">Precio</th>
<th class="table-dark" scope="col">Descripcion</th>
<th class="table-dark" ></th>
<th class="table-dark"></th>

        </tr>
    </thead>
<tbody>
    @foreach ($producto as $producto)

    <tr>

<td>{{ $producto->idProducto}}</td>
<td>{{ $producto->idCategoria}}</td>
<td>{{ $producto->idDescuento}}</td>
<td>{{ $producto->nombreProducto}}</td>
<td>{{ $producto->precioproducto}}</td>
<td>{{ $producto->descripcion}}</td>






<td><a href="productos/{{$producto->idProducto}}/edit" class="btn btn-warning" >EDITAR</a></td>

<td>
    <form action="{{ route('productos.destroy',$producto->idProducto) }}" method="POST">
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