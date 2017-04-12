<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<table class="table table-hover">
	    <tr class="active">
				<th>Naam</th>
				<th>Datum</th>
				<th>Maand</th>
				<th>Jaar</th>
		</tr>
	    <tr>
	    	<?php foreach ($birthdays as $birthday){ ?>
	    	<tr class="success"><td> <a href="birthday/update/<?=$birthday['id']?>"><?=$birthday["person"];?></a></td>
	    		<td> <?=$birthday["day"];?></td>
	    		<td> <?=$birthday["month"];?></td>
	    		<td> <?=$birthday["year"];?></td>
	    		<td> <a href="birthday/delete/<?=$birthday['id']?>">Delete</a></td>
	    	</tr>
	    	<?php } ?>
	    </tr>
	</table>
	<a href="birthday/create" class="btn btn-info">Toevoegen</a>
</div>
</body>
</html>