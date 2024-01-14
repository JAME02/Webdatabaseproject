<!DOCTYPE html>
<html lang="en">
<?php
include("includes/conn.php");
$sql = " select * from tb_pre ";
$sql.= " where pre_id = '$_REQUEST[pre_id]' ";
$quser = mysqli_query($conn,$sql);
$rs = mysqli_fetch_array($quser);

if (isset($_REQUEST['page']) == "update")
{
  {
    $sql = "UPDATE tb_pre SET";
    $sql.= " pre_name='$_REQUEST[pre_name]' ";
    $sql.= " where pre_id='$_REQUEST[pre_id]' ";
  }
 
    mysqli_query($conn,$sql);  
     
    echo "<script>window.location.href='pre_list.php'</script>";  
}
?>
<head>
    <meta charset="utf-8">
    <title>---ระบบฐานข้อมูลวิชาโครงการวิทยาลัยอาชีวศึกษาสุราษฏร์ธานี----</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php
require("includes/header.php");
?>


               <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="container-fluid pt-4 px-4">
                    
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ปรับปรุงข้อมูลคำนำหน้าชื่อ</h6>
                            <form method="post" action="?page=update">
                                <div class="row mb-3">
                                    <label for="pre_id" class="col-sm-2 col-form-label">ลำดับ</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pre_id" class="form-control" id="pre_id" value=<?php echo $rs['pre_id'];?> readonly  /> 
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pre_name" class="col-sm-2 col-form-label">คำนำหน้าชื่อ</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pre_name" class="form-control" id="pre_name" value=<?php echo $rs['pre_name'];?> >
                                    </div>
                                </div>
                                <td><input  class="btn btn-primary" type="submit" name="Submit" id="button" value="ปรับปรุงข้อมูล" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
         <!-- Form End -->




           <!-- Footer Start -->
           <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<!-- <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>-->