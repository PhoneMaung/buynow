<?php 

  $ch = curl_init();
  $url = 'https://fakestoreapi.com/products';

  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

  $resp = curl_exec($ch);

  $decode =json_decode($resp,true);
  
  $total_records = count($decode);

  $items_per_page = 8;
 
  $number_of_pages = ceil($total_records / $items_per_page);

  if (isset($_GET["num"])){
    $start = $_GET["num"];
  }
  else $start = 1;

  $first_item = ($start - 1) * $items_per_page;
  $last_item = $first_item + $items_per_page;

  curl_close($ch);