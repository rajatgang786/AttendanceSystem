<?php

	/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('attedance');
		$data ="";
		if (isset($_POST['type']) && $_POST['type'] == "edit") {
			
			$student_id = $_POST['stu_id'];


			$fetch_student = mysql_query("SELECT * FROM `student` WHERE `stu_id` = '$student_id' ");
			while ($row = mysql_fetch_assoc($fetch_student )) {
				
			$data .= '<div id="sign_up">';
			$data .= '<form action="includes/process.php" method="post">';

			$data .= '<label>Student Id : </label>';
			$data .= '<input type="text" name="stu_id" placeholder="Stu Id" value = "' .$row ['stu_id'].'" disabled required/><br><br>';


			$data .= '<label>Student First Name : </label>';
			$data .= '<input type="text" name="stu_firstname" placeholder="Stu First Name" value = " ' .$row ['stu_firstname'].'" disabled required/><br><br>';

			$data .= '<label>Student Last Name : </label>';
			$data .= '<input type="text" name="stu_lastname" placeholder="Stu Last Name" value = " ' .$row ['stu_lastname'].' "disabled required/><br><br>';

			$data .= '<label>Student Gender : </label>';
			$data .= '<input type="text" name="stu_sex" placeholder="Stu Gender" value = " ' .$row ['stu_sex'].' "disabled  required/><br><br>';
			

			$data .= '<label>Student Date Of Birth :</label>';
			$data .= '<input type="date" name="stu_birthdate" placeholder="Stu Date of birth" value = " ' .$row ['stu_birthdate'].'" disabled required/><br><br>';

			$data .= '<label>Student Mobile No :</label> ';
			$data .= '<input type="number" name="stu_mobile" placeholder="Stu Mobile Number" value = " ' .$row ['stu_mobile'].'" disabled required/><br><br>';

			$data .= '<label> Student Address :</label>';
			$data .= '<input type="text" name="stu_address" placeholder="Stu Address" value = " ' .$row ['stu_address'].' "disabled required/><br><br>';

			$data .= '<label> Student Course :</label>';
			$data .= '<input type="text" name="stu_course" placeholder="Stu Course" value = " ' .$row ['stu_course'].' "disabled required/><br><br>';

			$data .= '<label> Student Session :</label>';
			$data .= '<input type="text" name="stu_session" placeholder="Stu Session" value = " ' .$row ['stu_session'].'" disabled required/><br><br>';

			$data .= '<label>Student Date of Joinning :</label>';
			$data .= '<input type="date" name="stu_joinning" placeholder="Stu Date of Joinning" value = " ' .$row ['stu_joinning'].'" disabled required/><br><br>';

			$data .= '<label>Father  Name  :</label>';
			$data .= '<input type="text" name="stu_fname" placeholder="Stu Father/Spouse Name " value = " ' .$row ['stu_fname'].'" disabled required/><br><br>';

			$data .= '<label>Father Mobile Number</label>';
			$data .= '<input type="number" name="stu_fmobile" placeholder="Mobile Number" value = " ' .$row ['stu_fmobile'].'" disabled required/><br><br>';
			$data .= '</form>';

			$data .= '<button type="edit" onclick="edit()" value="Edit!" name="edit"/>Edit</button>&nbsp';
			$data .= '<button type="save" onclick="save()" value="Edit!" name="save"/>Save</button><br><br>';
			echo $data;

		$data .= '</div>';

			}

		}


?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
	<script src="jquery-1.11.3.min.js"></script> 
	<script>
		function edit(){
    	$("input").prop("disabled", false);
		};
	</script>
</head>
<body>

</body>
</html>