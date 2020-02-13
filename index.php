<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">

		</div>
		<div class="col-md-6 col-md-push-3">
			<div class="booking-form ">
				<form>
					<div class="form-group">
						<span class="form-label">Your Destination</span>
						<input class="form-control" type="text" placeholder="Enter a destination or hotel name">
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Check In</span>
								<input type="date" min="<?php echo date("Y-m-d", strtotime("now")) ?>" value="<?php echo date("Y-m-d", strtotime("now")) ?>" class="form-control" required>
								<!-- <input type="date" id="start" name="trip-start" value="2020-02-13" min="2020-03-13"> -->
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Check out</span>
								<input class="form-control" type="date" min="<?php echo date("Y-m-d", strtotime(" +1 day")); ?>" value="<?php echo date("Y-m-d", strtotime(" +1 day")); ?>" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<span class="form-label">Rooms</span>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<span class="select-arrow"></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<span class="form-label">Adults</span>
								<select class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<span class="select-arrow"></span>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<span class="form-label">Children</span>
								<select class="form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
								<span class="select-arrow"></span>
							</div>
						</div>
					</div>
					<div class="form-btn">
						<button class="submit-btn">Check availability</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</body>

</html>