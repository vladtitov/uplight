<?php
session_start();
$_SESSION['ip']=$_SERVER['REMOTE_ADDR'];
$base=$_SERVER['DOCUMENT_ROOT'];
$service=$_SERVER['PHP_SELF'];
<!doctype html>
<head>
<meta name="google-site-verification" content="bwbiF8sgNJJbW_SCet7eSBrI-HH6e8mO2CnWiSsf-VM" />
<title><?php echo $header ?></title>
<link href="/css/htms.css" rel="stylesheet" type="text/css" />
<link href="/css/items.css" rel="stylesheet" type="text/css"/>
<script src="js/libs/jquery-2.0.3.min.js" ></script>
<script src="js/libs/svg.min.js" ></script>
<script src="js/libs/svg.easing.min.js" ></script>
<script src="Scripts/easeljs-0.7.1.min.js" ></script>
<script src="js/libs/tweenjs-0.5.0.min.js" ></script>
<script src="js/banner/Weather.min.js" ></script>
<script src="js/banner/svgclock.min.js" ></script>

<script type="text/javascript">
var trace = function(str){ console.log(str);}
</script>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-13156281-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body id="home">

<section class="container">
    <div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <?php include "_/components/php/snippet-carousel.php"; ?>
        <section class="main col col-lg-8">
            <?php include "_/components/php/article-intro.php"; ?>
            <?php include "_/components/php/article-abouttheartists.php"; ?>
            <?php include "_/components/php/article-aboutthevenue.php"; ?>
        </section><!-- main -->
        <section class="sidebar col col-lg-4">
            <?php include "_/components/php/aside-register.php"; ?>
            <?php include "_/components/php/aside-lastyear.php"; ?>
            <?php include "_/components/php/aside-accordion.php"; ?>
        </section><!-- sidebar -->
    </div><!-- content -->
    <?php include "_/components/php/footer.php"; ?>
</section><!-- container -->

<script src="js/libs/bootstrap.js"></script>
<script src="_/js/myscript.js"></script>
</body>
</html>

