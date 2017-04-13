<?php
    if(isset($_POST['submit1'])) {
        $title=$_POST["title"];
        $fullname=$_POST["Fullname"];
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
            $cursor = $manager->executeQuery('chintamanrao.srfaculty', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['_id'=>$cn,'title' =>$title, 'fullname' =>$fullname,'education'=>$education,'designation'=>$designation,'courses'=>$courses,'email'=>$email,'works'=>$works,'contact'=>$contact]);
        $manager->executeBulkWrite('chintamanrao.srfaculty', $bulk);
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
	<body style="background-color:#000033">
		<div class="container" style="margin-left:12%;margin-right:10%;	background-color:#9999ff;border:9px ridge red;width:1300px">
			<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
					 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
			</div>
			</br>
			</br>
			<hr>
			<form action="" method="post">
				<div class="mainform" style="margin-top:3%">
					<h2 style="text-align:center">Faculty Profile Details</h2>
					<label  style="font-size:18px">Title(Asst/Asst prof/Prof):</label><input type="text" name="title" maxlength="15" class="form-control" required/><br/><br/>
					<label style="font-size:18px">Full Name:</label><input type="text" name="Fullname" maxlength="50" class="form-control"required /><br/><br/>
					<label style="font-size:18px">Education:</label><input type="text" name="education" maxlength="30" class="form-control" required/><br/><br/>
					<label style="font-size:18px">Designation:</label><input type="text" name="designation" maxlength="20" class="form-control" required/><br/><br/>
					<label style="font-size:18px">Courses:</label><input type="text" name="courses" maxlength="30" class="form-control" required/><br/><br/>
					<label style="font-size:18px">Photo:</label><input style="border-bottom:none" type="file" name="photo" required/><br><br/><br/>
					<label style="font-size:18px">Email:</label><input type="email" name="email" class="form-control" id="email" required/><br/><br/>
					<div class="form-group">
						  <label for="comment" style="font-size:18px">Works:</label>
						  <textarea class="form-control" rows="5" id="comment" name="works"required></textarea>
					</div>
					</br>
					<label style="font-size:18px">Contact:</label><input type="text" name="contact" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required/><br/><br/>
				
					<div class="button">
								<input type="submit" value="submit" name="submit1" style="margin-left:400px;"/>
								<input type="reset" value="reset"  name="submit2" style="margin-left:250px;"/><br>
					</div>

				</div>
			</form>
		</div>

	</body>
</html>