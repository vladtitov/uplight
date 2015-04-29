<!doctype html>
<head>
    <title>UPLIGHT</title>
    <?php
    include "comps/common.php";

     ?>
</head>
<body id="home">
<?php  attach(['nav','carusel']);  ?>
<div class="container">
    <?php
    $page= ['p-all','p-related'];
    if($topic && array_key_exists($topic,$comps)) $page = [$topic,'p-related'];
    attach($page);
   ?>
</div>
<?php include "comps/footer.php"; ?>
</body>
</html>