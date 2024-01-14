<?php
require("includes/conn.php");
$mem_name = $_GET['pk'];
$mem_status = $_GET['status_id'];

$sql_update = "update tb_doc set status_id = '$mem_status' where doc_nthai = '$mem_name'";
if ($conn->query($sql_update) === TRUE) {
    ?>
    <script tpye ="text/javascript">
    alert("เปลี่ยนสถานะของโครงการ สำเร็จ");
    window.location.href = "ndocument.php";
    </script>
<?php
  } else {
    ?>
    <script tpye ="text/javascript">
    alert("ล้มเหลว ลองใหม่");
    window.location.href = "ndocument.php";
    </script>
    <?php
  }

?>