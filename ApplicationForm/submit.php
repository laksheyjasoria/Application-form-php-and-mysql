<?php
session_start();
if(isset($_POST['submit']))
{
        $con = new mysqli("localhost:3306", "root", "", "igu");
         

        if($con === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $Fname=$_SESSION['fname'];
        $Lname=$_SESSION['lname'];
        $dob=$_SESSION['dob'];
        $gender=$_SESSION['gender'];
        $ad=$_SESSION['ad'];
        $cc=$_SESSION['cc'];
        $phon=$_SESSION['ph'];
        $email=$_SESSION['email'];
        $course=$_SESSION['course'];
        $category=$_SESSION['category'];
        $scategory=$_SESSION['scategory'];
        $pd=$_SESSION['pd'];
        $ews=$_SESSION['ews'];
        $km=$_SESSION['km'];
        $tws=$_SESSION['tws'];
        $faname=$_SESSION['faname'];
        $moname=$_SESSION['moname'];
        $fo=$_SESSION['fo'];
        $mo=$_SESSION['mo'];
        $income=$_SESSION['income'];
        $country=$_SESSION['country'];
        $state=$_SESSION['state'];
        $dist=$_SESSION['dist'];
        $t=$_SESSION['t_v'];
        $pin=$_SESSION['pincode'];
        $area=$_SESSION['area'];
        $roll = $_REQUEST['Roll_No'];
        $year = $_REQUEST['yr'];
        $board = $_REQUEST['board'];
        $result = $_REQUEST['result'];     
        $institute = $_REQUEST['ins'];
        $photo = $_FILES['profile'];
        $sign = $_FILES['sign'];
        $marksheet = $_FILES['marks'];
       

        $pname = $photo['name'];
        $perror = $photo['error'];
        $ptmp = $photo['tmp_name'];


        $sname = $sign['name'];
        $serror = $sign['error'];
        $stmp = $sign['tmp_name'];

        $mname = $marksheet['name'];
        $merror = $marksheet['error'];
        $mtmp = $marksheet['tmp_name'];

        $pext = explode('.', $pname);
        $sext = explode('.', $sname);
        $mext = explode('.', $mname);

        $pchk = strtolower(end($pext));
        $schk = strtolower(end($sext));
        $mchk = strtolower(end($mext));
       

        $stored = array('png', 'jpg', 'jpeg');
        if(in_array($pchk,$stored) && in_array($schk,$stored) && in_array($mchk,$stored)){
                $destinationfilep ='Photo/'.$pname;
                move_uploaded_file($ptmp,$destinationfilep);
                $destinationfiles ='Sign/'.$sname;
                move_uploaded_file($stmp,$destinationfiles);
                $destinationfilem ='Marksheet/'.$mname;
                move_uploaded_file($mtmp,$destinationfilem);
                $sql =" INSERT INTO form VALUES(0,'$Fname','$Lname','$dob','$gender',$ad,$cc,$phon,'$email','$course','$category','$scategory',$pd,$ews,$km,$tws,
                   '$faname','$moname','$fo','$mo','$income','$country','$state','$dist','$t',$pin,'$area',
                   $roll,$year,'$board','$result','$institute','$destinationfilep','$destinationfiles','$destinationfilem')";
        mysqli_query($con, $sql);      
        }       
if(mysqli_affected_rows($con) > 0){
        
        print("Congratulations You are succesfully registered"."\n");
		
} else {
		echo "Sorry you can't be registered <br />";
                echo "Please try again";
		echo mysqli_error ($con);
}

        // Close connection
        mysqli_close($con);
}
?>
       