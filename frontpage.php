<?php /*Session for teachers*/
  session_start();

  $_SESSION["username"] = "";
  session_destroy();
  
 ?>

 <?php 
 /*Session for teachers*/
  session_start();

  $_SESSION["admin_usernamelogin"] = "";
  session_destroy();
  
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
  <title> CDAC Attendence System </title>
  <link rel="icon" type="text/css" href="images\3.jpg" type="image/gif" sizes="16*16">
  <link rel="stylesheet" type="text/css" href="styles.css"> 
  <script src="jquery-1.11.3.min.js"></script> 
  <script type="text/javascript" href="script.js"></script>
  
</head>
<body >  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
   
  </ul>
</div>
<div id="outer_div">
<div id="border" >
  <div class="grid">
  <script>
    /*Random background color*/

//Enter list of bgcolors:
var bgcolorlist=new Array("#DDDD00" ,"#000000","#1A0000","#330000", "#4C0000","#660000", "#800000", "#990000", "#B20000", "#CC0000", "#E60000", "#FF0000","#FF1919","#FF3333","#FF4D4D","#FF6666","#FF8080","#FF9999","#FFB2B2","#FFCCCC","#FFE6E6","#FFFFFF","#000000",  "#050F1A",  "#0A1F33",  "#0F2E4C",  "#143D66",  "#1A4C80",  "#1F5C99",  "#246BB2",  "#297ACC",  "#2E8AE6",  "#3399FF","#47A3FF","#5CADFF","#70B8FF","#85C2FF","#99CCFF","#ADD6FF","#C2E0FF","#D6EBFF","#EBF5FF","#FFFFFF","#000000",  "#0A0500",  "#140A00",  "#1F0F00", "#291400", "#331A00", "#3D1F00", "#472400", "#522900",  "#5C2E00",  "#663300", "#754719","#855C33","#94704D","#A38566","#B29980","#C2AD99","#D1C2B2","#E0D6CC","#F0EBE6",
"#FFFFFF"
)
function setBack(){
    document.getElementById("border").style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]

}
setInterval(setBack, 2000);

  </script>
    <h1 id="text">Time For Attendance</h1>
    </div>
  </div>
  <div id="register">
    
     
        <div id="login_div">
          <img id="login_img" src="images/login (2).jpg" alt="Login" onclick="function(login)"> 
         <!--<button type="login_button">Log In </button>-->
        </div>
       <!-- <div id="sign_div">
         <a href="signup.php"> <img id="signup_img" src="images/sign.jpg" alt="SignUp"> </a>
        </div> -->

        <!--  *************************** Admin Div *********************************** -->
              <div id="admin_div">

                <div id="admin_image">
                    <img src="images/admin.jpg" id="admin_img" alt="Admin Login">
                  
                </div>  

             </div>  
  </div>
  <script>
$(document).ready(function(){
    $("#login_img").click(function(){
        $("#teacher_login").fadeIn();
    });
});
$(document).ready(function(){
    $("#admin_img").click(function(){
        $("#admin_login").fadeIn();
    });
});
</script>



<div id="login_box">

  <form action="attandance.php" method="post"> 
    <div id="teacher_login" >
      <label id= "Teacher_login_text">Teacher's Login</label><br><br>
      <label>User Name :</label>&nbsp&nbsp&nbsp
      <input type="text" placeholder="User Name" name="usernamelogin" required/><br><br>
      <label> Password :</label>&nbsp&nbsp&nbsp
      <input type="password" placeholder="Password" name="passwordlogin" required/><br><br>
     <input id="submit_button" type="submit" value="Submit"></input>
    </div>
    </form>

        <!-- ****************************Admin Login ******************-->
  <form action="includes/process.php" method="post">
    <div id="admin_login" >
      <label id= "Teacher_login_text">Administrator Login</label><br><br>
      <label>Admin Name :</label>&nbsp&nbsp&nbsp
      <input type="text" placeholder="Admin Name" name="admin_usernamelogin" required/><br><br>
      <label> Password    :</label>&nbsp&nbsp&nbsp
      <input type="password" placeholder="Password" name="admin_passwordlogin" required/><br><br>
      <input id="submit_button" type="submit" value="Submit"></input>
    </div>
    </div>
    </form>
  </div>

</body>
</html>
