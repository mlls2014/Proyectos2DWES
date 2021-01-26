<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>Crear película </title>
</head>

<body>
   <div class="container-md">
      <div class="row">
         <div class="col-2">
         </div>
         <div class="col-8">
            <h1 class='mt-3 mb-3'>Datos de la película </h1>
            <form action="{{ route('peliculas.store') }}" method="post">
                @csrf
               <div class="mb-3">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" class="form-control" name="titulo" value="">                  
               </div>
               <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" name="genero" value="">                  
             </div>
               
               <button type="submit" class="btn btn-primary" name="generar">Crear</button>
            </form>
         </div>
         <div class="col-2">
         </div>
      </div>
   </div>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>