<?php
	include('connection.php');
	$id=$_POST['id'];
	if(isset($_POST['supprActu'])){
		$sql="delete from actualite where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=actualiteA');
	}
	if(isset($_POST['supprCause'])){
		$sql="delete from cause where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=causeA');
	}
	if(isset($_POST['supprCons'])){
		$sql="delete from consequence where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=consequenceA');
	}
	if(isset($_POST['supprSolution'])){
		$sql="delete from solution where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=solutionA');
	}

?>