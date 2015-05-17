<div data-id="breadcrumb"><h1>Services</h1><h2>All Services</h2><a href="index.php">Home</a></div>
<!-- Image Header -->
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<!-- /.row -->

<!-- Service Panels -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<div class="panels-row">
    <h2>Main Services</h2>
        <?php
            include('comps/allProjects.php');
            $projects = new Projects($library);
            $panels= $projects->getServices1();
            foreach($panels as $item) echo $library->renderItem($item);
        ?>
</div>

<div class="tabs-row">
    <h2>Included</h2>
    <?php

                    $items = array();
                   $item=new stdClass();
                   $item->tmpl='item-service';
                    $item->topic='Integration';
                    $item->text=$library->textCom('Integration');
                    $item->icon='wrench';
                    $item->href = 'Products.php?Integration#Integration';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Cloud Solution';
                    $item->text=$library->textCom('Cloud Solution');
                    $item->icon='cloud';
                    $item->href = 'Products.php?Cloud-Solution#Cloud-Solution';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Statistics';
                    $item->text=$library->textCom('Statistics');
                    $item->icon='database';
                    $item->href = 'Products.php?CMS#CMS';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Web Plugin';
                    $item->text=$library->textCom('Web Plugin');
                    $item->icon='cloud';
                    $item->href = 'Products.php?Web-Plugin#Web-Plugin';
                    $items [] = $item;
                    foreach($items as $item) echo $library->renderItem($item);
    ?>
</div>

<div class="media-row">
    <h2>Areas</h2>
    <?php

                    $items = array();
                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Product Selection';
                    $item->text=$library->textCom('Product Selection');
                    $item->icon='shopping-cart';
                    $item->href = 'Products.php?Product-Selection#Product-Selection';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Business Directories';
                    $item->text=$library->textCom('Business Directories');
                    $item->icon='sitemap';
                    $item->href = 'Products.php?Business-Directories#Business-Directories';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Information Delivery';
                    $item->text=$library->textCom('Information Delivery');
                    $item->icon='info';
                    $item->href = 'Products.php?Information-Delivery#Information-Delivery';
                    $items [] =$item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Advertisement';
                    $item->text=$library->textCom('Advertisement');
                    $item->icon='youtube-play';
                    $item->href = 'Products.php?Advertisement#Advertisement';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Messaging and Alerts';
                    $item->text=$library->textCom('Messaging and Alerts');
                    $item->icon='bolt';
                    $item->href = 'Products.php?Messaging-and-Alerts#Messaging-and-Alerts';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Booking and Reservation';
                    $item->text=$library->textCom('Booking and Reservation');
                    $item->icon='book';
                    $item->href = 'Products.php?Booking-and-Reservation#Booking-and-Reservation';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Wayfinding';
                    $item->text=$library->textCom('Wayfinding');
                    $item->icon='marker';
                    $item->href = 'Products.php?Wayfinding#Wayfinding';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Games and Entertainment';
                    $item->text=$library->textCom('Games and Entertainment');
                    $item->icon='smile-o';
                    $item->href = 'Products.php?Games-and-Entertainment#Games-and-Entertainment';
                    $items [] = $item;

                    $item=new stdClass();
                    $item->tmpl='item-service';
                    $item->topic='Architecture';
                    $item->text=$library->textCom('Architecture');
                    $item->icon='building';
                    $item->href = 'Products.php?Architecture#Architecture';
                    $items [] = $item;


                    foreach($items as $item) echo $library->renderItem($item)
    ?>
</div>

