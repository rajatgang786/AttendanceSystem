<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="remove_teacher_outer_div">
		
		<form method="post" action="includes/process.php">

			<label>Teacher Id:</label>
			<input type="text" placeholder="Teacher Id" name="teacher_id"><br>
			<label>User Name :</label>
			<input type="text" placeholder="User Name" name="user_name">
			<input type="hidden" name="type" value="del"/>
			<button type="submit">Submit</button>


		</form>

	</div>

</body>
</html>