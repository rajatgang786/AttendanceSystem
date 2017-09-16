<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="remove_student_outer_div">
		
		<form method="post" action="includes/process.php">

			<label>Student Id:</label>
			<input type="text" placeholder="Student Id" name="stu_id"><br>
			<label>Student Father Name :</label>
			<input type="text" placeholder="Student FName" name="stu_fname">
			<input type="hidden" name="type" value="del"/>
			<button type="submit">Submit</button>


		</form>

	</div>

</body>
</html>