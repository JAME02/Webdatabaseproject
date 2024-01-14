<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require("includes/conn.php");
error_reporting(0);
?>

<?php
$sql = " select * from tb_advisor  ";
$quser = mysqli_query($conn,$sql);
$rs = mysqli_fetch_array($quser);
if (isset($_REQUEST['page']) == "update")
{
  {
    $sql = "UPDATE tb_advisor SET";
    $sql.= " advisor='$_REQUEST[advisor]' ";
    $sql.= " where adv_id='$_REQUEST[adv_id]' ";
  }
 
    mysqli_query($conn,$sql);  
     
    echo "<script>window.location.href='advisor_list.php'</script>";  
}
?>

<?php
 if (isset($_POST['add'])) {
   
    $advisor = $_POST['advisor'];
    

    $sql = mysqli_query($conn, "INSERT INTO tb_advisor( advisor) VALUES('$advisor')");
        if ($sql) {
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
        } else {
            echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ!');</script>";
        }
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
    <!-- Modal เพิ่ม-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มครูที่ปรึกษา</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times	"></i></span>
        </button>
      </div>
      <form  method="post" >
            <div class="modal-body">
         
                <label for="name" class="form-label mt-3">ครูที่ปรึกษา</label>
                <input type="text" name="advisor" class="form-control" placeholder="ครูที่ปรึกษา">
                
                
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class='fa fa-close'>&nbsp;</i>ปิด</button>
                <button type="submit" name="add" class="btn btn-success"><i class='fa fa-save'>&nbsp;</i>เพิ่ม</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ปิด Modal เพิ่ม-->

    <!-- Modal แก้ไข-->

    <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แก้ไขคำนำหน้าชื่อ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fas fa-times	"></i></span>
        </button>
      </div>
      <form  method="posts" action="?page=update">
            <div class="modal-body">
                <label for="adv_id" class="form-label mt-3">ลำดับ</label>
                <input type="text" name="adv_id" class="form-control" id="adv_id" value=<?php echo $rs['adv_id'];?> readonly >
                <label for="advisor" class="form-label mt-3">คำนำหน้าชื่อ</label>
                <input type="text" name="advisor" class="form-control" id="advisor" value=<?php echo $rs['advisor'];?> >  
                
                
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" name="adds" class="btn btn-primary">ตกลง</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<!-- ปิด Modal แก้ไข-->

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

                    <!-- Table Start -->
                    <div class="table-responsive-sm">
<?php 
$sql = "select*from tb_advisor ORDER BY `tb_advisor`.`adv_id` DESC";
$quser = mysqli_query($conn,$sql);
?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                             <h4 class="mb-4">ครูที่ปรึกษา</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ครูที่ปรึกษา</th>
                                        <th scope="col">เครื่องมือ</th>
                                        <p Align=right><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal1" href ='advisor_list.php?adv_id=<?php echo $rs['adv_id']?>'><i class="fas fa-plus"></i>&nbsp;เพิ่มข้อมูล</button></p>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=1;
  while($rs = mysqli_fetch_array($quser))

  {
  ?>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $rs['advisor']?></td>
                                        <td> 
                                            <a class = "btn btn-warning t"  href ='advisor_list.php?adv_id=<?php echo $rs['adv_id']?>'><i class='fas fa-edit'></i>แก้ไข</button></a> 
                                            <!-- <a class="btn btn-warning t" data-toggle="modal" data-target="#exampleModal2" href="pre_edit.php?adv_id=<?php echo $rs['adv_id'];?>" ><i class='fas fa-edit'></i> แก้ไข</a> -->
                                           
                                        </td>
  </tr>
  <?php
$no++;
}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Form Start -->
                    <?php
                    include("includes/conn.php");
                    $sql = " select * from tb_advisor";
                    $sql.= " where adv_id = '$_REQUEST[adv_id]' ";
                    $quser = mysqli_query($conn,$sql);
                    $rs = mysqli_fetch_array($quser);

                    if (isset($_REQUEST['page']) == "update")
                    {
                    {
                        $sql = "UPDATE tb_advisor SET";
                        $sql.= " advisor='$_REQUEST[advisor]' ";
                        $sql.= " where adv_id='$_REQUEST[adv_id]' ";
                    }
                    
                        mysqli_query($conn,$sql);  
                        
                        echo "<script>window.location.href='advisor_list.php'</script>";  
                    }
                    ?>
                    
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h4 class="mb-4">ปรับปรุงข้อมูลครูที่ปรึกษา</h4>
                        <form method="post" action="?page=update">
                        <!-- <div class="row mb-3">
                                    <label for="adv_id" class="col-sm-2 col-form-label">ลำดับ</label>
                                    <div class="col-sm-10"> -->
                                        <input type="hidden" name="adv_id" class="form-control" id="adv_id" readonly value=<?php echo $rs['adv_id'];?> > 
                                    <!-- </div>
                                </div> --> 
                                <div class="row mb-3">
                                    <label for="advisor" class="col-sm-3 col-form-label">ครูที่ปรึกษา</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="advisor" class="form-control" id="advisor" value=<?php echo $rs['advisor'];?> >
                                    </div>
                                </div>
                                
                                <button type="submit" name="Submit" class="btn btn-success"><i class='fa fa-save'>&nbsp;</i>ปรับปรุงข้อมูล</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Table End -->
         <!-- Form End -->
                           
            <!-- Table End -->


        </div>
        <!-- Content End -->
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>