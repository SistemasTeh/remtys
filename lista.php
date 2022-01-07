<!DOCTYPE html>
<html>
<head>
	<title>Trámites y Servicios</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
<body>

<?php 
include "connection.php";
 ?>


<div class="container">
 


	<div class="row ">
		<div class=" banner col-md-12 ">
			<h1 class="mt-5">Trámites y Servicios Gobierno de Tehuacán</h1>

<?php

$con = connect();
$sql = "select * from post";
$query  =$con->query($sql);
$data =  array();

if($query){
	while($r = $query->fetch_object()){
		$data[] = $r;
	}
}
?>
<br><br>
<?php  if(count($data)>0):?>
 

	<div id="accordion">
		
		<?php foreach($data as $d):?>
   
            <div class="card">
            <div class="card-header" id="heading<?php echo $d->id; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $d->id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $d->id; ?>">
        <?php echo $d->title; ?> 
        

        </button>
      </h5>
    </div>
    <div id="collapse<?php echo $d->id; ?>" class="collapse" aria-labelledby="heading<?php echo $d->id; ?>" data-parent="#accordion">
      <div class="card-body">
      <?php echo $d->description; ?>
      <h6><?php echo $d->costo; ?></h6>
      <a href="<?php echo $d->link; ?>">Saber mas</a>
      </div>
     
      
    </div>
     </div>
							
		<?php endforeach; ?>
   
    </div>

    

                 <?php else:?>
	              <p class="alert alert-warning">No hay datos</p>
               <?php endif; ?>

		</div>
	</div>
</div>

  
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>