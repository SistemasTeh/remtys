<!DOCTYPE html>
<html>
<head>
	<title>Registro de Trámites y Servicios  </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<h1>Registro de Trámites </h1>
      <h3>Nuevo Trámite</h3>

<form method="post" action="./Controlador/guardar_post.php">
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" id="title" class="form-control" name="title" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="form-control" name="description" id="description" placeholder="Descripcion"></textarea>
  </div>
  <div class="form-group">
    <label for="costo">Costo</label>
    <input type="text" id="title" class="form-control" name="costo" placeholder="Costo">
  </div>
  <div class="form-group">
    <label for="title">Link</label>
    <input type="text" id="title" class="form-control" name="link" placeholder="Link">
  </div>
  



  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>