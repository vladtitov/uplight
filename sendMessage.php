<?php
session_start();
$time = time();


$timeout = $time-(isset($_SESSION['time'])?$_SESSION['time']:0);

$_SESSION['time'] = $time;


if($timeout<10)echo 'error '.$timeout;
else echo mail('uplight.ca@gmail.com','Website contact ',file_get_contents('php://input')."\n".date("Y-m-d H:i:s")."\n\r")?'success':'error write';

?>