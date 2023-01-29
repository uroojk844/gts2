<?php
    include_once("conn.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `news` WHERE `id` = '$id'";
    mysqli_query($conn, $sql);
    header("location: all news.php");
?>