<?php
	include('connection.php');
	if(isset($_POST['modifActu'])){
		$id=$_POST['id'];
		$titre=$_POST['titre'];
		$date=$_POST['date'];
		$description=$_POST['description'];
		$image="images/actualite/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/actualite/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="update actualite set titre='$titre',dateActu='$date',image='$image',description='$description' where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=actualiteA');
	}
	if(isset($_POST['modifCause'])){
		$id=$_POST['id'];
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/cause/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/cause/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="update cause set titre='$titre',image='$image',description='$description' where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=causeA');
	}
	if(isset($_POST['modifCons'])){
		$id=$_POST['id'];
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/consequence/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/consequence/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="update consequence set titre='$titre',image='$image',description='$description' where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=consequenceA');
	}
	if(isset($_POST['modifSolution'])){
		$id=$_POST['id'];
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/solution/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/solution/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="update solution set titre='$titre',image='$image',description='$description' where id=$id";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=solutionA');
	}
?>