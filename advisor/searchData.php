<!DOCTYPE html>
<html lang="en">


<?php
session_start();
require("includes/conn.php");
error_reporting(0);


// รับตัวแปรค้นหาตามประเภท
$documentlist = $_POST["documentlist"];

// รับตัวแปรในช่องค้นหา
$document = $_POST["document"];

if($document !=""){ 
                $sql = "select d.doc_nthai,doc_neng,pre_name,doc_on1,doc_su1,pre_name1,doc_on2,doc_su2,pre_name2,doc_on3,doc_su3,position,depart,pre_name3,teacher_n,teacher_su,year,
                doc1,doc2,doc3,doc4,doc5,doc6,doc7,doc8,doc9,doc10,doc11,doc12,doc13,doc14,doc15,doc16,doc17
       
            from tb_doc as d left join tb_pre as p on
                   d.pre_id = p.pre_id 
       
                       left join  tb_pre1 as p1 on
                   d.pre_id1 = p1.pre_id1
       
                       left join  tb_pre2 as p2 on
                   d.pre_id2 = p2.pre_id2
       
                       left join  tb_po as po on
                   d.po_id = po.po_id
                     
                       left join  tb_depart as dp on
                   d.depart_id = dp.depart_id
       
                       left join  tb_pre3 as p3 on
                   d.pre_id3 = p3.pre_id3
       
                       left join  tb_year as y on
                   d.year_id = y.year_id        

                WHERE 
                $documentlist       LIKE '%$document%' 

                and status_id = 4
                ";
            $quser = mysqli_query($conn,$sql);
        }else{
            echo "<script> alert(\"โปรดป้อนข้อมูลในช่องค้นหา\")</script>";
            echo "<script>window.location='index.php'</script>";
        }
 
// print_r($rs);
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
<div class="container-fluid pt-4 px-4">
                <div class="row g-3">
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4 text-center">โครงการ </h4>
                            <h5 class="mb-4 text-center"> วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี</h5>
                            <div class="table-responsive-sm">
                            <table id="example1" class="table table-hover" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th style="width:1%" scope="col">ลำดับ</th>
                                        <th style="width:10%" scope="col">ชื่อโครงการ</th>
                                        <!-- <th scope="col">สถานะการเผยแพร่</th> -->
                                        <th style="width:5%" scope="col">เครื่องมือ</th>
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
    <!-- <td> -->
               <!-- Example single danger button -->
               
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
    <!-- </td> -->
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



