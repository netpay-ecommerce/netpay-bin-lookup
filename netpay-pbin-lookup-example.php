<?php
require_once("netpay-pbin-lookup-class.php");
$netpay = new NetPay();
$result = json_decode($netpay->lookup('549949'), true);
if($result['result'] == 'success') {
  echo $result['data']['bin']."<br>";
  echo $result['data']['type']."<br>";
  echo $result['data']['scheme']."<br>";
  echo $result['data']['bank_name']."<br>";
}
else {
  echo $result['message'];
}
?>