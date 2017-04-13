
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
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4></br></br></br>
		<form action="" method="post">
	<div class="text-center">			
			<label>Search by year</label>
			<body onload="loadAgeSelector()">
<select id="yearselect" name="syear"></select>
<script>
function loadAgeSelector()
{
var startyear = 1960;
var endyear = new Date().getFullYear();
for (var i = startyear;i<=endyear;i++){
    node=document.createElement("Option");
    textnode=document.createTextNode(i);
    node.appendChild(textnode);
    document.getElementById("yearselect").appendChild(node);
}
}
</script>
</body></br></br>
</div>
<div class="button" style="text-align:center">
				
				 <button type="submit" name="search" class="btn btn-info">search</button></br>
			</div>
			</div>
			</form>
			</br>
			</br>
			</br>
			<hr>
			
			
			
			<?php
if(isset($_POST['search'])) {
		$syear=$_POST["syear"];
$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$filter = [
							'year'=>$syear
						];
						$options = [
							'projection' => [
								'Name' => 1,
								'email' => 1,
								'mobile' =>1,
								
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];

				
				$query = new MongoDB\Driver\Query($filter, $options);
				$readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY);
				$cursor = $manager->executeQuery('chintamanrao.alumni', $query, $readPreference);
				$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
				echo '<table class="table table-hover">
						
						<caption>List of Students</caption>
						<tr>
							<th>Name</th>
							<th>email</th>
							<th>Mob no</th>
							
						</tr>';
							foreach($cursor as $item){
								echo '<tr>';
								echo '<td>' . $item['Name'] . '</td>';
								echo '<td>' . $item['email'] . '</td>';
								echo '<td>' . $item['mobile'] . '</td>';
								echo "</tr>";
							}

				echo '</table>';
		
/*$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter=array();
$filter = ['year' => $syear];
$options = [
   'projection' => ['_id' => 1],
];
$query = new MongoDB\Driver\Query($filter, $options);
$rows = $manager->executeQuery('chintamanrao.alumni', $query); // $mongo contains the connection object to MongoDB
foreach($rows as $r){
 print_($r);
}
			
		$filter = [
    'year' => $syear,
    ];

$options = [
    /* Only return the following fields in the matching documents */
    
    /* Return the documents in descending order of views 
   
];

$query = new MongoDB\Driver\Query($filter, $options);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY);
$cursor = $manager->executeQuery('chintamanrao.alumni', $query, $readPreference);

foreach($cursor as $document) {
    var_dump($document);
}		

               

				
		/*		foreach($cursor as $item){
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