<?php
session_start();
$time = time();


$timeout = $time-(isset($_SESSION['time'])?$_SESSION['time']:0);

$_SESSION['time'] = $time;




if($timeout<10)echo 'error '.$timeout;
else{
$data= new stdClass();
$data->to='uplight.ca@gmail.com';
$data->subject = 'Website contact '
$data->user='forntdesk';
$data->pass='frontedsk';
$data->message=file_get_contents('php://input');
$ch = curl_init();
$url ='http://front-desk.ca/utils/email/send';
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($data));

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
}
 //echo mail('uplight.ca@gmail.com','Website contact ',file_get_contents('php://input')."\n".date("Y-m-d H:i:s")."\n\r")?'success emailed':'error write';

?>