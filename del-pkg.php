<?php
include("inc/db.php");

$id=$_GET['id'];
$sel="SELECT * FROM packages WHere pid='$id'";
$res=$con->query($sel);
$row=$res->fetch_assoc();

unlink("img-pack/".$row['image']);
$del="DELETE FROM packages WHere pid='$id'";
$con->query($del);
header("location:list-package.php");

?>