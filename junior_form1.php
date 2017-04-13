<?php
    if(isset($_POST['s'])) {
        $reg=$_POST["reg"];
        $fee=$_POST["fee"];
        $form=$_POST["form"];
		$doa=$_POST["doa"];
		$drn=$_POST["drn"];
		$divr=$_POST["divr"];
		$cat=$_POST["cat"];
		$name=$_POST["name"];
		$rs=$_POST["rs"];
		$cnm=$_POST["cnm"];
		$sub1=$_POST["sub1"];
		$sub2=$_POST["sub2"];
		$month=$_POST["month"];
		$year=$_POST["year"];
		$seat=$_POST["seat"];
		$a1=$_POST["a1"];
		$b1=$_POST["b1"];
		$c1=$_POST["c1"];
		$a2=$_POST["a2"];
		$b2=$_POST["b2"];
		$c2=$_POST["c2"];
		$a3=$_POST["a3"];
		$b3=$_POST["b3"];
		$c3=$_POST["c3"];
		$a4=$_POST["a4"];
		$b4=$_POST["b4"];
		$c4=$_POST["c4"];
		$a5=$_POST["a5"];
		$b5=$_POST["b5"];
		$c5=$_POST["c5"];
		$a6=$_POST["a6"];
		$b6=$_POST["b6"];
		$c6=$_POST["c6"];
		$percent=$_POST["perc"];
		$Name=$_POST["Name"];
		$dob=$_POST["dob"];
		$place=$_POST["pob"];
		$adhar=$_POST["adhar"];
		$caste=$_POST["caste"];
		$religion=$_POST["religion"];
		$select1=$_POST["select1"];
				$sch=$_POST["sch"];
		$address=$_POST["add"];
		$per_address=$_POST["peraddress"];
		$taluka=$_POST["taluka"];
		$district=$_POST["district"];
		$state=$_POST["state"];
		$rural_or_urban=$_POST["ru"];
		$mob=$_POST["mob"];
		$status=$_POST["status"];

		
			if(!preg_match("/^[a-zA-Z'-]+$/",$name)) { die ("invalid ");} 
						if(!preg_match("/^[a-zA-Z'-]+$/",$Name)) { die ("invalid ");} 
						
									if(!preg_match("/^[a-zA-Z'-]+$/",$taluka)) { die ("invalid");} 
			if(!preg_match("/^[a-zA-Z'-]+$/",$district)) { die ("invalid");} 
			if(!preg_match("/^[a-zA-Z'-]+$/",$state)) { die ("invalid");} 


		
		//echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['reg' =>$reg, 'fee' =>$fee, 'form'=>$form, 'doa'=>$doa, 'drn'=>$drn, 
		'divr'=>$divr, 'category'=>$cat, 'name'=>$name, 'rs'=>$rs, 'coll_nm'=>$cnm, 'sub1'=>$sub1,
			'sub2'=>$sub2,
		 'month'=>$month, 'year'=>$year, 'seat'=>$seat,'a1'=>$a1, 'b1'=>$b1, 'c1'=>$c1,'a2'=>$a2, 'b2'=>$b2, 
		'c2'=>$c2, 'a3'=>$a3, 'b3'=>$b3, 'c3'=>$c3, 'a4'=>$a4, 'b4'=>$b4, 'c4'=>$c4,
		'a5'=>$a5,  	'b5'=>$b5, 'c5'=>$c5, 'a6'=>$a6, 'b6'=>$b6, 'c6'=>$c6,
		'percent'=>$percent, 'Name'=>$Name,  'dob'=>$dob, 'place'=>$place, 'adhar'=>$adhar, 'caste'=>$caste,
		'religion'=>$religion,  	'category'=>$select1, 'scholarship/freeship'=>$sch,'address'=>$address,'peraddress'=>$per_address,'taluka'=>$taluka, 'district'=>$district, 
		'state'=>$state, 'rural/urban'=>$rural_or_urban,'mob'=>$mob, 'status'=>$status]);
        $manager->executeBulkWrite('chintamanrao.junior_form1', $bulk);
    } 





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admission Form</title>
<style type="text/css">
        .upload {
            
		float:right;
        }
	.container{
	background-color:#ffe6e6;
	}
        
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>

</head>
<body>
</br></br></br></br>

<div class="container" >
  <div>
  <div class="logo" style="margin-left:9%;margin-top:2%;float:left">
					 <img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150">
			</div>
			<form action="" method="post">
			<div class="head" style="margin-left:12%;margin-right:12%">
					<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
					<h1 style="font-style:bold;margin-left:30%">Chintamanrao College of Commerce,Sangli.</h1>
					<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
			</div>
			<hr>
<table class="table">
  <form action="" method="post" enctype="multipart/form-data">  
    <tbody>
      <tr>
        <td>General Register No.<input type="text" name="reg" class="form-control" id="usr"></td>
        <td>Fee Receipt No.<input type="text" name="fee" class="form-control" id="usr"></td>
        <td>Form No.<input type="text" name="form" class="form-control" id="usr"></td>
      </tr>
      <tr>
        <td>Date of Admission<input type="text" name="doa" class="form-control" id="usr"></td>
        <td>Deposit Receipt No.<input type="text" name="drn" class="form-control" id="usr"></td>
        <td>Division & Roll No.<input type="text" name="divr" class="form-control" id="usr"></td>
      </tr>
    </tbody>
  </table>
  <div>
   &nbsp  Category &nbsp &nbsp <select name="cat" required>
  <option value="S.C">S.C</option>
  <option value="S.T">S.T</option>
  <option value="N.T">N.T</option>
  <option value="V.J.N.T">V.J.N.T</option>
  <option value="O.B.C">O.B.C</option>
  <option value="SBC">SBC</option>
  <option value="Other">Other</option> 
  </select>
</div> 
	<hr>
  </div>
  
  <div>
	
	<p class="text-center">Deccan Education Society's</p>
	<h1 class="text-center">Chintamanrao College of Commerce,Sangli</h1>
	<h3 class="text-center"><strong>Application for Admission to B.Com Part I/II/III</strong></h3>
</div>
<div>
<p>To,</br>
        <strong>The Principal,</strong></br>
    Chintamanrao College of Commerce,Sangli.</br>
        <strong>Respected Sir,
    </strong>
	
		<p style="margin-left: 200px; text-align: left;">In block letters &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Student&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Father&#39;s/Husband&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mother&#39;s Name</p>

	I, Shri/Smt. <input type="text" name="name" size="120" required> am remitting Rs.<input type="number" name="rs" min="0" step="0.25"/ required>I have previously 
attended <input type="text" name="cnm" size="20" required>college.</br>
I wish to offer following subjects:(Please tick the subject of your choice)</br>
1. English</br>
2.<select name="sub1" required>
  <option value="Marathi">Marathi</option>
  <option value="Hindi">Hindi</option>
  <option value="I.T">Information Technology</option> 
  </select></br>
3.Economics</br>
4.Book Keeping & Accountancy</br>
5.Organization of Commerce & Management</br>
6.<select name="sub2" required>
  <option value="Secretarial Practice">Secretarial Practice</option>
  <option value="Hindi">Mathematics</option>
  <option value="I.T">Information Technology</option> 
  </select></br></br>
I agree that my admission will only be provisional until eligibility certificate is obtained from
the Board of Higher Secondary Examination, Kolhapur Last Year, I had secured E.B.C/B.C/P.T.C/S.T.C/EXJC/PAYING Ward concession fees.
</hr></br>
Year and month of passing X/XI Std. Examination: Month<input type="text" name="month" size="10" required>&nbsp Year<input type="text" name="year" size="10" required>
Seat No.<input type="text" name="seat" size="20" required>
<div class="text-center">
<strong>Marks obtained in X/XI Standard Examination</strong></br>
 <table class="table">
    <thead>
      <tr>
        <th>Sr.No.</th>
        <th>Subject</th>
        <th>Marks obtained</th>
        <th>Out of</th>

		</tr>
    </thead>
    <tbody class="text-left">
      <tr>
        <td>1.</td>
        <td><input type="text" name="a1" size="20"></td>
        <td><input type="text" name="b1" size="10"></td>
        <td><input type="text" name="c1" size="10"></td>

		</tr>
     <tr>
        <td>2.</td>
        <td><input type="text" name="a2" size="20"></td>
        <td><input type="text" name="b2" size="10"></td>
        <td><input type="text" name="c2" size="10"></td>

		</tr>
     <tr>
        <td>3.</td>
        <td><input type="text" name="a3" size="20"></td>
        <td><input type="text" name="b3" size="10"></td>
        <td><input type="text" name="c3" size="10"></td>

		</tr>
	<tr>
        <td>4.</td>
        <td><input type="text" name="a4" size="20"></td>
        <td><input type="text" name="b4" size="10"></td>
        <td><input type="text" name="c4" size="10"></td>

		</tr>
	<tr>
        <td>5.</td>
        <td><input type="text" name="a5" size="20"></td>
        <td><input type="text" name="b5" size="10"></td>
        <td><input type="text" name="c5" size="10"></td>

		</tr>
	<tr>
        <td>6.</td>
        <td><input type="text" name="a6" size="20"></td>
        <td><input type="text" name="b6" size="10"></td>
        <td><input type="text" name="c6" size="10"></td>

		</tr>
    </tbody>
  </table>
  <div class="text-right">
	Total Percentage:<input type="text" name="perc" size="10" required>
  </div>
  <div>
	<h3 class="text-center"><strong>Personal Information</strong></h3>
</div>
<div class="text-left">
	<p style="margin-left: 200px; text-align: left;">Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Student&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Father&#39;s/Husband&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mother&#39;s Name</p>
        <p style="margin-left: 0px; text-align: left;">Name(In Block Letters)&nbsp &nbsp &nbsp <input type="text" name="Name" size="150" required>&nbsp &nbsp &nbsp &nbsp
        &nbsp(Also in Devnagri Script)</p>
	<p>  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
</script>
Date Of Birth:<input type="date" name="dob" required>Place of Birth:<input type="text" name="pob" size="20" required> Adhar Card No.<input type="text" name="adhar" size="20" required>
	Caste:<input type="text" name="caste" size="25" required >&nbsp&nbspReligion:&nbsp <input type="text" name="religion" size="25" required >
	<p>Whether <select name="select1" required>
  <option value="SC">SC</option>
  <option value="ST">ST</option>
  <option value="DT">DT</option>
  <option value="NT">NT</option>
  <option value="OBC">OBC</option>
  <option value="SBC">SBC</option>
  <option value="OTHER">OTHER</option>
</select>
<p>If yes,caste certificate should be attached</p>
<p>Whether in receipt og Govt. scholarship/freeship Yes/No:<input type="text" name="sch" size="25" required>
 <p>Complete Local Address&nbsp;
            <textarea rows="2" name="add" cols="60" required>
</textarea>
 <p>Permanent Address&nbsp;
            <textarea rows="2" name="peraddress" cols="60" required>
</textarea>
<p>Taluka: <input type="text" name="taluka" size="20" required >&nbsp District:&nbsp <input type="text" name="district" size="20" required>&nbspState:&nbsp<input type="text" name="state" size="20" required >
 Rural/Urban:&nbsp <input type="text" name="ru" size="20" >Parent's	Mobile Number:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <input type="text" name="mob" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required  >
Married/Unmarried:&nbsp <input type="text" name="status" size="25" required>
</hr>
<h3 class="text-center">RECEIPT</h3>
Form No. <input type="text" name="status" size="25" ></br>
Name of student: <input type="text" name="status" size="70" ></br></br></br></br>
Date of admission: <input type="text" name="status" size="25" >

&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
Student Signature &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Supervisor's Signature

</div>
<div>
	 <ul class="pager">
    <li><a href="junior_form1.php">Previous</a></li>
    <li><a href="junior_form2.php">Next</a></li>
  </ul>
  <div class="text-center">
	<input type="submit" name="s" class="btn btn-info" value="Save">
</div>
</div>
</div>
</div>
</div>
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  