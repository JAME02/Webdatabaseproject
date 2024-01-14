<?php
session_start();
if($_SESSION["mem_status"] !=2){
?>
<script type="text/javascript">
alert ("กรุณาเข้าสู่ ก่อนเข้างาน");
window.location.href="../signin.php";
</script>
<?php
}else{
?>
    <!-- Sidebar Start -->
     
       <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                            
                            <div class="carousel-inner ">
                                
                               
                                <div align="center">
<img  style="margin-left:50px; " height="100" weight="100" src="img/svc.png" alt="logo">
</div>
                            
                            
                            </div>
                                
                                
                            </div>
                            </div>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">

                    </div>
                    <div class="ms-3">
                        <h5 class="mb-0">สถานะ : ครูที่ปรึกษา</a></h5>        
                    </div>
                </div>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link "><i class="fas fa-home"></i>หน้าแรก</a>
                    <a href="show_data.php?u_name=<?php echo $_SESSION ["mem_name"];?>" class="nav-item nav-link"><i class="fas fa-user-cog"></i>ข้อมูลผู้ใช้งาน</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-book-open"></i> ข้อมูลโครงการ</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            
                            <a href="document.php" class="dropdown-item">จัดการไฟล์โครงการ</a>
                        </div>
                    </div>
                    
                  
                     <a href="logout.php"  class="nav-item nav-link text-danger "><i class="fas fa-sign-out-alt"></i>ออกจากระบบ</a> 
            

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
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user-alt"></i>
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION ["r_name"];?>&nbsp;&nbsp;<?php echo $_SESSION["surname"];?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="show_data.php?u_name=<?php echo $_SESSION ["mem_name"];?>" class="dropdown-item"><i class="fas fa-user-alt"></i>&nbsp;ข้อมูลผู้ใช้งาน</a>
                            <a href="member_edit.php?u_name=<?php echo $_SESSION ["mem_name"];?>" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;ตั้งค่าข้ข้อมูลผู้ใช้งาน</a>
                            <a href="logout.php" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <?php }?>