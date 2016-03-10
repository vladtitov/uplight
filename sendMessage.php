<?php
session_start();
$time = time();
$timeout = $time-(isset($_SESSION['time'])?$_SESSION['time']:0);
$_SESSION['time'] = $time;
if($timeout<10)echo 'error '.$timeout;
else{
$data= new stdClass();
$data->to='uplight.ca@gmail.com';
$data->subject = 'Website contact ';
$data->user='uplight.ca@gmail.com';
$data->pass='uplight.ca@gmail.com';
$input = json_decode(file_get_contents('php://input'));
$msg ="Message \n\r";
foreach($input as $key=>$val)$msg.=''.$key.' : '.$val."\n\r";
$data->message=$msg;
//echo json_encode($data);

$ch = curl_init();
$url ='http://front-desk.ca/email/send';
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($data));

$result = curl_exec($ch);


curl_close($ch);
}
 //echo mail('uplight.ca@gmail.com','Website contact ',file_get_contents('php://input')."\n".date("Y-m-d H:i:s")."\n\r")?'success emailed':'error write';

?>