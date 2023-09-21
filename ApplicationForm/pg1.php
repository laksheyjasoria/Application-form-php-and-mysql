<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="main">
    <div class="logo">
        <img src="./uni logo.png">
    </div>

    <div class="register"> 
       <h2>Applicant Details</h2>

    <form id="pg1" action="./mid1.php"   method="post">
            
        <label> First Name : </label>   
        <input type="text" name="Fname" id="fname" placeholder="Enter Your First Name" required> 
        <br>
        <br>   
            
        <label> Last Name : </label>  
        <input type="text" name="Lname" id="lname" placeholder="Enter Your Last Name"> 
        <br>
        <br>

        <label> D.O.B : </label>
        <input type="date" name="DOB" id="dob" placeholder="Date of Birth" required> 
        <br>  
        <br>

        <label> Choose your Gender :</label>
        <br>
        <input type="radio" name="gender" id="Male" value="Male">
        <label for="male">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="Female">
        <label for="female">Female</label>
        <br>
        <input type="radio" name="gender" id="Rather Not To Say" value="Rather Not To Say">
        <label for="female">Rather Not To Say</label>
        <br>  
        <br>

        <label> Aadhaar Number :</label>     
        <input type="number" name="aadhaar" id="ad" size="12pt" required>
        <br>
        <br>
 
        <label> Phone :</label>    
        <input type="text" name="ccode" id="cc" size="2px" value="+91" required>  
        <input type="number" name="phon" id="ph" size="10" required> 
        <br> 
        <br> 
            
        <label>Email :</label>    
        <input type="email" name="email" id="email" placeholder="Enter a valid Email" required>
        <br>    
        <br>
            
        <label> Course :</label>      
        <select name="course"> 
            <option  value="Select">Select</option> 
            <option  value="B.Tech">B.Tech</option> 
            <option  value="B.Pharmacy">B.Pharmacy</option> 
            <option  value="B.com">B.com</option> 
            <option  value="LLB">LLB</option> 
            <option  value="MCA">MCA</option> 
            <option value="MSC">MSC</option> 
        </select> 
        <br>
        <br> 
            
        <h2>Category Details</h2>
        <br>
        <label> Select Category : </label>  
        <select name="Category"> 
        <option value="">Select</option>
        <option value="General">General</option> 
        <option value="OBC">OBC</option> 
        <option value="SC\ST">SC\ST</option> 
        </select>
        <br>
        <br>
            
        <label> Sub Category : </label> 
        <input type="text" name="sub_category" id="sub_category"> 
        <br>
        <br>

        <input type="checkbox" id="0" name="PD"> 
        <label>Are you Physically Handicaped ? </label>
        <br>
            
        <input type="checkbox" id="1" name="EWS">    
        <label for="EWS">Economically Weaker Section</label>
        <br>
            
        <input type="checkbox" id="2" name="KM">
        <label for="K M">Kashmiri Migrant</label>
        <br>
        <input type="checkbox" id="3" name="TWS">
        <label for="TWS">Tution Fee Waiver</label>
        <br>  
        <br>          
            
        <button>Next</button>  
    </form>
    </div>
</div>

</body>
</html>