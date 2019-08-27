<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Portal for the Student Organizations and Activities</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		.container{
margin: auto;
padding: 10px;
box-shadow: 5px 7px 18px 8px #888888;
border-radius: 12px;
width: 350px;
 
		}
		.form-group{
			
  padding: 10px;
border-style: none;
  width: auto;
		}

		h4{
			font-family: arial;
			text-indent: 2px;	
		}
		input{
			border-style: none;
			box-shadow: 3px 1px 5px 1px #888888;
border-radius: 1px;
		}
		button{
		border-style: none;
			box-shadow: 3px 1px 5px 1px #888888;
border-radius: 1px;	
		}
	</style>
</head>
<body style="background-image:url('images/a.jpg')">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
				
				<img src="images/indexhead.jpg" width="100%">
				
				</div>
				<br>
				<br>
				<div class="panel-body">
					<form role="form" action="login.php" method="POST">
						<fieldset>
							<div class="form-group">
						<input class="form-control" placeholder="Username" name="username" type="text" >
							
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<input type="submit" name="submit" value="Login" class="btn btn-primary">
							</fieldset>
					</form>

				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
