<?php
session_start();
$_SESSION['fname'] = $_POST['Fname'];
$_SESSION['lname'] = $_POST['Lname'];
$_SESSION['dob'] = $_POST['DOB'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['ad'] = $_POST['aadhaar'];
$_SESSION['cc'] = $_POST['ccode'];
$_SESSION['ph'] = $_POST['phon'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['course'] = $_POST['course'];
$_SESSION['category'] = $_POST['Category'];
if ($_POST['Category'] == 'OBC') {
    $_SESSION['scategory'] = $_POST['sub_category'];
  } else {
    $_SESSION['scategory'] = 'NA';
  }

if (isset($_POST['PD'])) {
    $_SESSION['pd'] = 1;
  } else {
    $_SESSION['pd'] = 0;
  }
if(isset($_POST['EWS'])){
    $_SESSION['ews'] = 1;
}
else{
    $_SESSION['ews'] = 0;
}
if(isset($_POST['KM'])){
    $_SESSION['km'] = 1;
}
else{
    $_SESSION['km'] = 0;
}
if(isset($_POST['TWS'])){
    $_SESSION['tws'] = 1;
}
else{
    $_SESSION['tws'] = 0;
}
header("Location: http://localhost/af/pg2.php");
?>