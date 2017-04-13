

<html>
	<head>
		<link rel="stylesheet" href="css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
	</head>
	<body style="background-color:powderblue">
		<div class="container" style="margin-left:12%;margin-right:12%;	background-color:white;border:9px ridge red;width:850px">
			<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
				 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			<div class="text-right" >
	  <a href ="alumni.php"><strong>back</strong></a>
	  </div>
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's </h4> 
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
				<a href="alumni_form.php" class="btn btn-info" style="float:right;" role="button">Register</a>
			

			</div>
			</br>
			</br>
			</br>
			<hr>
			
		<table class="table table-striped">
			<caption style="text-align:center">Alumni Profile</caption>
			<tr>
				<th>Photo</th>
				<th>Name</th>
				<th>year</th>
				<th>Profile</th>
			</tr>
			
				
				<?php 
				$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
				$query = new MongoDB\Driver\Query([]);
				$cursor = $manager->executeQuery('chintamanrao.alumni', $query);
				$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
				foreach($cursor as $item){
					echo '<tr>';
					echo '<td><a href="#">Photo</a></td>';
					echo '<td>' .$item['Name'].'</td>';
					echo '<td>' . $item['year'] . '</td>';
				//	echo '<td><button onclick="myFunction()">View Profile</button>';

					echo '<td><a href="alumniprofiles.php?bid='.$item['_id'].'">View profile</a></td>';
					echo "</tr>";
					
				}
			?>

		</table>
		
		
	
	</html>
			
			