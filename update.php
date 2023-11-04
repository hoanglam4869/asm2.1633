<?php
$nm = isset($_POST["fname"]) ? $_POST["fname"] : '';
$age = isset($_POST["fage"]) ? $_POST["fage"] : '';
$from = isset($_POST["ffrom"]) ? $_POST["ffrom"] : '';
$to = isset($_POST["fto"]) ? $_POST["fto"] : '';
$typ = isset($_POST["ftype"]) ? $_POST["ftype"] : '';
$ret = isset($_POST["freturning"]) ? $_POST["freturning"] : '';
$dep = isset($_POST["fdeparting"]) ? $_POST["fdeparting"] : '';
$id =$_POST['sid'];

require_once 'connect.php';

$addsql = "UPDATE custom SET fname='$nm', fage=
'$age', ffrom='$from', fto='$to', ftype='$typ', freturning=
'$ret', fdeparting='$dep' WHERE id=$id";

mysqli_query($conn, $addsql);
header("Location: list.php");
