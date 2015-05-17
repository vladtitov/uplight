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
        include "comps/panels.php";
         include "portfolio/all_col.php";
         include "comps/features.php";
         ?>
    </div>
    <?php
        include('data/com/'.findFile('to Action',$common));
        include "comps/footer.php";
     ?>

</body>

</html>

