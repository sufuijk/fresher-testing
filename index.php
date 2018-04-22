<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fresher testing</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<div class="container">	
		<div class="row" id="content">	
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="left-page">
				
				<form action="showdata.php" method="POST" role="form" id="infoForm">
					<legend>Send us a Message</legend><img src="img/sendmail.png" alt="" width="50" height="50" id="icon-sender">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="">Your name</label>
									<input type="text" class="form-control" name="yourName" id="yourName" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="">Phone</label>
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="">Email address</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="">Company</label>
									<input type="text" class="form-control" name="company" id="company" placeholder="Company">
								</div>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="">Message</label>
									<textarea name="" class="form-control" id="message" cols="30" rows="3"></textarea>
								</div>		
							</div>	
						</div>
					</div>
				
					
				<button type="submit" class="btn btn-primary button-send">Send</button>
				</form>
			</div>
			<!-- end col-8 -->
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="right-page">
				<h3>Contact Information</h3>
				<div class="list-contact">
					<img src="img/gps.png" alt="" class="icon-contact"><p>360 King Street Feasterville, PA 19053</p>
					<img src="img/phone.png" alt="" class="icon-contact"><p>(800) 900-200-300</p>
					<img src="img/mail.png" alt="" class="icon-contact"><p>sufuijk@gmail.com</p>
					

				</div>
				<div class="list-social">
					<img src="img/twitter.png" alt="">
					<img src="img/linkedin.png" alt="">
					<img src="img/instagram.png" alt="">
				</div>
			</div>
			<!-- end col-4 -->

		</div>	
	</div>


	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>


</body>
</html>