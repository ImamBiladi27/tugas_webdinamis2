<?php
    include_once("connect2.php");
    $id=$_GET['id'];
    $delete= mysqli_query($con, "DELETE FROM user WHERE id='$id'");
    header("Location:index.php");
?>