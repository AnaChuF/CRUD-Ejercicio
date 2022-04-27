<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Categorias</title>
  </head>
  <body>
    <div class="row" style="margin: 2%">
      <h3>Categorias</h3>
      <div class="">
        <form action="{{route('categoria.index')}}" method="GET">
            <input type="text" name="texto" value="{{$texto}}" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <button class="btn btn-outline-info"><a href="{{route('categoria.create')}}">Crear</a></button>
        </form>
      </div>
      <div>
        <table class="table" style="width: 90%;">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Condicion</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @if (count($categoria)<=0)
                  <tr>
                      <td colspan="4">No hay resultados</td>
                  </tr>
              @else
              @foreach ($categoria as $cat) 
                  <tr>
                      <td>{{$cat->idCategoria}}</td>
                      <td>{{$cat->Nombre}}</td>
                      <td>{{$cat->Descripcion}}</td>
                      <td>{{$cat->Condicion}}</td>
                      <td><button class="btn btn-warning"><a href="{{route('categoria.edit',$cat->idCategoria)}}" >EDITAR</a></button> | 
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete-{{$cat->idCategoria}}">
                              Eliminar
                          </button>   
                      </td>
                  </tr>
                  @include('delete')
              @endforeach
              @endif
          </tbody>
          {{$categoria->links()}}
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>