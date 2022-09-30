@extends('welcome')
<br><br><br>
@extends('Plantilla\plantillabase')

@section('contenido')
<h5 class="text-center">Carro Compra</h5>
<br>

<div class="d-grid gap-2">
   <a href="carrocompras/create" class="btn btn-outline-primary">CREAR</a>
</div>
<br>
<table class="table table-prymary table-striped md-4">
   <thead>
      <tr>
         <th scope="col">ID </th>
         <th scope="col">Id Usuario</th>
         <th scope="col">Precio </th>
         <th scope="col">Cantidad</th>
         <th scope="col">Cantidad Pagar </th>
         <th scope="col">Estado</th>
         <th></th>
         <th></th>
      </tr>
   </thead>
   <tbody>

      @foreach ($carrocompra as $cc)

      <tr>

         <td>{{ $cc->idCarro}}</td>
         <td>{{ $cc->idUsuario}}</td>
         <td>{{ $cc->precio}}</td>
         <td>{{ $cc->cantidad}}</td>
         <td>{{ $cc->cantidadPagar}}</td>
         <td>{{ $cc->estado}}</td>

         <td><a href="carrocompras/{{$cc->idCarro}}/edit" class="btn btn-warning">EDITAR</a></td>
         <td>
            <form action="{{ route('carrocompras.destroy',$cc->idCarro) }}" method="POST">
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