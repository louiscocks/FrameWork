<!DOCTYPE html>
<html>
<head>
	<title>Updaten</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1>Dit is verjaardag updaten</h1>
	<form action="<?../index?>" method="post">
	  <div class="form-group">
		<p>Person</p><input type="text" name="person">
		<p>Day</p><input type="text" name="day">
		<p>Month</p><input type="text" name="month">
		<p>Year</p><input type="text" name="year">
	  </div>	
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
</body>
</html>