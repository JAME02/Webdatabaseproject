<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$mem_name =$_SESSION['mem_name'];
// echo'<pre>';
// 	print_r($mem_name);
// 	echo'<pre>';
// $mem_name =$_REQUEST['u_name'];
// echo '<br>';
// 	echo $mem_name;
// 	echo '<br>';
	// exit;
require("includes/conn.php");
error_reporting(0);
?>
<?php



$numrand1 =  (mt_rand());
$numrand2 =  (mt_rand());
$numrand3 =  (mt_rand());
$numrand4 =  (mt_rand());
$numrand5 =  (mt_rand());
$numrand6 =  (mt_rand());
$numrand7 =  (mt_rand());
$numrand8 =  (mt_rand());
$numrand9 =  (mt_rand());
$numrand10 = (mt_rand());
$numrand11 = (mt_rand());
$numrand12 = (mt_rand());
$numrand13 = (mt_rand());
$numrand14 = (mt_rand());
$numrand15 = (mt_rand());
$numrand16 = (mt_rand());
$numrand17 = (mt_rand());
if ($_REQUEST['page']=="document_add")
{
                $filetype1 = strrchr($_FILES['doc1']['name'],'.');
                $target_dir="../document/docf1/";
                $filename1 = 'บทคัดย่อ_'.$numrand1.$filetype1;
                $target_file1 = $target_dir.$filename1;
                move_uploaded_file($_FILES['doc1']['tmp_name'],$target_file1);

                $filetype2 = strrchr($_FILES['doc2']['name'],'.');
                $target_dir="../document/docf2/";
                $filename2 = 'บทที่ 1 บทนำ_'.$numrand2.$filetype2;
                $target_file2 = $target_dir.$filename2;
                move_uploaded_file($_FILES['doc2']['tmp_name'],$target_file2);

                $filetype3 = strrchr($_FILES['doc3']['name'],'.');
                $target_dir="../document/docf3/";
                 $filename3 = 'บทที่ 2 งานวิจัยที่เกี่ยวข้อง_'.$numrand3.$filetype3;
                $target_file3 = $target_dir.$filename3;
                move_uploaded_file($_FILES['doc3']['tmp_name'],$target_file3);

                $filetype4 = strrchr($_FILES['doc4']['name'],'.');
                $target_dir="../document/docf4/";
                $filename4 = 'บทที่ 3 งานวิจัยที่เกี่ยวข้อง_'.$numrand4.$filetype4;
                $target_file4 = $target_dir.$filename4;
                move_uploaded_file($_FILES['doc4']['tmp_name'],$target_file4);

                $filetype5 = strrchr($_FILES['doc5']['name'],'.');
                $target_dir="../document/docf5/";
                 $filename5 = 'บทที่ 4 ผลการวิเคราะห์ข้อมูล_'.$numrand5.$filetype5;
                $target_file5 = $target_dir.$filename5;
                move_uploaded_file($_FILES['doc5']['tmp_name'],$target_file5);

                $filetype6 = strrchr($_FILES['doc6']['name'],'.');
                $target_dir="../document/docf6/";
                $filename6 = 'บทที่ 5 สรุปผลอภิปรายผล_'.$numrand6.$filetype6;
                $target_file6 = $target_dir.$filename6;
                move_uploaded_file($_FILES['doc6']['tmp_name'],$target_file6);

                $filetype7 = strrchr($_FILES['doc7']['name'],'.');
                $target_dir="../document/docf7/";
                 $filename7 = 'บรรณานุกรม_'.$numrand7.$filetype7;
                $target_file7 = $target_dir.$filename7;
                move_uploaded_file($_FILES['doc7']['tmp_name'],$target_file7);

                $filetype8 = strrchr($_FILES['doc8']['name'],'.');
                $target_dir="../document/docf8/";
                 $filename8 = 'ภาคผนวก ก._'.$numrand8.$filetype8;
                $target_file8 = $target_dir.$filename8;
                move_uploaded_file($_FILES['doc8']['tmp_name'],$target_file8);

                $filetype9 = strrchr($_FILES['doc9']['name'],'.');
                $target_dir="../document/docf9/";
                 $filename9 = 'ภาคผนวก ข._'.$numrand9.$filetype9;
                $target_file9 = $target_dir.$filename9;
                move_uploaded_file($_FILES['doc9']['tmp_name'],$target_file9);

                $filetype10 = strrchr($_FILES['doc10']['name'],'.');
                $target_dir="../document/docf10/";
                 $filename10 = 'ภาคผนวก ค._'.$numrand10.$filetype10;
                $target_file = $target_dir.$filename10;
                move_uploaded_file($_FILES['doc10']['tmp_name'],$target_file10);

                $filetype11 = strrchr($_FILES['doc11']['name'],'.');
                $target_dir="../document/docf11/";
                 $filename11 = 'ภาคผนวก ง._'.$numrand11.$filetype11;
                $target_file11 = $target_dir.$filename11;
                move_uploaded_file($_FILES['doc11']['tmp_name'],$target_file11);

                $filetype12 = strrchr($_FILES['doc12']['name'],'.');
                $target_dir="../document/docf12/";
                 $filename12 = 'ภาคผนวก จ._'.$numrand12.$filetype12;
                $target_file12 = $target_dir.$filename12;
                move_uploaded_file($_FILES['doc12']['tmp_name'],$target_file12);

                $filetype13 = strrchr($_FILES['doc13']['name'],'.');
                $target_dir="../document/docf13/";
                 $filename13 = 'ภาคผนวก ฉ._'.$numrand13.$filetype13;
                $target_file13 = $target_dir.$filename13;
                move_uploaded_file($_FILES['doc13']['tmp_name'],$target_file13);

                $filetype14 = strrchr($_FILES['doc14']['name'],'.');
                $target_dir="../document/docf14/";
                 $filename14 = 'ภาคผนวก ช._'.$numrand14.$filetype14;
                $target_file14 = $target_dir.$filename14;
                move_uploaded_file($_FILES['doc14']['tmp_name'],$target_file14);

                $filetype15 = strrchr($_FILES['doc15']['name'],'.');
                $target_dir="../document/docf15/";
                 $filename15 = 'ภาคผนวก ซ._'.$numrand15.$filetype15;
                $target_file15 = $target_dir.$filename15;
                move_uploaded_file($_FILES['doc15']['tmp_name'],$target_file15);

                $filetype16 = strrchr($_FILES['doc16']['name'],'.');
                $target_dir="../document/docf16/";
                 $filename16 = 'ผู้จัดทำ_'.$numrand16.$filetype16;
                $target_file16 = $target_dir.$filename16;
                move_uploaded_file($_FILES['doc16']['tmp_name'],$target_file16);

                $filetype17 = strrchr($_FILES['doc17']['name'],'.');
                $target_dir="../document/docf17/";
                 $filename17 = 'เอกสาร รวม PDF ทั้งหมด_'.$numrand17.$filetype17;
                $target_file17 = $target_dir.$filename17;
                move_uploaded_file($_FILES['doc17']['tmp_name'],$target_file17);

             
           
	$sql = "INSERT INTO tb_doc (doc_nthai,doc_neng,pre_id,doc_on1,doc_su1,pre_id1,doc_on2,doc_su2,pre_id2,doc_on3,doc_su3,po_id,depart_id,
                                pre_id3,teacher_n,teacher_su,year_id,
                                doc1,doc2,doc3,doc4,doc5,doc6,doc7,doc8,doc9,doc10,doc11,doc12,doc13,doc14,doc15,doc16,doc17,u_name)";
	$sql.= "VALUES ('$_REQUEST[doc_nthai]',
                    '$_REQUEST[doc_neng]',
                    '$_REQUEST[pre_id]',
                    '$_REQUEST[doc_on1]',
                    '$_REQUEST[doc_su1]',
                    '$_REQUEST[pre_id1]',
                    '$_REQUEST[doc_on2]',
                    '$_REQUEST[doc_su2]',
                    '$_REQUEST[pre_id2]',
                    '$_REQUEST[doc_on3]',
                    '$_REQUEST[doc_su3]',
                    '$_REQUEST[po_id]',
                    '$_REQUEST[depart_id]',
                    '$_REQUEST[pre_id3]',
                    '$_REQUEST[teacher_n]',
                    '$_REQUEST[teacher_su]',
                    '$_REQUEST[year_id]',
                    '$filename1',
                    '$filename2',
                    '$filename3',
                    '$filename4',
                    '$filename5',
                    '$filename6',
                    '$filename7',
                    '$filename8',
                    '$filename9',
                    '$filename10',
                    '$filename11',
                    '$filename12',
                    '$filename13',
                    '$filename14',
                    '$filename15',
                    '$filename16',
                    '$filename17',
                    '$mem_name'
					)";
	mysqli_query($conn,$sql);
//    echo $sql;
	echo "<script>window.location='document_add.php'</script>";
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
                            <h4 class="mb-4">เพิ่มข้อมูลโครงการ</h4>
                            <form enctype="multipart/form-data" method="post" action="?page=document_add">
                                <div class="row mb-3">
                                    <label for="doc_nthai" class="col-sm-2 col-form-label">ชื่อเรื่องภาษาไทย</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="doc_nthai" id="doc_nthai" placeholder="ชื่อเรื่องภาษาไทย" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="doc_neng" class="col-sm-2 col-form-label">ชื่อเรื่องภาษาอังกฤษ</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="doc_neng" id="doc_neng" placeholder="ชื่อเรื่องภาษาอังกฤษ" >
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-auto">
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
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_on1" id="doc_on1" placeholder="ชื่อ" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_su1" id="doc_su1" placeholder="นามสกุล" >
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-auto">
                                    <select class="form-select" name="pre_id1" id="pre_id1"
                                    aria-label="Floating label select example">
                                    <option selected>คำนำหน้าชื่อ</option>
                                    <?php
                                        $sql = "select * from tb_pre1";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['pre_id1'].">".$rp['pre_name1']."</option>";   
                                            }
                                        ?>  
                                </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_on2" id="doc_on2" placeholder="ชื่อ" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_su2" id="doc_su2" placeholder="นามสกุล" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ผู้จัดทำ </label>
                                    <div class="col-auto">
                                    <select class="form-select" name="pre_id2" id="pre_id2"
                                    aria-label="Floating label select example" >
                                    <option selected>คำนำหน้าชื่อ</option>
                                    <?php
                                        $sql = "select * from tb_pre2";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['pre_id2'].">".$rp['pre_name2']."</option>";   
                                            }
                                        ?>  
                                </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_on3" id="doc_on3" placeholder="ชื่อ">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="doc_su3" id="doc_su3" placeholder="นามสกุล">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ฝ่ายงาน/แผนกวิชา</label>
                                    <div class="col-sm-2">
                                    <select class="form-select mb-3" aria-label="Default select example" name="depart_id" id="depart_id"
                                    aria-label="Floating label select example">
                                    <option selected>ฝ่ายงาน/แผนกวิชา</option>
                                    <?php
                                        $sql = "select * from tb_depart";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['depart_id'].">".$rp['depart']."</option>";   
                                            }
                                        ?>  
                                </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ตำแหน่ง</label>
                                    <div class="col-sm-2">
                                    
                                     <select class="form-select mb-3" aria-label="Default select example" name="po_id" id="po_id"
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
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ครูประจำวิชา</label>
                                    <div class="col-auto">
                                    <select class="form-select" name="pre_id3" id="pre_id3"
                                    aria-label="Floating label select example">
                                    <option selected>คำนำหน้าชื่อ</option>
                                    <?php
                                        $sql = "select * from tb_pre3";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['pre_id3'].">".$rp['pre_name3']."</option>";   
                                            }
                                        ?>  
                                </select>
                                        </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="teacher_n" id="teacher_n" placeholder="ชื่อ" >
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="teacher_su" id="teacher_su" placeholder="นามสกุล" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ปีการศึกษา</label>
                                    <div class="col-auto">
                                    <select class="form-select" name="year_id" id="year_id"
                                    aria-label="Floating label select example">
                                    <option selected>ปีการศึกษา</option>
                                    <?php
                                        $sql = "select * from tb_year ORDER BY `tb_year`.`year_id` DESC";
                                        $qp =mysqli_query($conn,$sql);
                                        while ($rp = mysqli_fetch_array($qp))
                                            {
                                        echo "<option value=".$rp['year_id'].">".$rp['year']."</option>";   
                                            }
                                        ?>  
                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                     <input type="hidden" class="form-control" name="u_name" id="u_name"   placeholder="<?php echo $_SESSION["mem_name"];?>" >
                                    </div>
                                <hr>

                                
                            <h6 class="mb-4">รายละเอียดโครงการ</h6>
                                <div class="row mb-3">
                                    <label for="doc1" class="col-sm-2 col-form-label">บทคัดย่อ</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc1" id="doc1" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="u_name" class="col-sm-2 col-form-label">บทที่ 1 บทนำ</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc2" id="doc2" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 2 งานวิจัยที่เกี่ยวข้อง</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc3" id="doc3" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 3 วิธีการดำเนินการ</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc4" id="doc4" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 4 ผลการวิเคราะห์ข้อมูล</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc5" id="doc5" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บทที่ 5 สรุปผล อภิปรายผล</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc6" id="doc6" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">บรรณานุกรม </label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc7" id="doc7" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ก.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc8" id="doc8" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ข.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc9" id="doc9" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ค.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc10" id="doc10" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ง.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc11" id="doc11" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก จ.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc12" id="doc12" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ฉ.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc13" id="doc13" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ช. </label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc14" id="doc14" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ภาคผนวก ซ.</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc15" id="doc15" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ผู้จัดทำ</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc16" id="doc16" type="file" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">เอกสาร รวม PDF ทั้งหมด</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-sm" name="doc17" id="doc17" type="file" >
                                    </div>
                                </div>
                                <h6 class="mb-4">ผู้บันทึกโครงการ : คุณ<?php echo $_SESSION ["r_name"];?>&nbsp;&nbsp;<?php echo $_SESSION["surname"];?></h6>
                                <fieldset class="row mb-3">
                                    
                                    <div class="col-sm-10">
                                      
                                       
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    
                                    <div class="col-sm-10">
                                        
                                    </div>
                                </div>
                                <p Align=right> <button type="submit" class="btn btn-success"><i class='fas fa-folder-plus'></i>&nbsp;บันทึก</button> <button type="submit" class="btn btn-danger"><i class='fa fa-close'></i>&nbsp;ยกเลิก</button></p>
                                
                            </form>
                        </div>
                    </div>
                  


 
        </div>
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
