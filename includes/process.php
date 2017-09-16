<?php
/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('attedance');

session_start();



/*-----------------------------Connectivity of sign up page with database------------------------------*/
/*-------inserting records-------------*/
if(isset($_POST['username']) && $_POST['username']!="" ) {
	if(isset($_POST['type']) == true && $_POST['type'] == "register"){
		$teacher_id = $_POST['teacher'];
		$user = $_POST['username'];
		$pass = $_POST['password'];	
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$gender	=$_POST['sex'];
		$bday=$_POST['birthdate'];
		$mnumber=$_POST['mobile'];
		$address=$_POST['address'];
		$d_join=$_POST['joinning'];
		$spouse=$_POST['fname'];
		$spousenumber=	$_POST['fmobile'];
		
	
$querry = mysql_query("INSERT INTO `teacher`(`Teacher_ID`,`username`,`password`,`firstname`,`lastname`,`sex`,`birthdate`,`mobile`,`address`,`joinning`,`fname`,`fmobile`,`teacher_image`) VALUES('$teacher_id','$user','$pass','$fname', '$lname','$gender','$bday','$mnumber','$address','$d_join','$spouse','$spousenumber', '".date("j-F-Y-h-i-s")."--" . basename($_FILES["fileToUpload"]["name"])."') " );
		
				$target_dir = "../content/uploads/images/teacher";
				      $target_file = $target_dir.date("j-F-Y-h-i-s")."--" . basename($_FILES["fileToUpload"]["name"]);
				      $uploadOk = 1;
				      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				   // Check if image file is a actual image or fake image
				    if(isset($_POST["submit"])) {
				      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				    echo "File is an image - " . $check["mime"] . ".";
				    $uploadOk = 1;
				     } else {
				    echo "File is not an image.";
				    $uploadOk = 0;
				     }
				  }
				   // Check if file already exists
				     if (file_exists($target_file)) {
				        echo "Sorry, file already exists.";
				        $uploadOk = 0;
				   }
				  // Check file size
				     //if ($_FILES["fileToUpload"]["size"] > 100000) {
				     //    echo "Sorry, your file is too large.";
				    //     $uploadOk = 0;
				   //}
				  // Allow certain file formats
				     if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPEG"
				     && $imageFileType != "gif" ) {
				      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				      $uploadOk = 0;
				    }
				  // Check if $uploadOk is set to 0 by an error
				      if ($uploadOk == 0) {
				      echo "Sorry, your file was not uploaded.";
				  // if everything is ok, try to upload file
				      } else {
				     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				       echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				       echo "Sorry, there was an error uploading your file.";
				    }
				  }  

		if ($querry) 
		{
					
			/*Redirecting to another page*/
			header('location:register.php');
															
		}
		else
			echo "Unable To connect ".mysql_error();

	}

	if(isset($_POST['type']) == true && $_POST['type'] == "del"){

		/*------------------------------------Remove Student ----------------------------------*/

		$sstudent_id = $_POST['stu_id'];
		$sstudent_fname = $_POST['stu_fname'];

		/*-------------------------------------querry for deleting row------------------------*/

		$delete_detail = "DELETE FROM student WHERE stu_id = '$sstudent_id' AND stu_fname = '$sstudent_fname'";

		echo mysql_query($delete_detail);
	}

}



	
/*---------------------------------------Admin Login User ID and pass--------------------------------*/
if(isset($_POST['admin_usernamelogin']) && $_POST['admin_usernamelogin']!="")
{
	
	$usern = $_POST['admin_usernamelogin'];
	$pass = $_POST['admin_passwordlogin'];

	if ($usern=="admin" && $pass == "password") {

		$_SESSION['admin_usernamelogin'] =$usern;
		header('location: ../admin_page.php');
	}
	else
		echo "Unable to login:";
}



/*-----------------------------Connectivity of student deails page with database------------------------------*/
/*-------inserting records of sudent in database-------------*/


if(isset($_POST['stu_id']) && $_POST['stu_id']!="" ) {
	if(isset($_POST['type']) == true && $_POST['type'] == "add"){

		$student_id = $_POST['stu_id'];
		$student_fname = $_POST['stu_firstname'];
		$student_lname = $_POST['stu_lastname'];
		$student_gender	=$_POST['stu_sex'];
		$student_bday=$_POST['stu_birthdate'];
		$student_mnumber=$_POST['stu_mobile'];
		$student_address=$_POST['stu_address'];
		$student_course=$_POST['stu_course'];
		$student_session=$_POST['stu_session'];
		$student_d_join=$_POST['stu_joinning'];
		$student_spouse=$_POST['stu_fname'];
		$student_fathernumber=	$_POST['stu_fmobile'];
		
		$querry = mysql_query("INSERT INTO `student`(`stu_id`,`stu_firstname`,`stu_lastname`,`stu_sex`,`stu_birthdate`,`stu_mobile`,`stu_address`,`stu_session`,`stu_course`,`stu_joinning`,`stu_fname`,`stu_fmobile`, `stu_image`) VALUES('$student_id','$student_fname', '$student_lname','$student_gender','$student_bday','$student_mnumber','$student_address','$student_session','$student_course','$student_d_join','$student_spouse','$student_fathernumber', '".date("j-F-Y-h-i-s")."--" . basename($_FILES["fileToUpload"]["name"])."') " );
		
		 
				      $target_dir = "../content/uploads/images/";
				      $target_file = $target_dir.date("j-F-Y-h-i-s")."--" . basename($_FILES["fileToUpload"]["name"]);
				      $uploadOk = 1;
				      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				   // Check if image file is a actual image or fake image
				    if(isset($_POST["submit"])) {
				      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				    echo "File is an image - " . $check["mime"] . ".";
				    $uploadOk = 1;
				     } else {
				    echo "File is not an image.";
				    $uploadOk = 0;
				     }
				  }
				   // Check if file already exists
				     if (file_exists($target_file)) {
				        echo "Sorry, file already exists.";
				        $uploadOk = 0;
				   }
				  // Check file size
				     //if ($_FILES["fileToUpload"]["size"] > 100000) {
				     //    echo "Sorry, your file is too large.";
				    //     $uploadOk = 0;
				   //}
				  // Allow certain file formats
				     if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPEG"
				     && $imageFileType != "gif" ) {
				      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				      $uploadOk = 0;
				    }
				  // Check if $uploadOk is set to 0 by an error
				      if ($uploadOk == 0) {
				      echo "Sorry, your file was not uploaded.";
				  // if everything is ok, try to upload file
				      } else {
				     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				       echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				       echo "Sorry, there was an error uploading your file.";
				    }
				  }  

		if ($querry) 
		{
					
			/*Redirecting to another page*/
			header('location:register.php');
															
		}
		else
			echo "Unable To connect ".mysql_error();

	}
	
	if(isset($_POST['type']) == true && $_POST['type'] == "del"){

		/*------------------------------------Remove Student ----------------------------------*/

		$sstudent_id = $_POST['stu_id'];
		$sstudent_fname = $_POST['stu_fname'];

		/*-------------------------------------querry for deleting row------------------------*/

		$delete_detail = "DELETE FROM student WHERE stu_id = '$sstudent_id' AND stu_fname = '$sstudent_fname'";

		echo mysql_query($delete_detail);
	}		
	
}
/*--------Attandance.php------------*/
/* ------Fetch Subject--------------*/
if(isset($_POST['fetchSub']) && $_POST['course']){
	$course = $_POST['course'];

	$data = mysql_query("SELECT * FROM `subjects` WHERE `Course` = '$course'");

	$res = "<select name='subject_id'>";
	while ($row = mysql_fetch_assoc($data)) {
		$res .= '<option value = "'.$row['Subject__ID'].'">'.$row['Subject_Name'].'</option>';
	}
	$res .= "</select>";
	echo $res;
}


?>