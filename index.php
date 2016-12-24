herp
<?php

Header("HTTP/1.1 301 Moved Permanently");
//Header("Location:http://10.50.17.94/".$_GET['dest']);
$length = 10;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
Header("Location:http://10.50.17.94/redirecter/".$randomString);
?>
