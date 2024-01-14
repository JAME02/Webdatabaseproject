<?php
session_start();
if($_SESSION["mem_status"] !=0){
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
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
        <br>
        <br>
            </nav>
            <!-- Navbar End -->
            <?php }?>