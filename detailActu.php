<?php
  include('connection.php');
  $id=$_GET['id'];
  $sql="select * from actualite where id=$id";
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
              <figcaption>
                <ul class="nospace meta clear">
                    <time datetime="2045-04-05T08:15+00:00"><?php echo $row['dateActu'];?></time>
                  </li>
                </ul>
              </figcaption>
            <p><?php echo $row['description'];?></p>
      </div>
  </div>
</div>