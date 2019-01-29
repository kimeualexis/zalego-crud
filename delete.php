<?php

include 'connect.php';


if(isset($_GET['delete'])){
	$id=$_GET['delete'];

	$sql="DELETE FROM tbl_students WHERE ID=$id";
	$query=mysqli_query($conn, $sql);

	if($query){
		header("location: index.php");
}
?>