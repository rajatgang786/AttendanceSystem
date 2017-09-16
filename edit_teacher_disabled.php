<?php

		/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('attedance');
		$data ="";
		if (isset($_POST['type']) && $_POST['type'] == "edit") {
				
			$teacher_id = $_POST['Teacher_ID'];


			$fetch_teacher = mysql_query("SELECT * FROM `teacher` WHERE `Teacher_ID` = '$teacher_id' ");
			while ($row = mysql_fetch_assoc($fetch_teacher )) {
				
				
			$data .= '<div id="sign_up">';
			$data .= '<form action=""  method="post">';

			$data .= '<label>Teacher_ID : </label>';
			$data .= '<input type="text" name="teacher" placeholder="Teacher ID " value = " ' .$row ['Teacher_ID'].'" disabled ><br><br>';

			$data .= '<input type="text" name="old_teacher_id" value = " ' .$row ['Teacher_ID'].'" disabled ><br><br>';

			$data .= '<label>User Name : </label>';
			$data .= '<input type="text" name="username" placeholder="User Name" value = " ' .$row ['username'].'" disabled><br><br>';


			$data .= '<label>First Name : </label>';
			$data .= '<input type="text" name="firstname" placeholder="First Name" value = " ' .$row ['firstname'].'" disabled><br><br>';

			$data .= '<label>Last Name : </label>';
			$data .= '<input type="text" name="lastname" placeholder="Last Name" value = " ' .$row ['lastname'].'" disabled ><br><br>';

			$data .= '<label>Gender : </label>';
			$data .= '<input type="text" name="sex" placeholder="gender" value = " ' .$row ['sex'].'" disabled><br><br>';
			

			$data .= '<label>Date Of Birth :</label>';
			$data .= '<input type="date" name="birthdate" placeholder="Date of birth" value = " ' .$row ['birthdate'].'" disabled><br><br>';

			$data .= '<label>Mobile No :</label> ';
			$data .= '<input type="number" name="mobile" placeholder="Mobile Number" value = " ' .$row ['mobile'].'" disabled ><br><br>';

			$data .= '<label> Address :</label>';
			$data .= '<input type="text" name="address" placeholder="Address" value = " ' .$row ['address'].'" disabled><br><br>';

			$data .= '<label>Date of Joinning </label>';
			$data .= '<input type="date" name="joinning" placeholder="Date of Joinning" value = " ' .$row ['joinning'].'" disabled ><br><br>';

			$data .= '<label>Father/Spouse Name  :</label>';
			$data .= '<input type="text" name="fname" placeholder="Father/Spouse Name " value = " ' .$row ['fname'].'" disabled ><br><br>';

			$data .= '<label>Father/Spouse Mobile Number</label>';
			$data .= '<input type="number" name="fmobile" placeholder="Mobile Number" value = " ' .$row ['fmobile'].'" disabled ><br><br>';

			$data .= '<input type="submit"  value="submit" name="save"/><br>';
			
			$data .= '</form>';
			$data .= '<button onclick="editing()" value="Edit" name="edit" >Edit</button>&nbsp';

			$data .= '</div>';

			}

		}


	/*------------------------------------Querry For updating the databse ------------------------ */

	if(isset($_POST['username']) && $_POST['username']!="" && isset($_POST['old_teacher_id']) ) {
			
		$teacher_id = $_POST['teacher'];
		$old_teacher=$_POST['old_teacher_id'];
		$user = $_POST['username'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$gender	=$_POST['sex'];
		$bday=$_POST['birthdate'];
		$mnumber=$_POST['mobile'];
		$address=$_POST['address'];
		$d_join=$_POST['joinning'];
		$spouse=$_POST['fname'];
		$spousenumber=	$_POST['fmobile'];

		/*$delete_query = mysql_query("DELETE FROM `teacher` where `Teacher_ID` = '$old_teacher'");
		if($delete_query)
		{
			echo "Successfully Deleted";
		}
		else
		{
			echo "Unable Too Connnect".mysql_error();
		}*/

		//mysql_query("Insert Into `teacher` (`Teacher_ID`) VALUES ('22')");
			$update_query = mysql_query("UPDATE `teacher` SET  `Teacher_ID` = '$teacher_id' , `username` = '$user' ,`firstname` = '$fname',`lastname` = '$lname',`sex` = '$gender',`birthdate` = '$bday' , `mobile`='$mnumber',`address`='$address', `joinning`='$d_join',`fname`='$spouse',`fmobile`='$spousenumber' WHERE `Teacher_ID` = $old_teacher ");
		if($update_query)
		{
			echo "Successfully Updated";
		}
		else
		{
			echo "Unable To Connnect".mysql_error();
		}
	}	


?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"></style>
	<script src="jquery-1.11.3.min.js"></script> 
	<script type="text/javascript" href="script.js"></script>
	<script>
		function editing(){
    	$("input").prop("disabled", false);
		};
	</script>
</head>
<body>
<?php
	echo $data;

?>
</body>
</html>