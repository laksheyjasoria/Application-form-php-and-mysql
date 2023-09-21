
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registration Form</title>
     <link rel="stylesheet" href="stylesheet.css">
    
</head>
<body>
<div class="main">
    <div class="register">
        <h2>Qualifying Examination Details</h2>
        <form id="pg3" method="post" action="./submit.php" enctype="multipart/form-data" >

        <label> Roll No : </label>       
        <input type="number" name="Roll_No" id="roll "maxlength="8"> 
        <br>
        <br>
            
        <label>Year Of Passing: </label> 
        <select name="yr" > 
        <option value="">Select</option>
        <option value="2022">2022</option> 
        <option value="2021">2021</option> 
        <option value="2020">2020</option>  
        <option value="2019">2019</option> 
        <option value="2018">2018</option> 
        <option value="2017">2017</option> 
        <option value="2016">2016</option> 
        <option value="2015">2015</option> 
        <option value="2014">2014</option> 
        <option value="2013">2013</option> 
        <option value="2012">2012</option> 
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        </select>
        <br>
        <br>
            
        <label>Board Of Examination : </label> 
        <select name="board" >
        <option value="">Select</option> 
        <option value="CBSE">Central Board Of Secondary Education</option> 
        <option value="ICSC">Indian Certificate Of Secondary Education</option> 
        <option value="HBSE">Haryana Board Of Secondary Education</option>  
        <option value="NIOS">National Institute Of Open Schooling2019</option> 
        <option value="CIE">Cambridge International Examination</option>
        </select>
        <br>
        <br>
            
    
        <label>Result : </label>       
        <input type="number" name="result" id="percentage" placeholder="%"> 
        <br>
        <br>
        <label> Institute Name : </label>       
        <input type="text" name="ins" id="ins" placeholder="Enter with Address">
        <br>
        <br> 
            
    
        <h2>Document Upload</h2>
        <P># The File size must be less than 200kb.</P>
        <P># Applicant Photo must be Recent.</P>
        <P># Upload Category Certificate if you are not in General Category.</P>
        <br>
        <label>Applicant Recent Photo : </label> 
        <input type="file" name="profile" accept="image/*" id="photo" required">
        <br>
        <br>
            
        <label>Applicant Signature : </label> 
        <input type="file" name="sign" accept="image/*" id="sign" required>
        <br>
        <br>
            
        <label>Examination Marksheet : </label> 
        <input type="file" name="marks" accept="image/*" id="marksheet" required>
        <br>
        <br>

        
            
        <input type="button" value="Go back!" id="back" onclick="history.back()">
           
        <input type="submit" value="Submit" id="submit" name="submit">
        </form>
    </div>
</div>
</body>
</html>

