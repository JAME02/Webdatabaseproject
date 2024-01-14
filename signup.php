<!DOCTYPE html>
<html lang="en">
<?php 

include("includes/conn.php");
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
</head>

<body>
<?php
if ($_REQUEST['page']=="signup")
{
    $sql="select * from members";
    $sql.=" where u_name ='$_REQUEST[u_name]'";
    $quser=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($quser);
    if($num==1){
        echo "<script> alert(\"รหัสนักเรียน/นักศึกษาซ้ำ\")</script>";
        echo "<script>window.location='signin.php'</script>";
    }else if($_REQUEST['u_password']==$_REQUEST['u_passwords']){

	$sql = "INSERT INTO members (u_name,u_password,pre_id,r_name,surname,po_id,depart_id,adv_id,u_email)";
	$sql.= "VALUES ('$_REQUEST[u_name]',
				    '$_REQUEST[u_password]',
                    '$_REQUEST[pre_id]',
                    '$_REQUEST[r_name]',
                    '$_REQUEST[surname]',
                    '$_REQUEST[po_id]',
                    '$_REQUEST[depart_id]', 
                    '$_REQUEST[u_email]', 
                    '$_REQUEST[adv_id]'
					)";
	mysqli_query($conn,$sql);
    echo "<script> alert(\"รอการอนุมัติ\")</script>";
   // echo $sql;
}else{
	echo "<script> alert(\"กรุณากรอกรหัสผ่านให้ตรงกัน\")</script>";
}
}
?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <!--<div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">-->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <br>
                                
                            <h3 class=" mb-4 text-primary "> สมัครมาชิก </h3>
                            </a>
                           
                        </div>
                        <form action="?page=signup" method="post" >
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="u_name" id="u_name" placeholder="รหัสนักศึกษา" required >
                            <label for="u_name">รหัสนักศึกษา</label>
                        </div>
                        <div class="form-floating mb-3">
                                <select class="form-select" name="pre_id" id="pre_id"
                                    aria-label="Floating label select example">
                                    <option selected>คำนำหน้าชื่อ</option>
                                    <?php
                                        $sql = "select * from tb_pre";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['pre_id'].">".$rp['pre_name']."</option>";   
                                            }
                                        ?>  
                                </select>
                                <label for="pre_id">---กรุณาเลือก---</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="r_name" id="r_name" placeholder="ชื่อ" required>
                            <label for="r_name">ชื่อ</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="surname" id="surname" placeholder="นามสกุล" required>
                            <label for="surname">นามสกุล</label>
                        </div>
                        <div class="form-floating mb-3">
                                <select class="form-select" name="po_id" id="po_id"
                                    aria-label="Floating label select example">
                                    <option selected>ตำแหน่ง</option>
                                    <?php
                                        $sql = "select * from tb_po";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['po_id'].">".$rp['position']."</option>";   
                                            }
                                        ?>  
                                </select>
                                <label for="po_id">---กรุณาเลือก---</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="depart_id" id="depart_id"
                                    aria-label="Floating label select example">
                                    <option selected>งาน/แผนกวิชา</option>
                                    <?php
                                        $sql = "select * from tb_depart";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['depart_id'].">".$rp['depart']."</option>";   
                                            }
                                        ?>  
                                </select>
                                <label for="depart_id">---กรุณาเลือก---</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="adv_id" id="adv_id"
                                    aria-label="Floating label select example">
                                    <option selected>ครูที่ปรึกษา</option>
                                    <?php
                                        $sql = "select * from tb_advisor";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['adv_id'].">".$rp['advisor']."</option>";   
                                            }
                                        ?>  
                                </select>
                                <label for="adv_id">---กรุณาเลือก---</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="u_email" id="u_email" placeholder="name@example.com"required >
                            <label for="u_email">อีเมล์</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="u_password" id="u_password" placeholder="Password"required>
                            <label for="u_password">รหัสผ่าน</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="u_passwords" id="u_passwords" placeholder="Password"required>
                            <label for="u_passwords">ยืนยันรหัสผ่าน</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                           <div  class ="text-danger"> * รหัสนักเรียน/นักศึกษาใช้สำหรับเป็น Username ในการเข้าสู่ระบบ</div>
<br>
                            <div  class ="text-danger"> ** สำหรับนักเรียน นักษาศึกษาที่เรียนวิชาโครงการเท่านั้น</div>
                            </div>
                           
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">สมัครมาชิก</button>
                        <p class="text-center mb-0">    <a href="signin.php">เข้าสู่ระบบ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Sign Up End -->
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