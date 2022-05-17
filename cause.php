<?php
  include('connection.php');
  $sql="select id,titre,image from cause";
  $result = mysqli_query($connection, $sql);
?>
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h1 class="heading">Les causes du rechauffement climatique</h1>
    </div>
    <ul id="latest" class="nospace group">
      <?php while($row=mysqli_fetch_assoc($result)) { ?>
        <li class="one_third_first">
          <article>
            <figure><a class="imgover" href="cause-<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $row['titre']);?>&<?php echo $row['id'];?>"><img src="<?php echo $row['image'];?>" style="height:500px;width:500px"></a>
              <figcaption>
                <h6 class="heading"><a href="cause-<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $row['titre']);?>&<?php echo $row['id'];?>"><?php echo $row['titre'];?></a></h6>
              </figcaption>
            </figure>
          </article>
        </li>
        <br></br>
      <?php } ?>
    </ul>
  </section>
</div>