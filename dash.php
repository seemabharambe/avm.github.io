
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


.main{
	background-color:rgba;
	width:100%;
	height:280px;
	float:left;
padding:20px;
	text-align:center;
	box-sizing: border-box;
}


.menu{
	width:25%;
float:left;

}
	
.pic{
	width:75%;
	float:left;
	background-position: fixed;
	background-size:cover;
	background-repeat:no-repeat;
}


</style>

</head>

<body>



<div class="aln">
<a href="index.php" style="font-size:24px;">
              <strong>   Apartment Visitor Management System (AVMS)</strong>
 <a href="adminindex.php" target="_blank" style="float:right;"><B>ADMIN</B></a>
</a>
</div>
	
<div class="main">

<div class="menu">
<nav class="sidebar">
<nav class="navbar bg-light ">

  <ul class="list-unstyled navbar__list">
    

 <li class="nav-item">
      <a class="nav-link" href="dashboard.php" style="color: blue">
        <i class="fa fa-user"></i>Dashboard</a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="v.php" style="color: blue">
                     <i class="fa fa-user"></i>New Visitor</a>
     </li>



    <li class="nav-item">
      <a class="nav-link" href="search.php" style="color: blue">
        <i class="fa fa-user"></i>Visitor B/W Dates</a>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="logout.php" style="color: blue">
        <i class="fa fa-user"></i>Logout</a>
    </li>

  </ul>
</nav>
</nav>
</div>
             
	<div class="pic">
				<img src="images/visit1.jpg" alt="apartment">
	</div>
	

</div>

</div>
</html>
</body>








