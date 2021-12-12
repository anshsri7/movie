<?php 

$que="SELECT * FROM ads";

$sda=mysqli_query($connect, $que);

$ads=mysqli_fetch_assoc($sda);
?>