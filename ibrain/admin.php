<?php
require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
.a{
  height: 300px;
  width: 50%;
  background-color: black;
  text-align: center;
  margin-top: 150px;
  margin-left: 300px;
  border-radius: 50px ;
  border:2px solid gray;
  box-shadow: 10px -10px 10px black;

}
.t1{
  color: white;
  font-size: 30px;
  font-family: bold;
}
.btn1{
  border-radius: 50px;
  width: 30%;
  background-color: yellow
}
.btn1:hover{
  background-color: orange;
}

.back{
  background-image: url(photo-1551076805-e1869033e561.jpg);
  background-repeat: no-repeat;
background-size: cover;
height: 700px;
width: 100%;
background-position: center center; 
}


</style>
</head>
<body>
<div class="back">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      
        <!-- <img src="photo-1551076805-e1869033e561.jpg"> -->
    <form method="POST">
<div class="a" >
  <span class="t1">Admin Log In</span><br><br>
  <span class="t2" style="color: white">UserName:
  <input type="text" name="AdminName" placeholder="UserName" style="margin-left: 20px;"></span><br><br><br>
  <span class="t2" style="color: white">Password:
  <input type="password"  placeholder="Password" name="AdminPassword" style="margin-left: 20px"></span><br><br><br> 
 <button name="signin" class="btn1" type="submit">Log In</button>
 <a href="">forgot password!</a>

</div>
</form>
  </div>
</div>
  </div>
</div>


<?php

if(isset($_POST['signin']))
 {
   $query="SELECT * FROM `admin_login` WHERE `UserName`='$_POST[AdminName]' AND `Password`='$_POST[AdminPassword]'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1)
  {
   session_start();
   $_session['adminId']=$_POST['AdminName'];
   header("location: adminpanel111.php");
  }
  // else{
  //   echo "(<script>alert('Incorect Password')</script>)";
  // }
}  

?>

</body>
</html>