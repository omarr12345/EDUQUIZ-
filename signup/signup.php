<html>



<head></head>


<body style="background-color:blueviolet;">








<form  action=<?php echo $_SERVER['PHP_SELF'];?> method='post' style="margin-left:40%; font-size:20px;border:solid 1px;width:300px; border-radius:5%; background-color:gray;padding-left:10px; font-weight:bold;">
<h2> regestration form</h2>

<p> first name :</p>
<input required placeholder="Uname" type="text" name="fname" />

<p> second name :</p>
<input required placeholder="sname"type="text" name="lname" />

<p> email:</p>
<input required placeholder="mail"type="email" name="umail" />


<p> password :</p>
<input required placeholder="paaass"type="Password" name="pass" />
</br></br>


<select name="gender">

<option value="male">male</option>
<option value="female">female</option>

</select> </br> </br>


<select name="type of account">
<option value="admin">admin</option>
<option value="student">student</option>

</select>

<p>comment:</p>
<textarea rows="10" cols="35" maxlength="140" name="usercomment "></textarea> </br>
<input type="radio" name="gender" value="male"/> 
<button type="submit" name="action"> signup </button>



</form>

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

</body>
<?php
if(isset($_POST['action'])){
$n=$_POST['fname'];
$p=$_POST['pass'];
$i=$_POST['umail'];

$con=mysqli_connect("localhost","root","","gp");
$q=("insert into student(Name,Password,email) values('$n','$p','$i') ") ;
$result=mysqli_query($con , $q);

	if($result){
		
		
	header('location:http://localhost/gp-test/navbar/navbar.php');	
		
		}
	
	
	}




?>



</html>
