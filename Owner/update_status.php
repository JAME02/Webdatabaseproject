<?php
require("../includes/conn.php");
$mem_id = $_GET['pk'];
$mem_status = $_GET['status_id'];

$sql_update = "update members set status_id = '$mem_status' where u_name = '$mem_id'";
if ($conn->query($sql_update) === TRUE) {
    ?>
    <script tpye ="text/javascript">
    alert("เปลี่ยนสถานะของสมาชิก สำเร็จ");
    window.location.href = "member_list.php";
    </script>
<?php
  } else {
    ?>
    <script tpye ="text/javascript">
    alert("ล้มเหลว ลองใหม่");
    window.location.href = "member_list.php";
    </script>
    <?php
  }

?>