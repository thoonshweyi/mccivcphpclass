<?php

$product = "Apple";
$price = 5;
$qty = 10;
$subtotal = $price*$qty;
$gst = $subtotal*0.07;
$total = $subtotal + $gst;

echo 'Product Name: '.$product.'<br>';
echo 'Price: '.$price.'<br>';
echo 'Sub Total: '.$subtotal.'<br>';
echo 'GST: '.$gst.'<br>';
echo 'Total: '.$total.'<br>';