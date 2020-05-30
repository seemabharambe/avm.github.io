<!DOCTYPE>

<html>
<html lang="en">
<head>
<title>bwdatesreport</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet" media="all">
</head>

</head>

<body>

 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Between</strong> Dates Reports
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="sdetails.php" target="_blank">


							
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="fromdate" name="fdate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="todate" name="todate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
							
							
						<p style="text-align: center;"><button type="submit" name="send" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>	
							
							
							</form>
							
							 </div>
                </div>
            </div>
        </div>
   </div>
    </div>
</body>
</html>



















