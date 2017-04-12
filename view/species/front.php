<div class="container-fluid">
	<table class="table table-hover">
	  <thead>
	    <tr class="active">
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
		</tr>
	  </thead>
	  </tbody>
	    <tr>
	    	<?php foreach ($patients as $patient){ ?>
	    	<tr class="success"><td> <a href="patient/edit/<?=$patient['id']?>"><?=$patient["name"];?></a></td>
	    		<td> <?=$patient["species"];?></td>
	    		<td> <?=$patient["status"];?></td>
	    		<td> <a href="patient/delete/<?=$patient['id']?>">Delete</a></td>
	    	</tr>
	    	<?php } ?>
	    </tr>
	</table>
	<a href="patient/create" class="btn btn-info">Toevoegen</a>
</div>