<?php
$a = array('26', '77', 'собака', '59', '47', 'Хочу', '101', 'дело', 'у', 'вас', '76', 'работать', '!');
$b = array('55', '28', '74', 'работать', '31', '100', 'table', 'job', '!', 'вас', '98', 'Хочу', 'dog', 'у', '_');
foreach($a as $ai){
    $result_a = mb_substr($ai, 0);
  foreach($b as $bi){
	$result_b = mb_substr($bi, 0);  
	if($result_a == $result_b)
		echo "$result_a ";
    }	
} 