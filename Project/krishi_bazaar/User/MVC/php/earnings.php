<?php
require_once("../php/seller_auth.php");


$orders = [
    ['order_id'=>501,'customer'=>'Rabbi','product'=>'Rice','quantity'=>5,'total'=>250,'status'=>'shipped'],
    ['order_id'=>502,'customer'=>'Rajib','product'=>'Potato','quantity'=>10,'total'=>300,'status'=>'shipped'],
    ['order_id'=>503,'customer'=>'Karim','product'=>'Onion','quantity'=>3,'total'=>180,'status'=>'shipped']
];


$total_earnings = 0;
foreach($orders as $e){
    $total_earnings += $e['total'];
}


include("../html/earnings.php");
