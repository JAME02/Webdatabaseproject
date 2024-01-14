<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require("includes/conn.php");
error_reporting(0);
?>
<?php

$sql =
        "select d.doc_nthai,doc_neng,pre_name,doc_on1,doc_su1,pre_name1,doc_on2,doc_su2,pre_name2,doc_on3,doc_su3,position,depart,pre_name3,teacher_n,teacher_su,year,
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
 ";
 
 $sql.= " where doc_nthai = '$_REQUEST[doc_nthai]' ";
 $quser = mysqli_query($conn,$sql);
 $rs = mysqli_fetch_array($quser);

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






            <div class="container-fluid pt-4 px-4">
                <div class="row g-10">
                    
                        <div class=".col-sm-5 .col-lg-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">รายละเอียดโครงการ</h4>
                            <form enctype="multipart/form-data" method="post" action="?page=document_add">
                                <div class="row mb-3">
                                    <label for="doc_nthai" class="col-sm-2 col-form-label">ชื่อเรื่องภาษาไทย</label>
                                    <div class="col-sm-7">
                                    <label for="" class="col-sm-8 col-form-label"><?php echo $rs['doc_nthai'];?></label>
                                    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="doc_neng" class="col-sm-2 col-form-label">ชื่อเรื่องภาษาอังกฤษ</label>
                                    <div class="col-sm-7">
                                        <label for="doc_neng" class="col-sm-8 col-form-label"><?php echo $rs['doc_neng'];?></label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-sm-7">
                                        
                                       
                                        <label for="" class="col-sm-5 col-form-label"> <?php echo $rs['pre_name'];?><?php echo $rs['doc_on1'];?>&nbsp;&nbsp;<?php echo $rs['doc_su1'];?></label>
                                    </div>
                                </div>

                                    <div class="row mb-3">
                                    <label for="doc_neng" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-sm-7">
                                    
                                        <label for="" class="col-sm-5 col-form-label"><?php echo $rs['pre_name1'];?><?php echo $rs['doc_on2'];?>&nbsp;&nbsp;<?php echo $rs['doc_su2'];?></label>
                                    </div>
                                </div>

                               <div class="row mb-3">
                                    <label for="doc_neng" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-sm-7">
                                    
                                        <label for="" class="col-sm-5 col-form-label"><?php echo $rs['pre_name2'];?><?php echo $rs['doc_on3'];?>&nbsp;&nbsp;<?php echo $rs['doc_su3'];?></label>
                                    </div>
                                </div>

                                   <div class="row mb-3">
                                    <label for="po_id" class="col-sm-2 col-form-label">ตำแหน่ง</label>
                                    <div class="col-sm-7">
                                        <label for="po_id" class="col-sm-2 col-form-label"><?php echo $rs['position'];?></label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="depart_id" class="col-sm-2 col-form-label">ฝ่ายงาน/แผนกวิชา</label>
                                    <div class="col-sm-7">
                                        <label for="depart_id" class="col-sm-2 col-form-label"><?php echo $rs['depart'];?></label>
                                    </div>
                                </div>

                                   <div class="row mb-3">
                                    <label for="doc_neng" class="col-sm-2 col-form-label">ครูประจำวิชา</label>
                                    <div class="col-sm-7">
                                    
                                        <label for="" class="col-sm-3 col-form-label"><?php echo $rs['pre_name3'];?><?php echo $rs['teacher_n'];?>&nbsp;&nbsp;<?php echo $rs['teacher_su'];?></label>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="year_id" class="col-sm-2 col-form-label">ปีการศึกษา</label>
                                    <div class="col-sm-7">
                                        <label for="year_id" class="col-sm-2 col-form-label"><?php echo $rs['year'];?></label>
                                    </div>
                                </div>

                                
                                <hr>

                                
                            <h5 class="mb-4">รายละเอียดโครงการ</h5>
                                <div class="row mb-3">
                                    <label for="doc1" class="col-sm-2 col-form-label">บทคัดย่อ</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf1/<?php echo $rs['doc1'];?>" target="_blank"> <?php echo $rs['doc1'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="u_name" class="col-sm-2 col-form-label">บทที่ 1 บทนำ</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf2/<?php echo $rs['doc2'];?>" target="_blank"> <?php echo $rs['doc2'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 2 งานวิจัยที่เกี่ยวข้อง</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf3/<?php echo $rs['doc3'];?>" target="_blank"> <?php echo $rs['doc3'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 3 งานวิจัยที่เกี่ยวข้อง</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf4/<?php echo $rs['doc4'];?>" target="_blank"> <?php echo $rs['doc4'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 4 ผลการวิเคราะห์ข้อมูล</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf5/<?php echo $rs['doc5'];?>" target="_blank"> <?php echo $rs['doc5'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 5 สรุปผล อภิปรายผล</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf6/<?php echo $rs['doc6'];?>" target="_blank"> <?php echo $rs['doc6'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บรรณานุกรม</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf7/<?php echo $rs['doc7'];?>" target="_blank"> <?php echo $rs['doc7'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ก.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf8/<?php echo $rs['doc8'];?>" target="_blank"> <?php echo $rs['doc8'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ข.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf9/<?php echo $rs['doc9'];?>" target="_blank"> <?php echo $rs['doc9'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ค.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf10/<?php echo $rs['doc10'];?>" target="_blank"> <?php echo $rs['doc10'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ง.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf11/<?php echo $rs['doc11'];?>" target="_blank"> <?php echo $rs['doc11'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก จ.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf12/<?php echo $rs['doc12'];?>" target="_blank"> <?php echo $rs['doc12'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ฉ.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf13/<?php echo $rs['doc13'];?>" target="_blank"> <?php echo $rs['doc13'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ช.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf14/<?php echo $rs['doc14'];?>" target="_blank"> <?php echo $rs['doc14'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ซ.</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf15/<?php echo $rs['doc15'];?>" target="_blank"> <?php echo $rs['doc15'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ผู้จัดทำ</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf16/<?php echo $rs['doc16'];?>" target="_blank"> <?php echo $rs['doc16'];?> </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">เอกสาร รวม PDF ทั้งหมด</label>
                                    <div class="col-sm-5">
                                    <a href="../document/docf17/<?php echo $rs['doc17'];?>" target="_blank"> <?php echo $rs['doc17'];?> </a>
                                    </div>
                                </div>
                                
                                <hr>
                                <?php 
$sql = " select * from tb_doc ";
$sql.= " inner join tb_status on (tb_doc.status_id = tb_status.status_id)";

$quser = mysqli_query($conn,$sql);
    // echo $sql;

    
    while($rss = mysqli_fetch_array($quser))
    if ($rss['status_id'] == 4) {
        $txt_color="success";
        $txt = "อนุญาต";
    }elseif ($rss['status_id'] == 0) {
        $txt_color="secondary";
        $txt = "ไม่อนุญาต";
      }
    ?>
<div class="row mb-3">
<!-- <div align="right"> -->
<label for="inputPassword3" class="col-sm-2 col-form-label">สถานะการเผยแพร่</label>

<div class="col-sm-5">
                    <div class="btn-group">
  			        <div class="nav-item dropdown">
                        <a href="#" button type="button" class="btn btn-<?php echo $txt_color;?> dropdown-toggle" data-bs-toggle="dropdown">
                        <?php echo $txt;?>    
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a class="dropdown-item" href="ndocupdate_status.php?pk=<?php echo $rs['doc_nthai'];?>&status_id=4">อนุญาต</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ndocupdate_status.php?pk=<?php echo $rs['doc_nthai'];?>&status_id=0">ไม่อนุญาต</a>
                        <div class="dropdown-divider"></div>
                        </div>
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
