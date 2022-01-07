<?php

function connect(){
	return new mysqli("localhost","root","","remtys");
}

function get_categorias(){
	$con = connect();
	$sql = "select * from category";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

function get_post_categorias($id){
	$con = connect();
	$sql = "select * from post_category where post_id=".$id;
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

function get_categoria($id){
	$con = connect();
	$sql = "select * from category where id=".$id;
	$query  =$con->query($sql);
	$data =  null;
	if($query){
		while($r = $query->fetch_object()){
			$data = $r;
			break;
		}
	}
	return $data;
}

function get_post($id){
	$con = connect();
	$sql = "select * from post where id=".$id;
	$query  =$con->query($sql);
	$data =  null;
	if($query){
		while($r = $query->fetch_object()){
			$data = $r;
			break;
		}
	}
	return $data;
}
?>