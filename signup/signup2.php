<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style2.css" rel="stylesheet"/>

</head>

<body>
<div style="height:50px; width:1000 px; background-color:white; ">

<img src="eduquiz.png" style="margin-right:auto; margin-left:auto;"/>





</div>
<div id="background-wrap">
    
	<div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>

	</div>

<div >


<form  action=<?php echo $_SERVER['PHP_SELF'];?> method='post'  style=" margin-top:70px;margin-left:40%; font-size:20px;font-family:bold;font-weight:large ;border:dotted 3px;width:300px; border-radius:5%; background-color: gray;padding-left:10px; font-weight:bold;">
<h2> Regestration form</h2>

<p> First name :</p>
<input required placeholder="Uname" type="text" name="fname" style="height:25px; font-faily:bold; font-size:20px;" />

<p> Secondecond name :</p>
<input required placeholder="sname"type="text" name="lname" style="height:25px; font-faily:bold; font-size:20px;"/>

<p> Email:</p>
<input required placeholder="mail"type="email" name="umail" style="height:25px; font-faily:bold; font-size:20px;"/>


<p> Password :</p>
<input required placeholder="paaass"type="Password" name="pass"style="height:25px; font-faily:bold; font-size:20px;" />
</br></br>


<select name="gender">

<option value="male"style="height:25px; font-faily:bold; font-size:20px;">Male</option>
<option value="female"style="height:25px; font-faily:bold; font-size:20px;">Female</option>

</select> </br> </br>


<select name="typeofaccount">
<option value="admin"style="height:25px; font-faily:bold; font-size:20px;">Admin</option>
<option value="student"style="height:25px; font-faily:bold; font-size:20px;">Student</option>

</select>

<p>Comment:</p>
<textarea rows="3" cols="35" maxlength="140" name="usercomment " style="overflow:hidden;"></textarea> 
 
<button type="submit" name="action" style="margin-left:42% ;margin-bottom:5px;font-weight:bold;"> Signup </button>



</form>


</div>



</body>

<?php
if(isset($_POST['action'])){
$n=$_POST['fname'];
$p=$_POST['pass'];
$i=$_POST['umail'];
$t=$_POST['typeofaccount'];
$con=mysqli_connect("localhost","root","","gp");
$q=("insert into student(Name,Password,email,gender) values('$n','$p','$i','$t') ") ;
$result=mysqli_query($con , $q);

	if($result){
		
		
	header('location:http://localhost/EDUQUIZ/index.html');	
		
		}
	
	
	}




?>


</html>