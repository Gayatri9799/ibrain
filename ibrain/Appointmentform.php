<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style type="text/css">
 .fullbackground{
	height: 900px;
	width: 100%;
	background-color: #123456;
  }
  .panel{
  	margin-left: 150px;
  }
  form{
  	background-color: gray;
  	width: 150%;
  	height: 800px;
  }
  .form-group{
  	width: 80%;
  	padding-left: 20px;
  }
  
</style>
<body>
<div class="fullbackground">
	<div class="container">
		<div class="row col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h1>Appointment Form</h1>
				</div>
				<form action="connection1.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" name="firstName" class="form-control" id="firstName" />
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastName" class="form-control" id="lastName" />
					</div>
					<div class="form-group">
						<label for="emai">Gender</label>
					
					<div>
						<label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
						<label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
						<label for="Other" class="radio-inline"><input type="radio" name="gender" value="o" id="Other">Others</label>
					</div>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" />
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" />
					</div>
					<div class="form-group">
						<label for="date">Appointment Date</label>
						<input type="date" class="form-control" id="date1" name="date1" />
					</div>
					<div class="form-group">
						<label for="time">Appointment Time</label>
						<input type="time" class="form-control" id="time1" name="time1" />
					</div>
					<div class="form-group">
						<label for="text">Doctor Name</label>
						<input type="text" class="form-control" id="doctortext" name="docname" />
					</div>
					<input type="submit" class="btn btn-primary" name="btnsubmit">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

</html>


