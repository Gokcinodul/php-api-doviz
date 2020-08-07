<?php


function doviz($txt, $to, $quantity = 1){

	$url		= "https://api.exchangeratesapi.io/latest?base=".$txt;
	$content 	= file_get_contents($url);
	$row 		= json_decode($content);
	$result 	= $row->rates->$to;
	return $result*$quantity;
}