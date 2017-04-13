
<html>
	<head>
		<link rel="stylesheet" href="css\bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
	</head>
	<body>
		<form action="" method="post">
		
		 <p>Sort according to: <select name="sort1">
								  <option value="open">open</option>
								  <option value="ST">SC</option>
								  <option value="ST">ST</option>
								  <option value="NT">NT</option>
								  <option value="DT">DT</option>
								  <option value="SBC">SBC</option>
								  <option value="OBC">OBC</option>
								</select> </p>
			<br>
			<input type="submit" value="Search" name="SearchB">

		</form>
		<?php
			if(isset($_POST['SearchB'])) {
				$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
				$sortcat=$_POST['sort1'];
				if($sortcat=="open"){
						$filter = [
							'category'=>'OTHER'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
								
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				if($sortcat=="SC"){
						$filter = [
							'category'=>'SC'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				if($sortcat=="ST"){
						$filter = [
							'category'=>'ST'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
					
				}
				if($sortcat=="NT"){
						$filter = [
							'category'=>'NT'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				if($sortcat=="DT"){
						$filter = [
							'category'=>'DT'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
								
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				if($sortcat=="SBC"){
						$filter = [
							'category'=>'SBC'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
								
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				if($sortcat=="OBC"){
						$filter = [
							'category'=>'OBC'
						];
						$options = [
							'projection' => [
								'name' => 1,
								'taluka' => 1,
								'mob' =>1,
								
							],	
							/*'sort' => [
								'_id' => 1
							],*/
						];
				}
				$query = new MongoDB\Driver\Query($filter, $options);
				$readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY);
				$cursor = $manager->executeQuery('chintamanrao.form_part1', $query, $readPreference);
				$cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
				echo '<table class="table table-hover">
						
						<caption>List of Students</caption>
						<tr>
							<th>Name</th>
							<th>Taluka</th>
							<th>Mob no</th>
							
						</tr>';
							foreach($cursor as $item){
								echo '<tr>';
								echo '<td> <a href="display.php?bid='.$item['_id'].'">' . $item['name'] . '</a></td>';
								echo '<td>' . $item['taluka'] . '</td>';
								echo '<td>' . $item['mob'] . '</td>';
								echo "</tr>";
							}

				echo '</table>';
			}
		?>
	</body>
</html>
