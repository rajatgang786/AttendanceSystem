<?php 

	/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('attedance');

	$data = "";

	if (isset($_POST['fetch_student'])) {
		
		$student_fetch_details = $_POST['fetch_student'];
		$sem = $_POST['fetch_sem'];
		$subject_id = $_POST['subject_id'];

		$student_for_attandace = mysql_query("SELECT * FROM `student` WHERE `stu_course` = '$student_fetch_details' AND `stu_session` = '$sem'");
			$data .= '<form action="" method="post">';
			$data .= '<div class = "outer_div_attandance">'	;

			$i = 0;
		while ($row = mysql_fetch_assoc($student_for_attandace)) {
			//$date = explode("-", $row['stu_joining']);

					// Outer Div
		    $data .= '<div class="single_div_attandance">';
		    $data .= '<div class="inner_div_left">';		    
		    $data .= '<div >'.'<img class="image_attandance" src="content/uploads/images/'.$row['stu_image'].'">'.'</div>';
		    $data .= '<br>';
		    $data .= '<div class="name">'. $row["stu_firstname"] .'</div>';
		    $data .= '</div>';
		    $data .=  '<div class="inner_div_right_checkbox">'.'<input type="radio" name="att-'.$row['stu_id'].'" value="Present" checked>Present
						<br>
					  <input type="radio" name="att-'.$row['stu_id'].'" value="Absent">Absent' .'</div>
					  <input type="hidden" name="stu-'.$i++.'" value="'.$row['stu_id'].'"/>';
		    $data .= '</div>';

		    
		}
		$data .= '<input type="submit" value="Submit"></input><br><br>';
		$data .= '<button><a href="attandance.php"> Back </a></button><br><br>';
		$data .= '<button><a href="frontpage.php">Logout</a></button>';
		    $data .= '</div>';
		    $data .= '<input type="hidden" name="storing_attandance" value="true"/>';
		    $data .= '<input type="hidden" name="subject_id" value="'.$subject_id.'"/>';
		    $data .= '</form>';

		    echo $data;
	}

	if (isset($_POST['storing_attandance']) ) {
		//query for storing attendence
		$date_of_attandance = date("l jS \of F Y h:i:s A");
		
		$subject_id = $_POST['subject_id'];

		$i = 0;
		$query = "";
		while(isset($_POST['stu-'.$i])){

			$student_id = $_POST['stu-'.$i++];

			$att = ($_POST['att-'.$student_id] == 'Present') ? 'P' : 'A';	
			
			$query = mysql_query("INSERT INTO `attandance`(`Date`,`sub_id`,`stu_id`,`attandance` ) VALUES('$date_of_attandance','$subject_id','$student_id', '$att') ");
			
			
		}

		if ($query ) 
			{
				
				/*Redirecting to another page*/
				echo "<script type='text/javascript'>alert('Successfully Entered');</script>";

															
			}
		else
			echo "<script type='text/javascript'>alert('Unable To connect ');</script>".mysql_error();

	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>

	
	</body>
	</html>