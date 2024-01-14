<!DOCTYPE html>
<html lang="en">

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


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <br>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="img/svc.png" class="d-block w-100" alt="..."  height="150" weight="150">
                                </div>
                            
                            
                            </div>
                            </div>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        
                        
                    </div>
                 
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fas fa-home"></i>หน้าแรก</a>
                    <a href="signin.php" class="nav-item nav-link "><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</a> 
                    <a href="signup.php" class="nav-item nav-link "><i class="fas fa-user-plus"></i>สมัครสมาชิก</a> 

                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <br>
                <h4 class="text-primary"><br>
                        <br></h4>
                <br>
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                  
                
                
                   
              
             
                  
            
                </div>
            </nav>
            <!-- Navbar End -->
            <br>
            <br>
            <div style ="margin-left:-200px;" >
            <div align="center">
            <h4 class ="text-primary">- คำชี้แจง สำหรับการใช้งานระบบฐานข้อมูลโครงการวิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</h4><br>
            <h6 class ="text-dark">&nbsp;&nbsp;- สำหรับผู้ใช้ทั่วไปที่ต้องการดาวน์โหลดเอกสารและเพิ่มไฟล์ข้อมูลโครงการท่านต้องสมัครสมาชิกก่อน ถึงจะสามารถทำการเพิ่มไฟล์ข้อมูลโครงการได้</h6>
            </div>
            <div align="center">
           
        <div class="container-fluid pt-4 px-4">     
                <form action="searchData.php" class="form-group" method="POST">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100  rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                               
                            </div>
                             
                                    
                            <h5>สืบค้นเอกสารโครงการ</h5>

                            <br>
                             
                            </div>
                            <div class="row sm-10">
                            <div class="d-flex mb-3">
                                
<h6>ค้นหาตาม</h6>
&nbsp;&nbsp; 
</div>

                            <!--เก็บค่าเป็น   POST -->
                            <div class="col-sm-10">
                            <select name="documentlist" class="form-select mb-3" aria-label="Default select example">
                                <option value="doc_nthai">ชื่อโครงการภาษาไทย</option>
                                <option value="doc_neng">ชื่อโครงการภาษาอังกฤษ</option>
                                <option value="doc_name" >ชื่อ-นามสกุลผู้จัดทำ</option>
                                <option value="teacher_name">ชื่อ-นามสกุลครูประจำวิชา</option>
                                <option value="depart">แผนกวิชา</option>
                                <option value="year">ปีการศึกษา</option>
                            </select>


                      </div>
                      &nbsp;&nbsp;
                      <div class="col-sm-10">
                        
                                <input class="form-control bg-transparent" type="text" name="document" placeholder=" ค้นหาเอกสาร">&nbsp;&nbsp;
                                </div>
                                <div class="col-sm-3">
                                <button type="submit" value="Search" class="btn btn-info"><i class="fas fa-search"></i>&nbsp;ค้นหา</button>
                                </div>
                                
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </form>
                            </div>
        </div>
        
        <!-- Content End -->
    <!-- Footer Start -->
    <?php
require("footer.php"); 
?>
   <!-- Footer End -->

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

</html>\

<!-- <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>-->