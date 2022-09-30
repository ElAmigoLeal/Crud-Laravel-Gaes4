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
        <form action="/inventarios/{{$inventario->idInventario}}" method="Post">



          @method('PUT')
          @csrf

          <div class="mb-3">
            <label for="" class="form-label">idProducto</label>
            <input value="{{$inventario->idProducto}}" id="idProducto" name="idProducto" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Producto</label>
            <input value="{{$inventario->Producto}}" id="Producto" name="Producto" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Cantidad</label>
            <input value="{{$inventario->cantidad}}" id="cantidad" name="cantidad" type="text" class="form-control" tabindex="2">

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