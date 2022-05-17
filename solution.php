<?php
  include('connection.php');
  $sql="select id,titre,image from solution";
  $result = mysqli_query($connection, $sql);
?>


<div class="wrapper row3">
  <main class="hoc container clear">
    <section id="services">
      <div class="sectiontitle">
        <h1 class="heading">Les solutions contre le rechauffement climatique</h1>
      </div>
      <ul class="nospace group grid-3">
        <?php while($row=mysqli_fetch_assoc($result)) { ?>
          <li class="one_third">
            <article><a href="solution-<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $row['titre']);?>&<?php echo $row['id'];?>"><i><img src="<?php echo $row['image'];?>"></i></a>
              <h6 class="heading"><?php echo $row['titre'];?></h6>
              <footer><a href="solution-<?php echo preg_replace('/[^A-Za-z0-9-]+/', '-', $row['titre']);?>&<?php echo $row['id'];?>">More Details &raquo;</a></footer>
            </article>
          </li>
        <?php } ?>
      </ul>
    </section>
    <div class="clear"></div>
  </main>
</div>