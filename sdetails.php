
<?php
include('config.php');
session_start();


if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}






if(isset($_POST['send']))
{
$fdate=$_POST['fdate'];
	$todate=$_POST['todate'];


$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
//echo"success";
	$sql="select * from tablv where date between '$fdate' and '$todate'";
		
		$res=mysqli_query($conn,$sql);
	
		$num=mysqli_num_rows($res);
	
	//echo $num;
	
}
else{
	echo"failed";
}




}	
 
	 


?>



<!DOCTYPE html>
<html lang="en">
<head><title>Visitor-Details</title>

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
	font-size:bold;

}


.t2{
	
}


</style>

</head>

<body>
<div class="aln">
<a href="index.php" style="font-size:24px;">
                               Apartment Visitor Management System (AVMS)
</a>
</div>



<h2>Visitor-Details between Dates </h2><br><br>





<hr />

	<div class="t2">
		<table border=1 align="center" width="50%" text="center" class="table table-dark table-hover">
		<tr>
			
			<th>Sr.No</th>
			<th>visitor Name</th>
			<th>Mobile No</th>
			<th>Address</th>
			<th>WhomtoMeet</th>
			
			
			
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
						<td><?php echo $row['meet'];?></td>
						
					</tr>
				
				<?php
						$sr++;
					  }
				 ?>
		
			
		
	</table>
</div>





	
</body>
</html>
		
	