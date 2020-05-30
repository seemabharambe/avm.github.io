
<?php
include('config.php');

session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}
$conn=mysqli_connect($servername,$username,$password,$dbname);

$id=$_SESSION['userid'];         //according to uid  ,record will be display on dashboard.

if($conn)
{
$sql="select * from tablv  where uid='$id'";
$res=mysqli_query($conn,$sql);
$n=mysqli_num_rows($res);


				/*
						if($n>0)
						{
								while($row=mysqli_fetch_assoc($res))
								print_r($row);
								print("<br>");
		
						}
	
					else
						{
								echo"no record to display";
						}
			
			*/
  if($n==0)
  {
	  {
			echo"no record to display";
		}
  }
}
else
{
	echo"connection failed";
}


?>

<!DOCTYPE html>
<html lang="en">
<head><title>DASHBOARD</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet" media="all">
<style>


h2{
	text-align:center;
	font-size:bold;
	text-transform:uppercase;
	padding:40px;
}
.a1{
		float:right;
		background-color:blue;
		
}

.a2{
	
	margin-left:40%;
}

.srh{
	
	text:white;
	font-size:bold;
	
	float:right;
	
}

.dash{
	
	width:auto;
	height:auto;;
	background-color:purple;
	
}


</style>

</head>

<body>
<div class="aln">
<a href="index.php" style="font-size:24px;">
                               Apartment Visitor Management System (AVMS)
							  <button style="float:right;,padding:20px";><a style="float:right"; href="Logout.php">Logout</a></button>
</a>
</div>





<div class="dash">
<h2>DASHBOARD</h2>
</div>

</div>
                                

	
	<br><br><br>
	<div class="container">
	<table border=1 align="center" width="50%" text="center" class="table table-dark table-hover">

		<tr>
		
			<th>Sr.No</th>
			<th>visitor Name</th>
			<th>Mobile No</th>
			<th>Address</th>
			<th>Apartment</th>
			<th>Floor</th>
			<th>WhomtoMeet</th>
			<th>ReasontoMeet</th>
			<th>EnterDate</th>
			<th>Remark</th>
			<th>OutTime</th>
			
		</tr>
	
		
		 <?php
		 				$sr=1;
				      while($row=mysqli_fetch_assoc($res))
					  {
				 ?>
				 
			       <tr>
				 
					
						<td><?php echo $sr; ?></td>
				       <td><?php echo $row['vname'];?></td>
					   <td><?php echo $row['mno'];?></td>
					   <td><?php echo $row['address'];?></td>
						<td><?php echo $row['apt'];?></td>
						<td><?php echo $row['flr'];?></td>
						<td><?php echo $row['meet'];?></td>
						<td><?php echo $row['meetr'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['mark'];?></td>
						<td><?php echo $row['otime'];?></td>
						
						
				   </tr>
				
				<?php
					$sr++;
					  }
				 ?>
		
			
		
	</table>

</div>


	
</body>
</html>
		
	