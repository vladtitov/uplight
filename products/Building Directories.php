<?php

    $img='data/images/directories/';
    $file ='data/directories/';
    $com ='data/com/';

    $img1 = $img .findFile('Kiosk and Mobile', $directoriesImg);
    $file1 = $file.findFile('Building', $directories);

    $img2 = $img .findFile('Structure', $directoriesImg);
    $file2 = $file.findFile('What is', $directories);

    $img3 = $img .findFile('Information', $directoriesImg);
    $file3 = $file.findFile('Information', $directories);

    $img4 = $img .findFile('Color Picker', $directoriesImg);
    $file4 = $file.findFile('Brand Colors', $directories);

    $file5 = $file.findFile('handoff', $directories);

    $img6 = $img .findFile('RSS', $directoriesImg);
    $file6 = $file.findFile('Messaging', $directories);


    $file7 = $file.findFile('CMS', $directories);

    $file8 = $file.findFile('Edit', $directories);

    $file9 = $file.findFile('Categories', $directories);

    $file10 = $file.findFile('Appearance', $directories);

    $file11 = $file.findFile('Info Pages', $directories);

    $file12 = $file.findFile('Import Export', $directories);

    $file13 = $com.findFile('Techical', $common);

?>

<div class="row" id="Building-Directories">
    <div class="col-lg-12">
        <h1 class="page-header">Building Directories
            <small>Products</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li><a href="Products.php">Products</a>
            </li>
            <li class="active">Building Directories</li>
        </ol>
    </div>
</div>


<section class="row">
    <div class="col-md-6">

        <img class="img-responsive" src="<?= $img1;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file1);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">


    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img2;  ?>" />
    </div>

    <div class="col-md-6">
        <?php include($file2);?>
    </div>


</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img3;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file3);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img4;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file4);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file5);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img6;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file6);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file7);?>
    </div>


</section>


<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file8);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file9);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file10);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file11);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file12);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file13);?>
    </div>

</section>