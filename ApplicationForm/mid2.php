<?php
session_start();
$_SESSION['faname'] = $_POST['Faname'];
$_SESSION['moname'] = $_POST['Moname'];
$_SESSION['fo'] = $_POST['Fo'];
$_SESSION['mo'] = $_POST['Mo'];
$_SESSION['income'] = $_POST['income'];
$_SESSION['country'] = $_POST['Country'];
$_SESSION['state'] = $_POST['State'];
$_SESSION['dist'] = $_POST['District'];
$_SESSION['t_v'] = $_POST['T_V'];
$_SESSION['pincode'] = $_POST['Pincode'];
$_SESSION['area'] = $_POST['area'];
header("Location: http://localhost/af/pg3.php");
?>