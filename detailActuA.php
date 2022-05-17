<?php
  include('connection.php');
  $id=$_GET['id'];
  $sql="select * from actualite where id=$id";
  $result = mysqli_query($connection, $sql);
  $row=mysqli_fetch_assoc($result)
?>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <h1><?php echo $row['titre'];?></h1>
    <p><img src="<?php echo $row['image'];?>" style="height: 500px;width: 500px"></p>
    <p>Date: <?php echo $row['dateActu'];?></p>
    <h3>Description</h3>
    <p><?php echo $row['description'];?></p>
  </div>
  <div class="col-md-2"></div>
</div>