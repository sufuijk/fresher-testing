<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fresher testing</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		.info{
			margin-top: 20px;
			border:  1px solid black;
			padding-bottom: 30px;
			padding-left: 30px;
		}
		.header{
			position: absolute;
			font-weight: bold;
		}
		.infomation{
			margin-left: 120px;
		}
		.message{
			margin: 50px 0px;
		}
		#title{
			color: #2E75B5;
		}
		a{
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<div class="container">	
		<div class="row">
			<div class="col-md-8 col-lg-8 info">
				<h3 id="title"><b>Thank you for contacting us</b></h3>
				<p class="message">We will be back in touch with you within on business day using the information you just provided below:</p>
					<div class="header">
						<p>Name:</p>
						<p>Phone:</p>
						<p>Email Address:</p>
						<p>Company:</p>
					</div>
					<div class="infomation">
						<p><?php echo $_POST["yourName"]?></p>
						<p><?php echo $_POST["phone"]?></p>
						<p><a href="#"><b><?php echo $_POST["email"]?></b></a></p>
						<p><?php echo $_POST["company"]?></p>
					</div>
					
			</div>
		</div>
	</div>


	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>


</body>
</html>