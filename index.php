

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
		
		$sql="select * from vadmin where uname='$uname' && pass='$pass'";
		
		$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	
	
	//accessing uid from the user table
   

   $row=mysqli_fetch_assoc($res);
	$uid=$row['uid'];	
	
	
	
	
	//echo$num;
	
		if($num)
			{
				$_SESSION['uname']=$uname;       //session crEATED
				
				$_SESSION['userid']=$uid;
		
				
				//echo"Login Successfully";
				header('Location:dash.php');
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
