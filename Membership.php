<!--<?php
	$err="";
	if(!empty($_POST['ParentName']) && !empty($_POST['RAddress']) && !empty($_POST['Mobno'])&& !empty($_POST['category']) && !empty($_POST['first']) && !empty($_POST['first1'])&& !empty($_POST['Second'])&& !empty($_POST['Second1'])&& !empty($_POST['Third'])&& !empty($_POST['Third1'])&& !empty($_POST['line'])&& !empty($_POST['signature'])&& !empty($_POST['sign'])){
		$parentname=$_POST['ParentName'];
		$raddress=$_POST['RAddress'];
		$mname=$_POST['MiddleName'];
		$mobno=$_POST['Mobno'];
		$category=$_POST['category'];
		$first=$_POST['first'];
		$first1=$_POST['first1'];
		$second=$_POST['second1'];
		$third=$_POST['third'];
		$third1=$_POST['third1'];
		$line=$_POST['line'];
		$signature=$_POST['signature'];
		$sign=$_POST['sign'];
		$flg=0;
		if(strlen($mobno)>25){
			$err='Your mobno is too long...!!!\n';
			$flg+=1;
		}
		if(strlen($parentname)>30){
			$err=$err.'Your parent name is too long...!!!\n';
			$flg+=1;
		}
		if($raddress==null){
			$err=$err.'Cant be empty...!!!\n';
			$flg+=1;
		}
		if($category==null){
			$err=$err.'Cant be empty...!!!\n';
			$flg+=1;
		}
		if($line==null){
			$err=$err.'Cant be empty...!!!\n';
			$flg+=1;
		}
		if($signature==null){
			$err=$err.'Cant be empty...!!!\n';
			$flg+=1;
		}
		echo "<script type=text/javascript>alert('$err') </script>";
		if($flg==0){
		header("Location: login.php"); 
		exit;
	}
	}
	else{
		echo 'Enter all fields';
	}
		
?> -->





<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8"/>
	  <title>Membership Form</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css\bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="js\bootstrap.min.js"></script>
	</head>
	<body style="background-color:powderblue">
		<div class="container" style="margin-left:8%;margin-right:10%">
				<div class="logo" style="margin-left:9%;margin-top:2%;float:left">
					 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
				</div>
				<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
					<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
				</div>
				<hr>
				<div class="main">
					<h2 style="font-style:bold;margin-left:15%;margin-top:7%">Chintamanrao College of Commerce,Sangli Sr.College</h2>
					<p style="text-align:center">Parent Teacher's Association Academic Year 201  -201</br>
					(Maharashtra Educational Institutions Regulat on of Fee Act 2011) (Maha Act No. VII of 2014)
					</p>
					<h2 style="text-align:center">PARENT-TEACHER'S ASSOCIATION MEMBERSHIP FORM</h2>	
				</div>
				<div class="mainform">
					<label>Full Name of Parent:</label><input type="text" name="ParentName" maxlength="70" required/><br/><br/>
					<p style="margin-left:13%">(Surname First)</p>
					<label>Full Residential Address:</label><input type="text" name="RAddress" required/><br/><br/>
					<div class="add" style="margin-left:15%">
						<input type="text" name="Address" required/></br>
					</div>
					</br>
					<label>Telephone & Mobile Number:</label><input type="text" name="Mobno" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required/><br/><br/>
					<label>Category of the Parent-Open/SC/ST/OBC/VT-A/NT-B/Nt-D/SBC/Other:</label><input type="text" name="category" required/><br/><br/>
					<p>Name(s)student(s)/Wards of Parent Becoming Member</p>
					<div class="tab">
						<table class="table">
								<thead>
								  <tr>
									<th>Sr.No</th>
									<th>Full Name of Student</th>
									<th>Class</th>
								  </tr>
								</thead>
								<tbody>
								  <tr class="success">
									<td>1)</td>
									<td><input type="textbox" name="first"/></td>
									<td><input type="textbox" name="first1"/></td>
								  </tr>
								  <tr class="danger">
									<td>2)</td>
									<td><input type="textbox" name="second"/></td>
									<td><input type="textbox" name="second1"/></td>
								  </tr>
								  <tr class="info">
									<td>3)</td>
									<td><input type="textbox" name="third"/></td>
									<td><input type="textbox" name="third1"/></td>
								  </tr>
								</tbody>
						</table>
					</div>
				</div>
				<div class="declaration">
						<h4 style="text-align:center">DECLARATION</h4>
						<p style="margin-left:10%">I <input type="textbox" name="line" required/> hereby declare that the information
						furnished here in above is true and correct.I wish to become member of the PTA which I am</br>
						depositing herewith fees of Rs. 50/- .I shall abide by the rules and regulations framed in connection with the said PTA.
						</p>
						<input type="textbox" name="signature" style="float:right" required/></br></br>
						<p style="float:right;margin-left:60%">Signature of Parent</p>
				<hr>
				</br>
				</br>
				<h4 style="text-align:center">RECEIT</h4>
				<p style="margin-left:10%">Received Membership Form Shri./Sou. <input type="textbox" name="signature"/>
				for becoming member of PTA,Chintamanrao College of Commerce,Sangli Jr.College Higher Secondary Section for Academic Year 201  -201  .
				Also received fees of Rs. 50/- from the Parent.
                </p>
				<input type="textbox" name="sign" style="float:right"/></br></br>
				<p style="float:right;margin-left:60%">Signature of Office Clerk</p>
				<div class="button">
					<input type="submit" value="submit" style="margin-left:400px;"/>
					<input type="reset" value="reset" style="margin-left:250px;"/><br>
				</div>
        </div>
	</body>
</html>