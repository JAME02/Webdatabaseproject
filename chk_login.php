<?php
    require("includes/conn.php");
    session_start();
    $user =$_POST["username"];
    $pass =$_POST["password"];

    $sql_login = "
        select * from members
        where u_name = '$user' and u_password = '$pass' ";
    $rusult_login = $conn->query($sql_login);

    if($rusult_login->num_rows == 1 ){
       foreach($rusult_login as $key){
           $mem_name = $key['u_name'];
           $u_password = $key['u_password'];
           $pre_id = $key['pre_id'];
           $r_name = $key['r_name'];
           $surname = $key['surname'];
           $po_id = $key['po_id'];
           $depart_id = $key['depart_id'];
           $adv_id = $key['adv_id'];
           $u_email = $key['u_email'];
           $uimg = $key['uimg'];
           $mem_status = $key['status_id'];
    If ($mem_status == 1) {
    
        $_SESSION["mem_name"] = "$mem_name";
        $_SESSION["u_password"] = "$u_password";
        $_SESSION["pre_id"] = "$pre_id";
        $_SESSION["r_name"] = "$r_name";
        $_SESSION["surname"] = "$surname";
        $_SESSION["po_id"] = "$po_id";
        $_SESSION["depart_id"] = "$depart_id";
        $_SESSION["adv_id"] = "$adv_id";
        $_SESSION["u_email"] = "$u_email";
        $_SESSION["uimg"] = "$uimg";
        $_SESSION["mem_status"] = "$mem_status";
?>
    <script tpye ="text/javascript">
    alert("ยินดีต้อนรับ : <?php echo $mem_name ; ?> ผู้ดูเเลระบบ");
    window.location.href = "Owner/index.php";
    </script>
<?php
    }elseIf ($mem_status == 2) {
       
        $_SESSION["mem_name"] = "$mem_name";
        $_SESSION["u_password"] = "$u_password";
        $_SESSION["pre_id"] = "$pre_id";
        $_SESSION["r_name"] = "$r_name";
        $_SESSION["surname"] = "$surname";
        $_SESSION["po_id"] = "$po_id";
        $_SESSION["depart_id"] = "$depart_id";
        $_SESSION["adv_id"] = "$adv_id";
        $_SESSION["u_email"] = "$u_email";
        $_SESSION["uimg"] = "$uimg";
        $_SESSION["mem_status"] = "$mem_status";
?>
?>
    <script tpye ="text/javascript">
    alert("ยินดีต้อนรับ : <?php echo $mem_name ; ?> ครูที่ปรึกษา");
    window.location.href = "advisor/index.php";
    </script>
    
<?php
    }elseIf ($mem_status == 3) {
       
        $_SESSION["mem_name"] = "$mem_name";
        $_SESSION["u_password"] = "$u_password";
        $_SESSION["pre_id"] = "$pre_id";
        $_SESSION["r_name"] = "$r_name";
        $_SESSION["surname"] = "$surname";
        $_SESSION["po_id"] = "$po_id";
        $_SESSION["depart_id"] = "$depart_id";
        $_SESSION["adv_id"] = "$adv_id";
        $_SESSION["u_email"] = "$u_email";
        $_SESSION["uimg"] = "$uimg";
        $_SESSION["mem_status"] = "$mem_status";
?>
?>
    <script tpye ="text/javascript">
    alert("ยินดีต้อนรับ : <?php echo $mem_name ; ?> นักเรียน/นักศึกษา");
    window.location.href = "user/index.php";
    </script>
    <?php
    }elseIf ($mem_status == 0) {
        
        $_SESSION["mem_name"] = "$mem_name";
        $_SESSION["mem_status"] = "$mem_status";
?>
    <script tpye ="text/javascript">
    alert("ยินดีต้อนรับ : <?php echo $mem_name ; ?> รอการยืนยันผู้ใช้");
    window.location.href = "index.php";
    </script>
<?php
           }
       }
        echo $mem_name,$mem_status;

    }else{
?>
    <script tpye ="text/javascript">
    alert("Email หรือ Password ไม่ถูกต้อง");
    window.location.href = "signin.php";
    </script>
<?php
    }
?>
