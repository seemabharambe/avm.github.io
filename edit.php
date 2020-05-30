<?php
include('config.php');
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}



$uid=$_GET['tid'];

$conn=mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	//echo"success";
	$sql="select* from tablv where id='$uid'";
	$res=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_assoc($res);
	//print_r($row);
}

else
{
	echo"failed to connect";
}

?>



<html>
<head>
		


  <title> Visitor Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  
  <style>
  
		*{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

		
		
		h2{
			text-align:center;
			padding:20px;
		}
		
		table{
			
			height:50%;
		}
		
		
		.s1{
			text-align:center;
		btn-color:green;
		}
		
	.aaa{
		margin-left:400px;
		padding:15px;
	}	
		
		
		
</style>

</head>
	

<body>
<a  class="aaa" href="index.php" style="font-size:24px;">
                               Apartment Visitor Management System (AVMS)
</a>
<div class="container">

<h2><b>Add details of Visitor</b></h2>
		<form method="POST" >
		
		<div class="table-reponsive-sm">
		
		<table class="table table-bordered ">
		
		<tr>
					<th>Visitor Name</th>
					<td><input type="text" name="vname" value="<?php echo $row['vname']?>"></td>
			
		</tr>
		
		
		<tr>
					<th>Mobile No</th>
					<td><input type="number" name="mno" value="<?php echo $row['vname']?>"></td>
					
		</tr>
		
		<tr>
					<th>Address</th>
					<td><input type="text" name="address" value="<?php echo $row['address']?>"></td>
					
		</tr>
		
		<tr>
					<th>Apartment</th>
					<td><input type="text" name="apt" value="<?php echo $row['apt']?>"></td>
					
		</tr>
		
		
		<tr>
					<th>Floor</th>
					<td><input type="number" name="flr" value="<?php echo $row['flr']?>"></td>
					
		</tr>
		
		<tr>
					<th>WhomtoMeet</th>
					<td><input type="text" name="meet" value="<?php echo $row['meet']?>"></td>
					
		</tr>
		
		<tr>
					<th>ReasontoMeet</th>
					<td><input type="text" name="meetr" value="<?php echo $row['meetr']?>"></td>
					
		</tr>
		
		
		<tr>
					<th>Enter date</th>
					<td><input type="date" name="date" value="<?php echo $row['date']?>"></td>
				
		</tr>
		
		
		<tr>
					<th>Remark</th>
					<td><input type="text" name="mark" value="<?php echo $row['mark']?>"></td>
					
		</tr>
		
		<tr>
					<th>OutTime</th>
					<td><input type="text" name="otime" value="<?php echo $row['otime']?>"></td>
					
		</tr>
		
	
		</table>
		<div class="s1">
		<tr><td><input type="submit" name="send" value="UPDATE"></td></tr>
		</div>
</form>
</div>
</div>
</body>
</html>


<?php
if(isset($_POST['send']))
{


	$nvname=$_POST['vname'];
	$nmno=$_POST['mno'];
	$naddress=$_POST['address'];
	$napt=$_POST['apt'];
	$nflr=$_POST['flr'];
	$nmeet=$_POST['meet'];
	$nmeetr=$_POST['meetr'];
	$ndate=$_POST['date'];
	$nmark=$_POST['mark'];
	$notime=$_POST['otime'];
	
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
	{
		//echo"success";
		$sql="update tablv set vname='$nvname',mno='$nmno',apt='$napt',flr='$nflr',meet='$nmeet',
		meetr='$nmeetr',date='$ndate',mark='$nmark',otime='$notime' where id='$uid'";
	
		$res=mysqli_query($conn,$sql);
		
		if($res)
		{
		//echo"updated ";
		header('Location:adminlogin.php');
			
		}
		else
		{
			echo"unable to update";
		}
	}
	
	
	
	
	else
	{
		echo"failed to connect";
	}
}


?>
