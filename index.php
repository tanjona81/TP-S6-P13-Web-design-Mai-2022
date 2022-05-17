<?php
  $p=$_GET['p'].".php";
  $ti=null;
  if(isset($_GET['titre'])) $ti=$_GET['titre'];
?>

<!DOCTYPE html>
<html lang="">
<head>
<title>Rechauffement climatique-<?php echo $ti;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/page/back.jpg');">
  <header id="header" class="hoc clear">
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="actualite">Home</a></li>
        <li><a href="cause">cause</a></li>
        <li><a href="consequence">consequence</a></li>
        <li><a href="solution">solution</a></li>
      </ul>
    </nav>
  </header>
  <div id="pageintro" class="hoc clear">
    <article>
      <h1 class="heading">Rechauffement climatique</h1>
    </article>
  </div>
</div>

<?php include($p);?>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>