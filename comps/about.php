<?php
$img = $library->image('Everyone');
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">About
            <small>UPLIGHT</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active">About</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img; ?>" alt="Take advatege of web">
    </div>
    <div class="col-md-6">
        <?php

        include ($library->textCom('About'));
         ?>
    </div>
</div>