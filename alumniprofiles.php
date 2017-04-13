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
				<button onclick="myFunction()">Click me</button>

				<?php 
				$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
				$query = new MongoDB\Driver\Query([]);
				$cursor = $manager->executeQuery('chintamanrao.alumni', $query);
				$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
				foreach($cursor as $item){
					echo '<tr>' .$item['_id'].'</tr></br>';
				//	echo '<tr><a href="#">Photo</a></td>';
					echo '<tr>' .$item['Name'].'</tr></br>';
					echo '<tr>' . $item['year'] . '</tr></br>';
				//	echo '<tr><a href="alumniprofiles.php?bid='.$item['_id'].'">View profile</a></tr>';
						
				}
			?>

		</table>
		
		
	
	</html>
			