<?php
$link=mysqli_connect("localhost","root","") or die("could not connect");
mysqli_select_db($link,"furniture") or die("could not find db!");
?>