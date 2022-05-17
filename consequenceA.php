<?php
  include('connection.php');
  $sql="select * from consequence";
  $result = mysqli_query($connection, $sql);
?>
<h1>Consequences</h1>
<form action="template.php?p=createCons" method="post">
  <input type="submit" value="Creer" class="btn-warning">
</form>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">image</th>
      <th scope="col">titre</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_assoc($result)) { ?>
      <tr>
        <th><img src="<?php echo $row['image'];?>" style="height:200px;width:200px"></th>
        <td><a href="template.php?p=detailConsequenceA&&id=<?php echo $row['id'];?>"><?php echo $row['titre'];?></a></td>
        <form action="template.php?p=modifCons" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <td><input class="btn-primary" type="submit" name="modif" value="modifier"></td>
        </form>
        <form action="traitementSuppr.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <td><input class="btn-danger" type="submit" name="supprCons" value="supprimer"></td>
        </form>
      </tr>
    <?php } ?>
  </tbody>
</table>