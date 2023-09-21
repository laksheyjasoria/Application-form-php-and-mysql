
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
    <h2>Parental Details</h2>
    <form id="pg2" method="post" action="./mid2.php">
            
    <label> Father Name : </label>    
    <input type="text" name="Faname" id="Fname" placeholder="Enter Your Father Name"> 
    <br>
    <br>   
            
    <label> Mother Name : </label>           
    <input type="text" name="Moname" id="Mname" placeholder="Enter Your Mother Name"> 
    <br>
    <br>
        
    <label> Father's Occupation : </label>  
        
    <select name="Fo"> 
    <option value="">Select</option> 
    <option value="Govt. Job Emp">Govt. Job Employee</option> 
    <option value="Pvt. Job Emp">Private Job Employee</option> 
    <option value="Buisnessman">Buisnessman</option> 
    <option value="Farmer">Farmer</option> 
    <option value="Others">Others</option> 
    </select> 
    <br> 
    <br>
                
    <label>Mother's Occupation : </label>  
    <select name="Mo"> 
    <option value="">Select</option> 
    <option value="Govt. Job Emp">Govt. Job Employee</option> 
    <option value="Pvt. Job Emp">Private Job Employee</option> 
    <option value="Buisness">Buisness</option> 
    <option value="Farmer">Farmer</option> 
    <option value="Housewife">Housewife</option> 
    <option value="Others">Others</option> 
    </select> 
    <br>
    <br>
                    
    <label>Annual Income From All Sources:</label>  
    <select name="income"> 
    <option value="">Select</option>
    <option value="1lac-2lac">100000-200000</option> 
    <option value="2lac-3lac">200000-300000</option> 
    <option value="3lac-5lac">300000-500000</option> 
    <option value="5lac-8lac">500000-800000</option> 
    <option value="8lac & More">800000 & Above</option>  
    </select> 
    <br
    <br>
         
    <h2>Address Details</h2>

    <label>Country : </label> 
    <input type="text" name="Country" id="Country" placeholder="Enter Your Resident Country"> 
    <br>
    <br>   
            
    <label> State : </label>    
    <input type="text" name="State" id="State" placeholder="Enter Your Resident State"> 
    <br>
    <br>
            
    <label> District : </label> 
    <input type="text" name="District" id="Distt" placeholder="Enter Your Distt."> 
    <br>
    <br> 
            
    <label> Town / Village : </label> 
    <input type="text" name="T_V" id="Vill"> 
    <br>
    <br> 
            
    <label> Pincode : </label> 
    <input type="number" name="Pincode" id="Pincode" maxlength="6"> 
    <br>
    <br> 
            
    <label> Area : </label>  
    <select name="area" >
    <option value="">Select</option>      
    <option value="Rural">Rural</option> 
    <option value="Urban">Urban</option> 
    </select>
    <br>
    <br>
                        
    <input type="button" value="Go back!" id="back"  onclick="history.back()">                    
    <button>Next</button>  
    </form>          
</div>       
</div>
</body>
</html>