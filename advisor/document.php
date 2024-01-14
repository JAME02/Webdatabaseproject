<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// echo'<pre>';
// 	print_r($_SESSION);
// 	echo'<pre>';
$mem_name =$_SESSION['mem_name'];
require("includes/conn.php");
error_reporting(0);
if($_REQUEST['chk'] == "delete")
{
    $sql = " select * from tb_po ";
    $sql.= " where po_id = '$_REQUEST[position]'";
    $qdel = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($qdel);
    if ($num == 1)
    {
        $sql = " delete from tb_po";
        $sql.= " where po_id = '$_REQUEST[position]'";
        mysqli_query($conn,$sql);
        echo"<script>window.location='po_list.php'</script>";
    }else{
        echo"<script>alert('ไม่พบข้อมูล')</script>";
    }
}
$conn
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
<?php 
$sql = " select * from tb_doc ";
$sql.= " inner join tb_status on (tb_doc.status_id = tb_status.status_id)";
$sql.= " where u_name=$mem_name  ";
$quser = mysqli_query($conn,$sql);
    // echo $sql;
?>
        <div class="container-fluid pt-4 px-4">
                <div class="row g-3">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">โครงการ</h4>
                            <div class="table-responsive-sm">
                            <table id="table_id" class="table table-hover" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ชื่อโครงการ</th>
                                        <th scope="col">สถานะการเผยแพร่</th>
                                        <th scope="col">เครื่องมือ</th>
                                        <P Align=right><a class="btn btn-outline-success" href ='document_add.php'><i class="fas fa-plus"></i>&nbsp;เพิ่มข้อมูล</button></p></a>
                                    </tr>
                                </thead>
                                
                                <?php 
  $no=1;
  while($rs = mysqli_fetch_array($quser))
  {
    if ($rs['status_id'] == 4) {
      $txt_color="success";
      $txt = "อนุญาต";
    }elseif ($rs['status_id'] == 0) {
      $txt_color="secondary";
      $txt = "ไม่อนุญาต";
    }
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $rs['doc_nthai'];?>
    <br> 
    <?php echo $rs['doc_neng'];?></td>
    <!-- <td><?php echo $rs['u_status'];?></td> -->
    <td>
               <!-- Example single danger button -->
               <button type="button" class="btn btn-<?php echo $txt_color;?>"><?php echo $txt;?></button>
               <!-- <div class="btn-group">
  			        <div class="nav-item dropdown">
                        <a href="#" button type="button" class="btn btn-<?php echo $txt_color;?> dropdown-toggle" data-bs-toggle="dropdown">
                        <?php echo $txt;?>    
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a class="dropdown-item" href="ndocupdate_status.php?pk=<?php echo $rs['doc_nthai'];?>&status_id=4">อนุญาต</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ndocupdate_status.php?pk=<?php echo $rs['doc_nthai'];?>&status_id=0">ไม่อนุญาต</a>
                        <div class="dropdown-divider"></div>
                        </div> -->
    </td>
    <td> 
                    <a class = "btn btn-secondary"  href ='show_document.php?doc_nthai=<?php echo $rs['doc_nthai'];?>'><i class='fas fa-search'></i>แสดงข้อมูล</button></a>
                    <!-- <a href="edit_member.php?pk=<?php echo $mem_name;?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i>ลบ</a> -->
    </td>
  </tr>
  <?php 
$no++;
}?>
    
         

 
                            </table>
                        
                            </div>
                   </div>
                     </div>
                       </div>
                       </div>
              <!-- Table End -->

   
            
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
         <!-- Footer Start -->
         <?php
require("includes/footer.php"); 
?>
   <!-- Footer End -->
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<!-- <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>-->
<?php include('footer.php'); ?>
        <script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
http://fordev22.com/
"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>

<script type="text/javascript">
$(function(){
    $("#table_id").DataTable({
        "language": {   
            "decimal":        "",
            "emptyTable":     "ไม่มีรายการข้อมูล",
            "info":           "แสดงรายการที่ _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "infoEmpty":      "ไม่มีรายการข้อมูล",
            "infoFiltered":   "(กรองจากทั้งหมด _MAX_ รายการ)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "แสดง  _MENU_ รายการ",
            "loadingRecords": "กำลังโหลดข้อมูล...",
            "processing":     "กำลังประมวลผล...",
            "search":         "ค้นหา:",
            "zeroRecords":    "ไม่พบรายการที่ค้นหา",
            "paginate": {
                "first":      "หน้าแรก",
                "last":       "หน้าสุดท้าย",
                "next":       "ถัดไป",
                "previous":   "ก่อนหน้า"
            },
            "aria": {
                "sortAscending":  ": เรียงข้อมูลจากน้อยไปมาก",
                "sortDescending": ": เรียงข้อมูลจากมากไปน้อย"
            }               
        }       
    });
});
</script>
