<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style type="text/css">
	label{
		color:white;
		font-size:20px;
	}
</style>
</head>
<body>
	<body class="bg-danger">
<form method="POST" action="adddoc.php" enctype="multipart/form-data">
<div class="container">
	<div class="row">
	<div class="col-md-12">
	<h1>Add Doctor</h1>
	<div class="col-md-12">
		<label>DoctorName:</label><input type="text" name="name" class="form-control"><br>
	</div>
	<div class="col-md-12">
	    <label>City</label><input type="text" name="add" class="form-control"><br>
	</div>
	<div class="col-md-12">
	    <label>State</label><input type="text" name="state" class="form-control"><br>
	</div>
	<div class="col-md-12">
	    <label>specialization</label><input type="text" name="spec" class="form-control"><br>
	</div>
	<div class="col-md-12">
       <label>Contact no.</label><input type="number" name="con" class="form-control"><br>
   </div>
	<div class="col-md-12 text-center">
       <button class="btn btn-warning" type="submit">Add Doctor</button>
       <button class="btn btn-success" href="mainpage.php">Back to home</button>
   </div>
	</form>

</div>

</body>
</html>