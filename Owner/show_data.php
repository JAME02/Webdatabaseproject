<!DOCTYPE html>
<html lang="en">
<?php

require("includes/conn.php");
error_reporting(0);
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
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">

   
    
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


            <?php
                    include("includes/conn.php");
                    $sql = " select * from members ";
                    $sql.= " inner join tb_pre on (members.pre_id = tb_pre.pre_id)";
                    $sql.= " inner join tb_status on (members.status_id = tb_status.status_id)";
                    $sql.= " inner join tb_po on (members.po_id = tb_po.po_id)";
                    $sql.= " inner join tb_depart on (members.depart_id = tb_depart.depart_id)";
                    $sql.= " where u_name = '$_REQUEST[u_name]' ";
                    $quser = mysqli_query($conn,$sql);
                    $rs = mysqli_fetch_array($quser);
?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
            <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">ข้อมูลผู้ใช้งาน</h4>
                            <form method="post" action="?page=update">
                            <p Align=right> <a class = "btn btn-warning t"  href ='member_edit.php?u_name=<?php echo$rs['u_name'];?>'><i class='fas fa-edit'></i>แก้ไข</button></a></p>
                                
                                <div class="row mb-3">
                                    <label for="r_name" class="col-sm-4 col-form-label">ชื่อ-นามสกุล</label>
                                    <div class="col-sm-8">
                                    <label for="status_id" class="col-sm-6  col-form-label"><?php echo $rs['pre_name'];?><?php echo $rs['r_name'];?>&nbsp;&nbsp;<?php echo $rs['surname'];?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="status_id" class="col-sm-4 col-form-label">การเข้าใช้งาน</label>
                                    <div class="col-sm-8">
                                    <label for="status_id" class="col-sm-5 col-form-label"><?php echo $rs['u_status'];?></label>
                                    </div>
                                </div>
                              
                                <div class="row mb-3">
                                    <label for="po_id" class="col-sm-4 col-form-label">ตำแหน่ง</label>
                                    <div class="col-sm-8">
                                    <label for="status_id" class="col-sm-5  col-form-label"><?php echo $rs['position'];?> </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="depart_id" class="col-sm-4 col-form-label">ฝ่ายงาน/แผนกวิชา</label>
                                    <div class="col-sm-8">
                                    <label for="status_id" class="col-sm-5  col-form-label"><?php echo $rs['depart'];?> </label>
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    
                                    <div class="col-sm-10">
                                      
                                       
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    
                                    <div class="col-sm-10">
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>



            
        </div>
        <!-- Content End -->
        </div>
        </div>
        <?php
require("includes/footer.php"); 
?>
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