<?php
include("inc/db.php");
if(isset($_POST['save'])){
    $n=$_POST['pname'];
    $p=$_POST['price'];
    $ft=$_POST['foodtype'];
    $ds=$_POST['destination'];
    $des=$_POST['pd'];
$pid=$_POST['pid'];
if(isset($_FILES['pimg']['tmp_name']) && $_FILES['pimg']['tmp_name'] !=""){
    $buffer=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
    move_uploaded_file($buffer,"img-pack/".$fn);

    $ins="UPDATE  packages SET pname='$n',price='$p',foodtype='$ft',destination='$ds',image='$fn',description='$des' WHERE pid='$pid'";
     $con->query($ins);
}else{
    $ins="UPDATE  packages SET pname='$n',price='$p',foodtype='$ft',destination='$ds',description='$des' WHERE pid='$pid'";
    $con->query($ins);
}
    header("location:list-package.php");

}else{
    echo"Acess Denied";
}
?>