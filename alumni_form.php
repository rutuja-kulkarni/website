<?php

if(isset($_POST['add_al'])) {
		$photo=$_POST["photo"];
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $degree=$_POST["degree"];
		$year=$_POST["year"];
		$designation=$_POST["designation"];
		$country=$_POST["country"];
		$state=$_POST["state"];
		$city=$_POST["city"];
		$achievements=$_POST["achievements"];
		$mobile=$_POST["mobile"];
		$email=$_POST["email"];

        //echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('chintamanrao.alumni', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['photo'=>$photo, 'Name' =>$name, 'gender' =>$gender, 'degree'=>$degree, 'year'=>$year, 'designation'=>$designation, 
		 'country'=>$country, 'state'=>$state, 'city'=>$city, 'achievements'=>$achievements, 'mobile'=>$mobile,'email'=>$email]);
        $manager->executeBulkWrite('chintamanrao.alumni', $bulk);
    } 
   
?>




<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8"/>
	  <title>Alumni Form</title>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css\bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="js\bootstrap.min.js"></script>
	</head>
	<body style="background-color:powderblue">
		<div class="container" style="margin-left:8%;margin-right:10%;background-color:white">
			<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
					 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			 <div class="text-right" >
	  <a href ="alumni_info.php"><strong>back</strong></a>
	  </div>
			<form action="" method="post">
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
			</div>
			<hr>
			<div class="mainform" style="margin-top:3%">
				<h2 style="text-align:center">Alumni form</h2>
				<label>Photo:</label><input name="photo" style="border-bottom:none" type="file"/><br><br/>
				<label >Name of the Alumni:</label><input type="text" name="name" maxlength="15" class="form-control" /><br/><br/>
				 <label >Gender:</label><select name="gender">
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					 
					</select></br></br>
				<label >Degree:</label><input type="text" name="degree" maxlength="15" class="form-control" /><br/><br/>
				
				<label>Year of Completion:</label>
				
				<body onload="loadAgeSelector()">
<select id="yearselect" name="year"></select>
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
				
				
				<label>Designation:</label><input type="text" name="designation" maxlength="20" class="form-control" /></br></br>
				<h3>Work Location</h3>
				<label>Country:</label><input type="text" name="country" maxlength="30" class="form-control" /></br></br>
				<label>State:</label><input type="text" name="state" maxlength="30" class="form-control" /></br></br>
				<label>City:</label><input type="text" name="city" maxlength="20" class="form-control" /></br></br>
				<h3>Special Achievements</h3>
				
				<div class="form-group">
					  <label for="comment">Special Achievements after graduation:</label>
					  <textarea class="form-control" name="achievements" rows="5" id="comment"></textarea>
				</div>
				</br>
				<h3>Present Resedential details</h3>
				<label>Mobile:</label><input type="text" name="mobile" maxlength="30" class="form-control" /></br></br>
				<label>Email:</label> <input type="email" name="email" class="form-control" id="email"></br></br>
		
				
				
			</div>
			<div class="button" style="text-align:center">
				
				 <button type="submit" name="add_al" class="btn btn-info">Add</button></br>
			</div>
			</form>
		</div>
</br></br>
	</body>
</html>