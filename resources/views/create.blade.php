<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="card" style="width: 25rem; margin: auto">
        <div class="card-header">
            <h3>Create</h3>
        </div>
        <div class="card-body">
            <form action="{{route('categoria.store')}}" method="post">
            @csrf
                <label for="">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
                <label for="">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion">
                <label for="">Condicion:</label>
                <input type="text" class="form-control" name="condicion">
                <button type="submit" class="btn btn-success" value="crear">Crear</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>