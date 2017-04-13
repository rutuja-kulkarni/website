<?php

?>
<html>
	<head>
		<link rel="stylesheet" href="css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
	</head>
	<body style="background-color:#000033">
		<div class="container" style="margin-left:12%;margin-right:10%;	background-color:#9999ff;border:9px ridge red;width:1300px">
			<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
				 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's </h4> 
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
				<a href="login_try.php" class="btn btn-info" style="float:right;" role="button">Add new</a>

			</div>
			</br>
			</br>
			</br>
			<hr>
			
		<table class="table table-striped">
			<caption style="text-align:center">Junior College Faculty Profile</caption>
			<tr>
				<th>Photo</th>
				<th>Designation</th>
				<th>Email-ID</th>
				<th>Contact</th>
				<th>Profile</th>
			</tr>
			<?php 
				$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
				$query = new MongoDB\Driver\Query([]);
				$cursor = $manager->executeQuery('chintamanrao.faculty', $query);
				$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
				foreach($cursor as $item){
					echo '<tr>';
					echo '<td><a href="#">Photo</a></td>';
					echo '<td>' .$item['designation'].'</td>';
					echo '<td>' . $item['email'] . '</td>';
					echo '<td>' . $item['contact'] . '</td>';
					echo '<td><a href="facultyprofiles.php?bid='.$item['_id'].'">View profile</a></td>';
					echo "</tr>";
					/*echo '<tr>';
					echo '<td><a href="#">Photo</a></td>';
					echo '<td>' .$item['designation'].'</td>';
					echo '<td>' . $item['email'] . '</td>';
					echo '<td>' . $item['contact'] . '</td>';
					echo "<form action='facultyprofiles.php' id='form' method='post'>";
					echo "<td><a>View profile</a></td>";
					echo "<input type='hidden' value=".$item['_id']." name='id'/>";
					echo "</form>";
					echo "</tr>";*/
				}
			?>
		</table>
		</div>
	</body>
</html>
