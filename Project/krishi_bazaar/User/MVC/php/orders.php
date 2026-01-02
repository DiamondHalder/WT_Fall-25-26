<?php
require_once("seller_auth.php");


$orders = [
    ['order_id'=>501,'customer'=>'Rabbi','product'=>'Rice','quantity'=>5,'total'=>250,'status'=>'pending'],
    ['order_id'=>502,'customer'=>'Rajib','product'=>'Potato','quantity'=>10,'total'=>300,'status'=>'buy request'],
    ['order_id'=>503,'customer'=>'Karim','product'=>'Onion','quantity'=>3,'total'=>180,'status'=>'shipped'],
    ['order_id'=>504,'customer'=>'Jamal','product'=>'Rice','quantity'=>2,'total'=>100,'status'=>'none']
];


$message = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $order_id = $_POST['order_id'];
    foreach($orders as &$order){
        if($order['order_id'] == $order_id){
            if(isset($_POST['confirm'])){
                $order['status'] = 'shipped';
                $message = "Order Id $order_id confirmed and shipped.";
            } elseif(isset($_POST['decline'])){
                $order['status'] = 'none';
                $message = "Order Id $order_id declined.";
            }
            break;
        }
    }
    unset($order);
}


include("../html/orders.php");
