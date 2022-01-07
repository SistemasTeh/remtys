<?php
if(!empty($_POST)){
	include "connection.php";
	$con  = connect();
	$sql = "insert into post (title,description,costo,link,created_at) value (\"".$_POST["title"]."\",\"".$_POST["description"]."\",\"".$_POST["costo"]."\",\"".$_POST["link"]."\",NOW())";
	$con->query($sql);
	$last_id = $con->insert_id;
	$categorias = get_categorias();
	/**
	* Con esta seccion de codigo obtenemos las categorias de la base de datos y las comparamos con los ids de categorias que recibimos desde el formulario de nuevo post
	* Verificamos los ids que coinciden con las categorias y estos los guardamos en la tabla post_category junto con el id del articulo/post insertado
	**/
	foreach($categorias as $cat){
		if(isset($_POST["category_".$cat->id])){
		$sql = "insert into post_category (post_id,category_id) value (".$last_id.",".$cat->id.")";
		$con->query($sql);
		}
	}
	header("Location: lista.php");
}
?>