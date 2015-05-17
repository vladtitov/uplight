<!-- Features Section -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Modern Features</h2>
    </div>
    <div class="col-md-6">
        <?php
        $img1 = $library->fromImages('Modern Features');
        $text1=$library->text('Modern Features');
         ?>

        <?php include($text1); ?>
    </div>
    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img1; ?>" alt="Modern Features">
    </div>
</div>
<!-- /.row -->