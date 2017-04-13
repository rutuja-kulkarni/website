<?php
    if(isset($_POST['sub'])) {
        $title=$_POST["Title"];
        $fullnm=$_POST["FullName"];
        $middlenm=$_POST["MiddleName"];
		$lastnm=$_POST["LastName"];
		$education=$_POST["education"];
		$designation=$_POST["designation"];
		$courses=$_POST["courses"];
		$photo=$_POST["photo"];
		$email=$_POST["email"];
		$works=$_POST["works"];
		$contact=$_POST["contact"];
        //echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('chintamanrao.faculty', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['_id'=>$cn,'title' =>$title, 'name' =>$fullnm, 'midnm'=>$middlenm, 'lstnm'=>$lastnm, 'edu'=>$education, 
		'des'=>$designation, 'courses'=>$courses, 'photo'=>$photo, 'email'=>$email, 'works'=>$works, 'contact'=>$contact]);
        $manager->executeBulkWrite('chintamanrao.faculty', $bulk);
		
					if(!preg_match("/^[a-zA-Z'-]+$/",$fullnm)) { die ("invalid name ");} 
					if(!preg_match("/^[a-zA-Z'-]+$/",$middlenm)) { die ("invalid middle name");} 
					if(!preg_match("/^[a-zA-Z'-]+$/",$lastnm)) { die ("invalid last name");} 


    } 
	
?>




<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8"/>
	  <title>Faculty Form</title>
	 
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css\bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="js\bootstrap.min.js"></script>
	</head>
	<body style="background-color:powderblue">
		<div class="container" style="margin-left:8%;margin-right:10%;background-color:#1ab188">
			<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
					 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			 <div class="text-right" >
	  <a href ="logout.php"><strong>logout</strong></a>
	  </div>
			<form action="" method="post">
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
			</div>
			<hr>
			<div class="mainform" style="margin-top:3%">
				<h2 style="text-align:center">Faculty Profile Details</h2>
				<label >Title(Asst/Asst prof/Prof):</label><input type="text" name="Title" maxlength="15" class="form-control" required/><br/><br/>
				<label >Full Name:</label><input type="text" name="FullName" maxlength="15" class="form-control" required/><br/><br/>
				<label>Middle Name:</label><input type="text" name="MiddleName" maxlength="15" class="form-control" required /><br/><br/>
				<label>Last Name:</label><input type="text" name="LastName" maxlength="15" class="form-control" required /><br/><br/>
				<label>Education:</label><input type="text" name="education" maxlength="30" class="form-control" required/><br/><br/>
				<label>Designation:</label><input type="text" name="designation" maxlength="20" class="form-control" required /><br/><br/>
				<label>Courses:</label><input type="text" name="courses" maxlength="30" class="form-control" required/><br/><br/>
				<label>Photo:</label><input name="photo" style="border-bottom:none" type="file"/><br><br/><br/>
				<label>Email:</label><input type="email" name="email" class="form-control" id="email" required/><br/><br/>
				<div class="form-group">
					  <label for="comment">Works:</label>
					  <textarea class="form-control" name="works" rows="5" id="comment" required></textarea>
				</div>
				</br>
				<label>Contact:</label><input type="text" name="contact" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required/><br/><br/>
			</div>
			<div class="button" style="text-align:center">
				 <a href="#" class="btn btn-info" role="button">Save Details</a>
				 <button type="submit" name="sub" class="btn btn-info">Reset</button>
			</div>
			</form>
		</div>

	</body>
</html>