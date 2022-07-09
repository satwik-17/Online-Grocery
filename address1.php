<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$housenumber = $_POST['housenumber'];
		$housenumber = stripslashes($housenumber);
		$housenumber = addslashes($housenumber);

		$locality = $_POST['locality'];
		$locality = stripslashes($locality);
		$locality = addslashes($locality);

		$city = $_POST['city'];
		$city = stripslashes($city);
		$city = addslashes($city);

            $pincode = $_POST['pincode'];
		$pincode = stripslashes($pincode);
		$pincode = addslashes($pincode);

            $email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

            $phoneno = $_POST['phoneno'];
		$phoneno = stripslashes($phoneno);
		$phoneno = addslashes($phoneno);

		
            $str="insert into address set housenumber='$housenumber',locality='$locality',city='$city', pincode='$pincode',email='$email',phonenno='$phoneno'";
			if((mysqli_query($con,$str)))	
			echo "<center><h3><script>alert('Congrats.. You have successfully placed order !!');</script></h3></center>";
			header('location: thanks.php?q=1');
		
    }
?>

<html>
	<head>
		<title>Signup | Online Grocery</title>
		
                                       <link rel="stylesheet" href="logincss.css">
                                     
            </head>

	<body>
	 <div class= "log">
     <div class ="page-title"> ONLINE GROCERIES</div>
	 
     </div>
       
 
	 	
			                <div class="container">
			                 <h2 style="color:red;">Fill your address here</h2>
                             <style>
                           h2{text-align: center;
		                    
                           }			   
                            </style>        
							<form method="post" action="thanks.php">
								
									<label>House No.:</label>
									<input type="text" name="name" class="form-control" required /></br></br>
								   
								      <label>Locality:</label>
									<input type="locality" name="locality" class="form-control" required /></br></br>
								
									<label>City:</label>
									<input type="text" name="city" class="form-control" required /></br></br>
									
									<label>Pincode:</label>
									<input type="text" name="pincode" class="form-control" required /></br></br>
                                                       
                                                      <label>Email:</label>
									<input type="email" name="email" class="form-control" required /></br></br>
                                                         
									<label>Phone Number:</label>
									<input type="text" name="phoneno" class="form-control" required /></br></br>
									
									
									
								    <div class="btn">
									<button  class="btn"name="submit">Done</button>
								</div>
								</br>
								
							</form>
						
                                            </div>
                                    </div>
		
		
	</body>
</html>