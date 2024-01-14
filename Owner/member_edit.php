<!DOCTYPE html>
<html lang="en">
<?php

include("includes/conn.php");
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


<?php
$sql = "select * from members where u_name='$_REQUEST[u_name]'";
$qs = mysqli_query ($conn,$sql);
$rs=mysqli_fetch_array($qs);
?>
<!-- ============================================================== -->
<!--add-->
    <?php
if(@$_REQUEST['page']=='up')
{
 if ($_REQUEST['u_password']==$_REQUEST['u_passwords']){
        $sql = "UPDATE members SET";
        $sql.= "
        u_name='$_REQUEST[u_name]',
        r_name='$_REQUEST[r_name]', 
        surname='$_REQUEST[surname]',
        pre_id='$_REQUEST[pre_id]',
        po_id='$_REQUEST[po_id]',
        depart_id='$_REQUEST[depart_id]',
        status_id='$_REQUEST[status_id]',
        u_password='$_REQUEST[u_password]'
        where u_name='$_REQUEST[u_name]'";
                 $qs = mysqli_query ($conn,$sql);
                 echo "<script>window.location='member_list.php'</script>";
                }else{
                    echo "<script> alert(\"กรุณากรอกรหัสผ่านให้ตรงกัน\")</script>";
    }
}
?>

<div class="table-responsive-sm">

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
            <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">ปรับปรุงข้อมูล</h4>
                            <form method="post" action="?page=up" >
                            <div class="row mb-3">
                                    <label for="r_name" class="col-sm-3 col-form-label">ชื่อเข้าใช้งาน</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="u_name" class="form-control" id="u_name" value=<?php echo $rs['u_name'];?> readonly >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pre_id" class="col-sm-3 col-form-label">คำนำหน้าชื่อ</label>
                                    <div class="col-sm-auto">
                                    <select class="form-select" name="pre_id" id="pre_id"
                                    aria-label="Floating label select example">
                                        <?php
                                        $sql = "select * from tb_pre";
                                        $qp = mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp) )
                                        {     
                                            if($rs['pre_id'] == $rp['pre_id'])
                                            {
                                                echo "<option value=".$rp['pre_id']." selected>".$rp['pre_name']."</option>";    
                                            } else {
                                                echo "<option value=".$rp['pre_id'].">".$rp['pre_name']."</option>"; 
                                            }           
                                            
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="r_name" class="col-sm-3 col-form-label">ชื่อ</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="r_name" class="form-control" id="r_name" value=<?php echo $rs['r_name'];?> >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="surname" class="col-sm-3 col-form-label">นามสกุล</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="surname" class="form-control" id="surname" value=<?php echo $rs['surname'];?> >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="po_id" class="col-sm-3 col-form-label">ตำแหน่ง</label>
                                    <div class="col-sm-auto">
                                    <select class="form-select" name="po_id" id="po_id"
                                    aria-label="Floating label select example">
                                        <?php
                                        $sql = "select * from tb_po";
                                        $qp = mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp) )
                                        {     
                                            if($rs['po_id'] == $rp['po_id'])
                                            {
                                                echo "<option value=".$rp['po_id']." selected>".$rp['position']."</option>";    
                                            } else {
                                                echo "<option value=".$rp['po_id'].">".$rp['position']."</option>"; 
                                            }           
                                            
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>

                

                                <div class="row mb-3">
                                    <label for="depart_idห" class="col-sm-3 col-form-label">ฝ่ายงาน/แผนกวิชา</label>
                                    <div class="col-sm-auto">
                                    <select class="form-select" name="depart_id" id="depart_id"
                                    aria-label="Floating label select example">
                                        <?php
                                        $sql = "select * from tb_depart";
                                        $qp = mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp) )
                                        {     
                                            if($rs['depart_id'] == $rp['depart_id'])
                                            {
                                                echo "<option value=".$rp['depart_id']." selected>".$rp['depart']."</option>";    
                                            } else {
                                                echo "<option value=".$rp['depart_id'].">".$rp['depart']."</option>"; 
                                            }           
                                            
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>

    
                                <div class="row mb-3">
                                    <label for="status_id" class="col-sm-3 col-form-label">สิทธิการเข้าใช้งาน</label>
                                    <div class="col-sm-auto">
                                    <select class="form-select" name="status_id" id="status_id"
                                    aria-label="Floating label select example">
                                        <?php
                                        $sql = "select * from tb_status";
                                        $qp = mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp) )
                                        {     
                                            if($rs['status_id'] == $rp['status_id'])
                                            {
                                                echo "<option value=".$rp['status_id']." selected>".$rp['u_status']."</option>";    
                                            } else {
                                                echo "<option value=".$rp['status_id'].">".$rp['u_status']."</option>"; 
                                            }           
                                            
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="u_password" class="col-sm-3 col-form-label">รหัสผ่าน</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="u_password" class="form-control" id="u_password" value=<?php echo $rs['u_password'];?> >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="u_passwords" class="col-sm-3 col-form-label">ยีนยันรหัสผ่าน</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="u_passwords" class="form-control" id="u_passwords" value=<?php echo $rs['u_password'];?> >
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
                                <button type="submit" class="btn btn-success btn-flat"><i class="far fa-edit"></i> ปรับปรุงข้อมูล</button>
                            </form>
                        </div>
                    



                    </div>  
        </div>
        <!-- Content End -->
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