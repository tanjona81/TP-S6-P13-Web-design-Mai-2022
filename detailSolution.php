<?php
  include('connection.php');
  $id=$_GET['id'];
  $sql="select * from solution where id=$id";
  $result = mysqli_query($connection, $sql);
  $row=mysqli_fetch_assoc($result)
?>

      

<div class="bgded overlay">
  <section class="hoc container clear">
    <div class="sectiontitle">
      <h1 class="heading"><?php echo $row['titre'];?></h1>
    </div>
    <article id="points" class="group">
      <div class="two_third first">
        <p><?php echo $row['description'];?></p>
      </div>
    </article>
</div>