<?php
	include('connection.php');
	$id=$_POST['id'];
	$sql="select * from cause where id=$id";
  	$result = mysqli_query($connection, $sql);
  	$row=mysqli_fetch_assoc($result)
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h1>Modification de <?php echo $row['titre'];?></h1>
		<br></br>
		<form action="traitementModif.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			<p>Titre: <textarea cols="50" rows="2" value="<?php echo $row['titre'];?>" name="titre"><?php echo $row['titre'];?></textarea></p>
			<p>Description: <textarea cols="70" rows="6" value="<?php echo $row['description'];?>" name="description"><?php echo $row['description'];?></textarea></p>
			<p>Image: <input type="file" name="image"></p>
			<p><input type="submit" name="modifCause" value="Modifier"></p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>