
<!DOCTYPE html>
<html>
<head>
<title>Student Details </title>
		<link rel="icon" type="text/css" href="images\3.jpg" type="image/gif" sizes="16*16">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="jquery-1.11.3.min.js"></script> 

</head>
<body>
<!-- *************************** Main DIV ********************************* -->
	<div id="outer_big_div">

	<!-- **************************** Left Div**************************** 
		<div id="left_inner_div">
			
			<div id="button_inner_div">

			<form action="uploadhandler.php" method="post" enctype="multipart/form-data">

				<input type="file" name="fileToUpload"><br><br>

				<input type="submit" value="Upload" name="submit">
				</form>


			</div>

		</div> -->
		<div  id="right_div">
			<img src="images/quiet.png" id="preview-img" height="150" width="150">
			<input type="file" name="fileToUpload" id="fileImageUpload"><br><br>

		</div>
	
		<!-- ****************************  Left Div Ends****************************  -->


<!-- **************************** Middle Div****************************  -->
		<div id="sign_up">
		<form action="includes/process.php" method="post" enctype="multipart/form-data">

			<label>Student Id : </label>
			<input type="text" name="stu_id" placeholder="Stu Id" required/><br><br>


			<label>Student First Name : </label>
			<input type="text" name="stu_firstname" placeholder="Stu First Name" required/><br><br>

			<label>Student Last Name : </label>
			<input type="text" name="stu_lastname" placeholder="Stu Last Name" required/><br><br>

			<label>Student Gender : </label>
			<input type="text" name="stu_sex" placeholder="Stu Gender"  required/><br><br>
			

			<label>Student Date Of Birth :</label>
			<input type="date" name="stu_birthdate" placeholder="Stu Date of birth" required/><br><br>

			<label>Student Mobile No :</label> 
			<input type="number" name="stu_mobile" placeholder="Stu Mobile Number" required/><br><br>

			<label> Student Address :</label>
			<input type="text" name="stu_address" placeholder="Stu Address" required/><br><br>

			<label> Student Course :</label>
			<input type="text" name="stu_course" placeholder="Stu Course" required/><br><br>

			<label> Student Session :</label>
			<input type="text" name="stu_session" placeholder="Stu Session" required/><br><br>

			<label>Student Date of Joinning :</label>
			<input type="date" name="stu_joinning" placeholder="Stu Date of Joinning" required/><br><br>

			<label>Father's Name  :</label>
			<input type="text" name="stu_fname" placeholder="Stu Father's/Spouse Name " required/><br><br>

			<label>Father's Mobile Number</label>
			<input type="number" name="stu_fmobile" placeholder="Mobile Number" required/><br><br>

			<!--Time pass -->
			<input type="hidden" name ="type" value ="add">
			<input type="submit" onclick="" value="Sign Up!" name="submit"/><br><br>
		</form>



	</div>
		<!-- *************************** Middle Div Ends**************************** -->

	</div>



	  <script type="text/javascript" src="script.js"></script>

</body>
<!-- ********************************** Outer Div Ends******************************* -->
	 
</html>