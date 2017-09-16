<?php 
/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('attedance');
$col = "";
$col .= '<div id = "report_outer_div">';


$student_data = mysql_query("SELECT * FROM `student` WHERE `stu_course` = 'mca' ORDER BY stu_id DESC");

while ($stu = mysql_fetch_assoc($student_data)) {
	$stu_id = $stu['stu_id'];

		$col .= '<div id="report_inner_div">';
		$col .= '<div id="report_leftmost_div">'.$stu['stu_id'];
		$col .= '</div>';
		$col .= '<div id="report_left_div">'.$stu['stu_firstname'];
		$col .= '</div>';
		$col .= '<div id="report_center_div">'.$stu['stu_lastname'];
		$col .= '</div>';
			

	$query = mysql_query("SELECT * FROM subjects where course = 'MCA'");

	while ($row = mysql_fetch_assoc($query)) {
		$sub = $row['Subject__ID'];
		$q = mysql_query("SELECT * FROM student, attandance WHERE student.stu_id = attandance.stu_id AND attandance.sub_id = '$sub' AND student.stu_id = '$stu_id'");

		//$col .= "<h2>".$row['Subject_Name']."</h2>";
		$presents = 0;
		$total  = 0;
		while ($column = mysql_fetch_assoc($q)) {
			$total++;
			if($column['attandance'] == "P")
				$presents++;		
			
		}

		$col .= '<div id="report_right_div">'.$presents." / ".$total.'</div>';

	}
	
	$col .= '</div>';			 	
} 


$col .= '</div>';

/*
//$report = mysql_query("SELECT * FROM `student` INNER JOIN `attandance` ON 'student.stu_id'='attandance.stu_id'");
//$report = mysql_query("SELECT * FROM student INNER JOIN attandance ON student.stu_id=attandance.stu_id");
$report = mysql_query("SELECT * FROM student , attandance WHERE student.stu_id = attandance.stu_id");

//echo "$report";
while ($column = mysql_fetch_assoc($report)) {
	//print_r($column);
	
	
	$col .= '<div id="report_inner_div">';
	$col .= '<div id="report_leftmost_div">'.$column['stu_id'];
	$col .= '</div>';
	$col .= '<div id="report_left_div">'.$column['stu_firstname'];
	$col .= '</div>';
	$col .= '<div id="report_center_div">'.$column['stu_lastname'];
	$col .= '</div>';
	$col .= '<div id="report_right_div">'.$column['attandance'];
	$col .= '</div>';
	$col .= '</div>';

}
*/
echo $col;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="icon" type="text/css" href="images\3.jpg" type="image/gif" sizes="16*16">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="jquery-1.11.3.min.js"></script> 
 </head>
 <body>
 
 </body>
 </html>