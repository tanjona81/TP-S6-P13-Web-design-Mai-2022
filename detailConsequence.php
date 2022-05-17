<?php
  include('connection.php');
  $id=$_GET['id'];
  $sql="select * from consequence where id=$id";
  $result = mysqli_query($connection, $sql);
  $row=mysqli_fetch_assoc($result)
?>

      
<div class="container">
  <div class="row">
    <div class="sectiontitle">
      <h1 class="heading"><?php echo $row['titre'];?></h1>
    </div>
    
      <div class="col-md-4"></div>
      <div class="col-md-8">
        <p><img src="<?php echo $row['image'];?>" style="height:500px"></p>
              
        <p><?php echo $row['description'];?></p>
      </div>
  </div>
</div>

