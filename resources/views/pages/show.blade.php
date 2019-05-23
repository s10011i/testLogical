<!DOCTYPE html>
<html>
<head>
	<title>All Users Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		
<div class="border border-primary" style="width: 600px;">
	<h3>All Users</h3>
	<div class="border border-secondary" style="width: 400px; margin: 30px 0px 0px 100px;">
	<table class="table">
	
<?php  
// show all the users data
foreach ($users as $user) {
	echo '<thead class="table table-dark">';
	echo '<tr>';
			echo '<th scope="col">Users Info</th>';
			echo '<th scope="col">Users Loc Info</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';

	echo '<tr>';

		echo '<tr>';
	echo '<td>'.$user['name'].'</td>';
	echo '<td>'.$user['address']['street'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$user['username'].'</td>';
	echo '<td>'.$user['address']['suite'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$user['email'].'</td>';
	echo '<td>'.$user['address']['city'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$user['phone'].'</td>';
	echo '<td>'.$user['address']['zipcode'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td></td>';
	echo '<td><a href="/details/'.($user['id'] - 1). '  " ><button type="button" class="btn btn-primary">Details</button></a></td>';
		echo '</tr>';


	echo '</tr>';
	echo '</tbody>';

}

?>

	</table>

</div>
</div>

				
</div>

</body>
</html>
