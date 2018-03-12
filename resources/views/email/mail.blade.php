<html>
<head>
			<title>
				Contact Information
			</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<style>
						.blue-bg {
							background: #b3c2bf;
							background-color: #b3c2bf;
						}

			</style>
</head>
<body>
	<div class="jumbotron blue-bg">
		<div class="container">
			<div class="row col-md-8">
				<form>
					<div class="form-row">
										<h3>You Have a New Email</h3>
										<hr />
										<div class="form-group form-field">
											<label>Sender's Email</label> : {{ $from}}
										</div>
										<div class="form-group form-field">
											<label>Full Name</label> : {{ $name}}
										</div>
										<div class="form-group form-field">
											 {{ $subject}}
										</div>
										<div class="form-group form-field">
											<label>Message</label> : {{ $msgbody}}
										</div>
					</div>
				</form>
				<footer>
					<p>
						 Ankit Chandgadkar 2018
					</p>
				</footer>
			</div>
		</div>
	</div>


	<!--jquery-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
