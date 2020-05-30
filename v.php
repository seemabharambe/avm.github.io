
<?php
include('config.php');

session_start();
if(!isset($_SESSION['uname']))
{
	header('Location:index.html');
}

if(isset($_POST['send']))
{
	
	$vname=$_POST['vname'];
	$mno=$_POST['mno'];
	$address=$_POST['address'];
	$apt=$_POST['apt'];
	$flr=$_POST['flr'];
	$meet=$_POST['meet'];
	$meetr=$_POST['meetr'];
	$date=$_POST['date'];
	$mark=$_POST['mark'];
	$otime=$_POST['otime'];
	
	
	
	$userid=$_SESSION['userid'];

$conn=mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
	$sql="insert into tablv(uid,vname,mno,address,apt,flr,meet,meetr,date,mark,otime)values('$userid','$vname','$mno','$address','$apt','$flr','$meet','$meetr','$date','$mark','$otime')";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			//echo"record inserted successfully";
			header('Location:dashboard.php');
		
		}
		
		else
		{
			echo"failed to insert recored";
		}
}
else
{
	echo"connection failed";
}




		
			
	//		if($res)
}

?>


<html>
<html lang="en">
<head>
		


  <title>New Visitor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet" media="all">
  
  <style>
  
		*{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

		form{
			text-align:center;
			padding:20px;
			
			
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
		
		
		
		
		
</style>

</head>
		
		
		
</head>

<body>

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
                                        <strong>Register</strong> New Visitor
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <p style="font-size:16px; color:red" align="center"> </P>
<div class="aln">
<a href="index.php" style="font-size:24px;" >
                               Apartment Visitor Management System (AVMS)
</a>
<div>	
		
		
		
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Visitor Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="visname" name="vname" placeholder="Visitor Name" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		
		 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Mobile Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="mobilenumber" name="mno" placeholder="Mobile Number" class="form-control" maxlength="10" required="true">
                                                    
                                                </div>
                                            </div>
		 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="address" rows="4" placeholder="Enter Visitor Address..." class="form-control" required="true"></textarea>
                                                </div>
                                            </div>
		
		 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Apartment no.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="apartment" name="apt" placeholder="Apartment no." class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Floor/Wing</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="floor" name="flr" placeholder="floor" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Whom to Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="whomtomeet" name="meet" placeholder="Whom to Meet" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Reason To Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="reasontomeet" name="meetr" placeholder="Reason To Meet" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"> date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="a" name="date"  class="form-control" required="">
                                                    
                                                </div>
                                            </div>
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Remark</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="reasontomeet" name="mark" placeholder="remark" class="form-control" required="true">
                                                    
                                                </div>
                                            </div>
		
		<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">OutTime</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="adm" name="otime"  class="form-control" >
                                                    
                                                </div>
                                            </div>
		
		
		
		  <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="send" id="submit" class="btn btn-primary btn-sm">Add
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
                        </div>
                        
                    </div>
</form>
</body>
</html>
