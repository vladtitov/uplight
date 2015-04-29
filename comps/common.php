<?php
session_start();
$_SESSION['ip']=$_SERVER['REMOTE_ADDR'];
$base=$_SERVER['DOCUMENT_ROOT'];
$service=$_SERVER['PHP_SELF'];
$topic =!empty($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:0;
$configXML=
'<?xml version="1.0" encoding="UTF-8"?>
<body>
    <config>
        <comps>
            <comp>
                <id>header</id>
                <file>comps/header.php</file>
            </comp>
            <comp>
                <id>carusel</id>
                <file>comps/carusel.php</file>
            </comp>
            <comp>
                <id>breadcrumb</id>
                <file>comps/breadcrumb.php</file>
            </comp>
            <comp>
                <id>contactform</id>
                <file>comps/contactForm.php</file>
            </comp>
            <comp>
                <id>footer</id>
                <file>comps/footer.php</file>
            </comp>
            <comp>
                <id>nav</id>
                <file>comps/nav.php</file>
            </comp>
            <comp>
                <id>about</id>
                <file>data/about.php</file>
            </comp>
            <comp>
                <id>call</id>
                <file>data/call.php</file>
            </comp>
            <comp>
                <id>contact</id>
                <file>data/contact.php</file>
            </comp>
            <comp>
                <id>custumers</id>
                <file>data/customers.php</file>
            </comp>
            <comp>
                <id>features</id>
                <file>data/features.php</file>
            </comp>
            <comp>
                <id>info</id>
                <file>data/info.php</file>
            </comp>
            <comp>
                <id>services</id>
                <file>data/services.php</file>
            </comp>
            <comp>
                <id>team</id>
                <file>data/team.php</file>
            </comp>
                <comp>
                    <id>p-all</id>
                    <file>portfolio/all.php</file>
                </comp>
                <comp>
                    <id>image-editor</id>
                    <file>portfolio/image-editor.php</file>
                </comp>
                <comp>
                    <id>p-mouse-over</id>
                    <file>portfolio/Mouse-Over.php</file>
                </comp>
                <comp>
                    <id>p-related</id>
                    <file>portfolio/related.php</file>
                </comp>
                <comp>
                    <id>p-single-item</id>
                    <file>portfolio/single-item.php</file>
                </comp>
                <comp>
                    <id>Sound-Visualisation</id>
                    <file>portfolio/Sound-Visualisation.php</file>
                </comp>
                <comp>
                    <id>Video-Game</id>
                    <file>portfolio/Video-Game.php</file>
                </comp>
                <comp>
                    <id>Video-Thumbnails</id>
                    <file>portfolio/Video-Thumbnails.php</file>
                </comp>
            <comp>
                <id>portfolio2</id>
                <file>portfolio/all_col.php</file>
            </comp>
            <comp>
                <id>p-breadcrumb</id>
                <file>portfolio/breadcrumb.php</file>
            </comp>
        </comps>
    </config>
</body>
';

$configXML=simplexml_load_string($configXML);
$comps=array();
foreach($configXML->config->comps->children() as $node)$comps[(string)$node->id] = $node;


function attach($ar){
global $comps;
$out=0;
        foreach($ar as $key) {
            $file=array_key_exists($key,$comps)?$comps[$key]->file:$key.'.php';
            if(file_exists($file))  include($file);
            else{
                $out=' ERROORR '.$key.' not  exists: '.$file;
                echo($out);
            }
        }
        return $out;
}
?>

<meta name="google-site-verification" content="bwbiF8sgNJJbW_SCet7eSBrI-HH6e8mO2CnWiSsf-VM" />
<link href="css/my.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/modern-business.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/my.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script  src="js/require.js"></script>
