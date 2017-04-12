<!DOCTYPE html>
<html>
<head>
	<title>Toeoegen</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 class="text-info">Dit is verjaardag toevoegen</h1>
	<form action="createSave" method="post">

	  <div class="form-group">
		<label class="text-success">Person</label><br>
		<input type="text" name="person"><br>
      </div>

      <div class="form-group">
		<label class="text-success">Day</label><br>
		<input type="text" name="day"><br>
      </div>

      <div class="form-group">
		<label class="text-success">Month</label><br>
		<select class="form-control" id="sel1">
        <option>Januari</option>
        <option>Februari</option>
        <option>Maart</option>
        <option>April</option>
        <option>Mei</option>
        <option>Juni</option>
        <option>Juli</option>
        <option>Augustus</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
        </select>
		<input type="text" name="month"><br>
      </div>

      <div class="form-group">
		<label class="text-success">Year</label><br>
		<input type="text" name="year"><br>
	  </div>

		<button type="submit" class="btn btn-info">Submit</button>

	</form>
</div>
</body>
</html>