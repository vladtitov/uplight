<!doctype html>
<head>
    <title>UPLIGHT</title>
    <?php include "comps/common.php"; ?>
</head>
<body id="home">
<?php include "comps/nav.php"; ?>
<?php include "comps/carusel.php"; ?>
<div class="container">
    <?php
   //
  if($topic){
  $parent='Blog';
        $file='portfolio/'.$topic.'.php';
        if(file_exists($file)){
            include "portfolio/breadcrumb.php";
            include $file;
             include "blog/related.php";
        }else include "blog/all.php";
   } else include "blog/all.php";



     ?>
</div>
<?php include "comps/footer.php"; ?>
</body>
</html>