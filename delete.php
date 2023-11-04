<?php
$id=$_GET['sid'];
require_once 'connect.php';
$delete_sql = "DELETE FROM custom WHERE id=$id";
mysqli_query($conn, $delete_sql);
header("Location: list.php");