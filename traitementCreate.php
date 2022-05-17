<?php
	include('connection.php');
	if(isset($_POST['createActu'])){
		$titre=$_POST['titre'];
		$date=$_POST['date'];
		$description=$_POST['description'];
		$image="images/actualite/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/actualite/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="insert into actualite values(null,'$titre','$description','$image','$date')";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=actualiteA');
	}
	if(isset($_POST['createCause'])){
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/cause/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/cause/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="insert into cause values(null,'$titre','$description','$image')";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=causeA');
	}
	if(isset($_POST['createCons'])){
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/consequence/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/consequence/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="insert into consequence values(null,'$titre','$description','$image')";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=consequenceA');
	}
	if(isset($_POST['createSolution'])){
		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$image="images/solution/".$_FILES["image"]["name"];
		$target_file = "D:/UwAmp/www/rechau/images/solution/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql="insert into solution values(null,'$titre','$description','$image')";
		$result=mysqli_query($connection,$sql);
		header('Location:template.php?p=solutionA');
	}
?>