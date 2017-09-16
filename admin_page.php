<?php
	session_start();

	if(!(isset($_SESSION['admin_usernamelogin']) && $_SESSION['admin_usernamelogin'] != ""))
	{
		header("location:frontpage.php");
	}	
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="icon" type="text/css" href="images\3.jpg" type="image/gif" sizes="16*16">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<!-- ************************************ Student Profile************************ -->
<div id="admin_page_outer_div">
	
	<div id="student_profile_image_div">

		<img src="images/student_profile.jpg" alt="Student Profile" id="student_profile_image" name="Student_Profile">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <div id="student_profile_text">  Manage Student Profile</div>

		
	</div>

	<div id="components_of_student_div">

		<!-- Sign Up Div for students -->
		<div id="student_sign_up_div">
			<a href="add_student_ details.php"><img id="student_sign_up_image" src="images/add_student.png" alt="Add Student details"><br><label id="student_sign_up_text">Add Student Details</label> </a>
		
		
		</div>

		<!-- Remove any student -->
		<div id="student_delete_div">
			<a href="remove_student.php"><img id="student_delete_image" src="images/remove_student.png" alt="Remove Student details"><br><label id="student_sign_up_text">Remove Student Details </label> </a>
		
		
		</div>
		<!-- Edit student details -->
		<div id="student_edit_div">
			<a href="edit_student.php"><img id="student_edit_image" src="images/edit_student.png" alt="Edit Student details"><br><label id="student_sign_up_text">Edit Student Details </label> </a>
		
		
		</div>
	</div>

	<!-- ************************************Teachers Profile ************************ -->

	<div id="teacher_profile_image_div">

		<img src="images/teacher_icon.jpg" alt="Teacher Profile" id="teacher_profile_image">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <div id="teacher_profile_text"> Manage Teacher Profile</div>

		
	</div>

	<div id="components_of_teacher_div">
		
		<!-- Sign Up Div for Teachers -->
		<div id="teacher_sign_up_div">
			<a href="signup.php"><img id="teacher_sign_up_image" src="images/teacher_login.png" alt="Add teacher details"><br><label id="teacher_sign_up_text">Add Teacher Details</label> </a>
		
		
		</div>

		<!-- Remove any teacher -->
		<div id="teacher_delete_div">
			<a href="remove_teacher.php"><img id="teacher_delete_image" src="images/teacher_remove.png" alt="Remove teacher details"><br><label id="teacher_sign_up_text">Remove Teacher Details </label> </a>
		
		
		</div>
		<!-- Edit teacher details -->
		<div id="teacher_edit_div">
			<a href="edit_teacher.php"><img id="teacher_edit_image" src="images/teacher_edit.png" alt="Edit teacher details"><br><label id="student_sign_up_text">Edit Teacher Details </label> </a>
		
		
	</div>

	</div>

	<div>
	<button><a href="frontpage.php"> Logout </a></button></div>

</div>

	<!-- ************************************ Script tag  for fade in of div************************ -->
	<script src="jquery-1.11.3.min.js"></script> 
	 <script>
$(document).ready(function(){
    $("#student_profile_image").click(function(){
        $("#components_of_student_div").fadeIn();
    });
});
$(document).ready(function(){
    $("#teacher_profile_image").click(function(){
        $("#components_of_teacher_div").fadeIn();
    });
});
</script>

</body>
</html> 