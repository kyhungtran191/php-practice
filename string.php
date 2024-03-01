<?php 
## Handle String built in 
$str = "Xin Chào Các Bạn";
//1. Thêm kí tự escape vào phía trước các kí tự mong muốn
addcslashes($str, 'U');
//2. Thêm kí tự vào các kí tự '',\
addslashes($str);
//3 split
$arr = explode("", $str);
//4 join
$string = implode("-", $arr);
//5 length
$count_string_length = strlen($str);
//6 replace 
$str_replaced = str_replace('','',$str)
//7 substring
?>