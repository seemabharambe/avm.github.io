<?php
include('config.php');
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}


$id=$_GET['tid'];




$conn=mysqli_connect($servername,$username,$password,$dbname);


if($conn)
	
	{
		$sql="delete from tablv where id='$id'";
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
			header('Location:adminlogin.php');
			
		}
		
		else
		{
			echo"Unable to delete record";
		}
	}

else
	{
			echo"connection failed";
	}





?>