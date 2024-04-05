<?php
$str=$_GET['str']; // 需要加密的字符串
$md5Hash = md5($str); // 使用md5函数进行加密
echo $md5Hash; // 输出加密后的字符串
?>
