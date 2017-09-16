
<!DOCTYPE html>
<html>
<head>
<title>Sign Up </title>
		<link rel="icon" type="text/css" href="images\3.jpg" type="image/gif" sizes="16*16">
		<link rel="stylesheet" type="text/css" href="styles.css">
		 <script type="text/javascript" src="script.js"></script>
</head>
<body>
<!-- *************************** Main DIV ********************************* -->
<div id="wrapper">
<!-- *************************** Image Div ******************************** -->
	<div id="left_div">
		<img id="image" src="images/unlock_login.png" alt="SignUp">
	 </div>	
<!-- *************************** Form DIV ********************************* -->
	<div id="sign_up">
		<form action="includes/process.php" onsubmit="return checkForm(this)" method="post" enctype="multipart/form-data">

		<label>Teacher_ID : </label>
			<input type="text" name="teacher" placeholder="Teacher ID " ><br><br>

			<label>User Name : </label>
			<input type="text" name="username" placeholder="User Name" ><br><br>


			<label>Password : </label>
			<input type="password" name="password" placeholder="Password" ><br><br>


			<label>Confirm Password : </label>
			<input type="password" name="cpassword" placeholder="Confirm Password" ><br><br>


			<label>First Name : </label>
			<input type="text" name="firstname" placeholder="First Name" ><br><br>

			<label>Last Name : </label>
			<input type="text" name="lastname" placeholder="Last Name" ><br><br>

			<label>Gender : </label>
			<input type="text" name="sex" placeholder="gender"  ><br><br>
			

			<label>Date Of Birth :</label>
			<input type="date" name="birthdate" placeholder="Date of birth" ><br><br>

			<label>Mobile No :</label> 
			<input type="number" name="mobile" placeholder="Mobile Number" ><br><br>

			<label> Address :</label>
			<input type="text" name="address" placeholder="Address" ><br><br>

			<label>Date of Joinning </label>
			<input type="date" name="joinning" placeholder="Date of Joinning" ><br><br>

			<label>Father's /Spouse Name  :</label>
			<input type="text" name="fname" placeholder="Father's/Spouse Name " ><br><br>

			<label>Father's/Spouse Mobile Number</label>
			<input type="number" name="fmobile" placeholder="Mobile Number" ><br><br>

			<input type="hidden" name ="type" value ="register">

			<input type="submit" onclick="" value="Sign Up!" name="submit"/><br><br><br><br>
		</form>



	</div>
<!-- *************************** Right Div ******************************** -->
	<div  id="right_div">
		<img src="images/quiet.png" id="preview-img" height="150" width="150">
		<input type="file" name="fileToUpload" id="fileImageUpload"><br><br>		
	</div>
		
	 

</div>
</body>
</html>