<?php
$nm = isset($_POST["fname"]) ? $_POST["fname"] : '';
$age = isset($_POST["fage"]) ? $_POST["fage"] : '';
$from = isset($_POST["ffrom"]) ? $_POST["ffrom"] : '';
$to = isset($_POST["fto"]) ? $_POST["fto"] : '';
$typ = isset($_POST["ftype"]) ? $_POST["ftype"] : '';
$ret = isset($_POST["freturning"]) ? $_POST["freturning"] : '';
$dep = isset($_POST["fdeparting"]) ? $_POST["fdeparting"] : '';

require_once 'connect.php';

$addsql = "INSERT INTO custom (fname, fage, ffrom, fto, ftype, freturning, fdeparting) VALUES ('$nm', '$age', '$from', '$to', '$typ', '$ret', '$dep')";

mysqli_query($conn, $addsql);
header("Location: fadd.php");
