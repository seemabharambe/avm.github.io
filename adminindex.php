
<!DOCTYPE>		
<html>
<head>
<title>AVMS Login


</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



input[type=submit] {
  width: 100%;
  background-color: #FF0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}



input[type=submit]:hover {
  background-color: orange;
}

div {
  border-radius: 5px;
  background-color: #808000;
  padding: 20px;
}
	
	h3{
		text-align:center;
		padding:20px;
		font-size:bold;
	}
</style>

</head>
<body>		
<h3>   Apartment Visitor Management System (AVMS)</h3>

<div>
   <form action="" method="post" >
    <label for="fname">User Name</label>
    <input type="text" id="fname" name="user" placeholder="Your name..">

    <label for="lname">Password</label>
    <input type="password" id="lname" name="pass" placeholder="password..">

   
  
    <input type="submit" name="send" value="SIGNIN">
  </form>
</div>

</body>
</html>

						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						



<?php
if(isset($_POST['send']))
{
	include('config.php');
	session_start();
	
	$uname=$_POST['user'];
	$pass=$_POST['pass'];
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
	{
		//echo"success";
		
		$sql="select * from vadmin where uname='$uname' && pass='$pass' ";
		
		$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	
	
	//accessing uid from the user table
$row=mysqli_fetch_assoc($res);
	$uid=$row['uid'];
	$_SESSION['userid']=$uid;
		
	
	
	//echo$num;
	
		if($num)
			{
				$_SESSION['uname']=$uname; //session crEATED
				//echo"Login Successfully";
				header('Location:adminlogin.php');
			}
		else
			{
				echo"Invalid Username and Password";
			}
		
	
	}
	
	

	else
	{
		echo"failed to connect";
	}
}




?>
