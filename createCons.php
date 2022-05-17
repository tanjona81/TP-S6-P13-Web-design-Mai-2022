
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h1>Creation d'une conequence</h1>
		<br></br>
		<form action="traitementCreate.php" method="post" enctype="multipart/form-data">
			<p>Titre: <textarea cols="50" rows="2" name="titre" required=""></textarea></p>
			<p>Description: <textarea cols="70" rows="6" name="description" required=""></textarea></p>
			<p>Image: <input type="file" name="image" required=""></p>
			<p><input type="submit" name="createCons" value="Valider"></p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>