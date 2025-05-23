<?php session_start();
if(!isset($_SESSION['aname'])){
    header("location:index.php");
}
?>
<?php
include("inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("inc/sidebar.php");?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("inc/top.php");?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Package</h1>
                    
                    <?php 
                    $id=$_GET['id'];
                    $sel="SELECT * FROM packages WHere pid='$id'";
                    $res=$con->query($sel);
                    $row=$res->fetch_assoc();
                    ?>

                    <form action="update-package.php" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="pid" value="<?php echo $row['pid'];?>"/>
                    <p>Package Name</p>
                        <p><input type="text" name="pname" value="<?php echo $row['pname'];?>"></p>

                        <p>Package Price</p>
                        <p><input type="number" name="price" value="<?php echo $row['price'];?>"></p>

                        <p>Food Type</p>
                        <p><input <?php if($row['foodtype']=="Veg"){echo"checked";}?> type="radio" name="foodtype" value="Veg"> Veg</p>
                        <p><input <?php if($row['foodtype']=="Non-Veg"){echo"checked";}?>type="radio" name="foodtype" value="Non-Veg"> Non-Veg</p>
                        
                        <p>Destination</p>
                        <p><select name="destination">
                            <option value="">--Select Destination--</option>
                            <option <?php if($row['destination']=="Domestic"){echo "selected";}?> value="Domestic">Domestic</option>
                            <option <?php if($row['destination']=="International"){echo "selected";}?> value="International">International</option>
                  </select></p>
                        <p>Image</p>
                        <p><img src="img-pack/<?php echo $row['image'];?>" style="width:100px;"/></p>

                        <p>Description</p>
                        <p><textarea name="pd"><?php echo $row['description']; ?></textarea></p>
                        <p><input type="submit" name="save" value="Submit"></p>
                    </form>
<script>
    CKEDITOR.replace("pd");
</script>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("inc/footer.php");?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>