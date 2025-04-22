<?php
include("inc/db.php");
if(isset($_POST['save'])){
    $n=$_POST['pname'];
    $p=$_POST['price'];
    $ft=$_POST['foodtype'];
    $ds=$_POST['destination'];
    $des=$_POST['pd'];

    $buffer=$_FILES['pimg']['tmp_name'];
    $fn=time().$_FILES['pimg']['name'];
    move_uploaded_file($buffer,"img-pack/".$fn);

    $ins="INSERT INTO packages SET pname='$n',price='$p',foodtype='$ft',destination='$ds',image='$fn',description='$des'";
    $con->query($ins);

    header("location:list-package.php");

}else{
    echo"Acess Denied";
}
?>