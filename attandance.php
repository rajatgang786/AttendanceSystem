<?php
	
	/* connecting database*/
	mysql_connect('localhost','root','');
	/*database name portal*/
	mysql_select_db('attedance');
	session_start();

	
	/*------------------------------checking login process of teacher ------------------------------------*/
	$data1="";
	if (isset($_POST['usernamelogin']) && $_POST['usernamelogin']!=""  ) 
		{
			
			$user = $_POST['usernamelogin'];
			$pass = $_POST['passwordlogin'];
			$query = mysql_query("SELECT * FROM `Teacher` WHERE `username` = '$user' and `password` = '$pass'");
			$data = mysql_fetch_assoc($query);

			if(!empty($data))
				{	
					$_SESSION['username'] = $user;
					//header('location:attandance.php');
				}
			
			else
				echo "Unable to login:".mysql_error();

			 $data1 .= '<div >'.'<img src="content/uploads/images/'.$data['teacher_image'].'">'.'</div>';
			 		
		}

			if(!(isset($_SESSION['username']) && $_SESSION['username'] != ""))
				{
					header("location:frontpage.php");
				}	


?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div>
	<div id="attandance_left_div">
	<!-- Left Div-->
		<?php 
			echo "$data1";
		 ?>

	</div>

	<div id="attandance_center_div">
	<!-- Center Div-->
			<div id="attandance_form">
			<form method="post" action="attandance_input.php">
			<input type="text" name="fetch_sem" placeholder="session" required/>
		<!--	<input type="text" name="fetch_student" placeholder="course" required/>-->
			<select  name="fetch_student" id="fetch-subject">
			  <option value="default">Subjects</option>	
			  <option value="BCA">BCA</option>
			  <option value="MCA">MCA</option>
			</select>
			<!-- <div id="fetch-details">Fetch</div> -->
			<hr>
			<div id="subject-container">
			</div>
			<button type="submit">Submit</button>
			<button><a href="frontpage.php">Logout</a></button>
			</form>
			</div>

	</div>

</div>



	<script type="text/javascript">
	$(document).ready(function(){


	});
	

	//$("#fetch-details").click(function(){
	$("#fetch-subject").change(function(){
		var sub = $("#fetch-subject").val();
		$.ajax({
			type:"POST",
			url: "includes/process.php",
			data: {"course" : sub, "fetchSub" : "true"},
			success: function(data){
				$("#subject-container").html(data);
			}
		});
	});
	
	</script>
</body>
</html>