<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <title>Document</title>
</head>

<body>
  <br>
  <section class="container">
    <div class="row">
      <h3 class="center-align"> Bienvenido al amigo leal</h3>
      <h4 class="center-align">Editar Registro</h4>
      <article class="col s6 offset-s3">
        <form action="/productos/{{$producto->idProductos}}" method="Post">



          @method('PUT')
          @csrf

          <div class="mb-3">
            <label for="" class="form-label">Id Categoria</label>
            <input value="{{$producto->idCategoria}}" id="idCategoria" name="idCategoria" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Id Descuento</label>
            <input value="{{$producto->idDescuento}}" id="idDescuento" name="idDescuento" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Producto</label>
            <input value="{{$producto->nombreProducto}}" id="nombreProducto" name="nombreProducto" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Precio</label>
            <input value="{{$producto->precioproducto}}" id="precioproducto" name="precioproducto" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Descripcion</label>
            <input value="{{$producto->descripcion}}" id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
          </div>

          <p class="center-align">
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
          </p>

        </form>

      </article>
    </div>
  </section>

</body>

</html>