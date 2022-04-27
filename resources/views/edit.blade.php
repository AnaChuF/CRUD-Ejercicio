<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="card" style="width: 25rem; margin: auto">
        <div class="card-header">
            <h3>Editar</h3>
        </div>
        <div class="card-body">
            <form action="{{route('categoria.update',$categoria->idCategoria)}}" method="post">
            @csrf
            @method('PUT')
                <label for="">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{$categoria->Nombre}}">
                <label for="">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" value="{{$categoria->Descripcion}}">
                <label for="">Condicion:</label>
                <input type="text" class="form-control" name="condicion" value="{{$categoria->Condicion}}">
                <button type="submit" value="crear" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>