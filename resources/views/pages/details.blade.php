<!DOCTYPE html>
<html>
<head>
	<title>All Users Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		
<div class="border border-primary" style="width: 600px;">
	<h3><?php echo $users[$id]['name']; ?></h3>
	<div class="border border-secondary" style="width: 400px; margin: 30px 0px 0px 100px;">
	<table class="table">
	
<?php  
// show all the users data
	echo '<thead class="table table-dark">';
	echo '<tr>';
			echo '<th scope="col">User Info</th>';
			echo '<th scope="col">User Loc Info</th>';
	echo '</tr>';
	echo '</thead>';

	echo '<tbody>';

	echo '<tr>';

		echo '<tr>';
	echo '<td>'.$users[$id]['username'].'</td>';
	echo '<td>'.$users[$id]['address']['street'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$users[$id]['email'].'</td>';
	echo '<td>'.$users[$id]['address']['suite'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$users[$id]['phone'].'</td>';
	echo '<td>'.$users[$id]['address']['city'].'</td>';
		echo '</tr>';
		echo '<tr>';
	echo '<td>'.$users[$id]['website'].'</td>';
	echo '<td>'.$users[$id]['address']['zipcode'].'</td>';
		echo '</tr>';

		echo '<tr>';
	echo '<td>'.$users[$id]['company']['name'].'</td>';
	echo '<td>'.$users[$id]['company']['catchPhrase'].'</td>';
		echo '</tr>';

		echo '<tr>';
	echo '<td>'.$users[$id]['address']['geo']['lat'].'</td>';
	echo '<td>'.$users[$id]['address']['geo']['lng'].'</td>';
		echo '</tr>';

		echo '<tr>';
	echo '<td></td>';
	echo '<td><a href="/" ><button type="button" class="btn btn-primary">Go Back</button></a></td>';
		echo '</tr>';


	echo '</tr>';
	echo '</tbody>';


?>

	</table>

</div>
</div>

				
</div>

</body>
</html>
