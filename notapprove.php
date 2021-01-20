<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"update member set status='no' where id=$id");
?>

<script type="text/javascript">
window.location = "admin.php";
</script>
