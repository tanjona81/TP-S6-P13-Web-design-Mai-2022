<?php
	include('connection.php');
	session_start();
	if(isset($_POST['login'])){
		$nom=$_POST['nom'];
		$mdp=$_POST['mdp'];
		$sql="select id from admin where nom='%s' and mdp='%s'";
		$sql=sprintf($sql,$nom,$mdp);
		$result=mysqli_query($connection,$sql);
		$row=mysqli_fetch_assoc($result);
		$countResult=mysqli_num_rows($result);

		if($countResult>0)
		{
			$_SESSION['id']=$row['id'];
			header('Location:template.php?p=actualiteA');
		}
		else
		{
			header('Location:login.php');
		}
	}
?>