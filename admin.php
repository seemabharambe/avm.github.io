

<?php
include('config.php');
session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}
	
?>



<?php
if(isset($_POST['send']))
{

	
	 $aname=$_POST['aname'];
	$uname=$_POST['uname'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$date=$_POST['date'];
$uid=$_POST['userid'];
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn)
{
		
	$sql="insert into vadmin(uid,aname,uname,mno,email,pass,date)values('$uid','$aname','$uname','$mno','$email','$pass','$date')";
	
	$res=mysqli_query($conn,$sql);
	
	 if($res)
	 {
		//echo"admin registered successfully";
		header('Location:index.php');
	}
	else
	{
		echo"not registered";
	}
	
}	
	
	else
	{
		echo"failed";
	}
	
	
	
}



?>





<html>
<html lang="en">
<head>

	<title>Admin Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet" media="all">
  
	
	</head>

<body class="animsition">
    <div class="page-wrapper">
	
	<div class="page-container">
	 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update</strong> Admin Profile
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> </P>
<div class="aln">
<a href="index.php" style="font-size:24px;" >
                               Apartment Visitor Management System (AVMS)
</a>
</div>

	
			<div class="row form-group">
                       <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">uid</label>
                           </div>
                        <div class="col-12 col-md-9">
                  <input type="text" id="adminname" name="uid" class="form-control" required="">
                                                    
                      </div>
               </div>
	
	
		

	
	
			<div class="row form-group">
                       <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Admin Name</label>
                           </div>
                        <div class="col-12 col-md-9">
                  <input type="text" id="adminname" name="aname" class="form-control" required="">
                                                    
                      </div>
               </div>
	
	
		
			<div class="row form-group">
                       <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">User Name</label>
                           </div>
                        <div class="col-12 col-md-9">
                  <input type="text" id="adminname" name="uname" class="form-control" required="">
                                                    
                      </div>
               </div>
	
	
	
	
	
	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Mobile Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobilenumber" name="mno" class="form-control" maxlength="10"  required="">
                                                    
                                                </div>
                                            </div>
	
	
	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Email-Id</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="mobilenumber" name="email" class="form-control" maxlength="20"  required="">
                                                    
                                                </div>
                                            </div>
	
	
	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="mobilenumber" name="pass" class="form-control" maxlength="10"  required="">
                                                    
                                                </div>
                                            </div>
	
	<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Admin Registration date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="adminregdate" name="date"  class="form-control" required="">
                                                    
                                                </div>
                                            </div>
	
	
	
	<div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="send" id="submit" class="btn btn-primary btn-sm">Register
                                        </button></p>	
	</div>
	</form>
</div>
</div>
</div>


</body>

</html>
