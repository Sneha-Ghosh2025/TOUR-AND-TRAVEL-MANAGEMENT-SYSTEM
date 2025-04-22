<?php
include("admin/inc/db.php");

    $n=$_POST['name'];
    $e=$_POST['email'];
    $a=$_POST['address'];
    $c=$_POST['contact'];
    $ins="INSERT INTO booking SET name='$n',email='$e',address='$a',contact='$c'";
    $con->query($ins);
?>
<h2 style="width: 100%; text-align:center; margin-top:100px;">Thank you for booking!</h2>


<script>
    setTimeout(function(){
        window.location='packages.php';
    }, 2000);
</script>