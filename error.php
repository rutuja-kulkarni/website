<?php
    if(isset($_POST['subform'])) {
        $bcom=$_POST["Bcom"];
        $receipt=$_POST["receipt"];
        $year=$_POST["year"];
		$division=$_POST["division"];
		$date=$_POST["date"];
		$paying=$_POST["paying"];
		$rollno=$_POST["rollno"];
		$fee=$_POST["fee"];
		$formno=$_POST["formno"];
		$byear=$_POST["byear"];
		$fileToUpload=$_POST["fileToUpload"];
		$submitpic=$_POST["submitpic"];
		$rs=$_POST["rs"];
		$select=$_POST["select"];
		$name=$_POST["name"];
		$address=$_POST["add"];
		$mob=$_POST["mob"];
		$peraddress=$_POST["peraddress"];
		$taluka=$_POST["taluka"];
		$district=$_POST["district"];
		$state=$_POST["state"];
		$ru=$_POST["ru"];
		$dob=$_POST["dob"];
		$pob=$_POST["pob"];
		$status=$_POST["status"];
		$mf=$_POST["mf"];
		$caste=$_POST["caste"];
		$religion=$_POST["religion"];
		$select1=$_POST["select1"];
		$sch=$_POST["sch"];
		$coll=$_POST["coll"];
		$year1=$_POST["year1"];
		$div=$_POST["div"];
		$roll=$_POST["roll"];
		$blood=$_POST["blood"];
		$date1=$_POST["date1"];
		$feers=$_POST["feers"];
		$deposit=$_POST["deposit"];
		
		
		//echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('chintamanrao.form_part1', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['_id'=>$cn,'bcom' =>$bcom, 'receipt' =>$receipt, 'year'=>$year, 'division'=>$division, 'date'=>$date, 
		'paying/conholder'=>$paying, 'rollno'=>$rollno, 'fee'=>$fee, 'formno'=>$formno, 'bcom_year'=>$byear, 'fileToUpload'=>$fileToUpload, 
		 'photo'=>$submitpic,'Rs'=>$rs, 'per'=>$select, 'name'=>$name, 'address'=>$address, 'mob'=>$mob, 'per_address'=>$peraddress,'taluka'=>$taluka, 'district'=>$district, 
		'state'=>$state, 'rural/urban'=>$ru, 'dob'=>$dob, 'place_of_birth'=>$pob, 'marries/not_married'=>$status, 'male/female'=>$mf, 'caste'=>$caste,
		'religion'=>$religion,  	'category'=>$select1, 'scholarship/freeship'=>$sch, 'last_college'=>$coll, 'year_1ast_coll'=>$year1, 'div_last_coll'=>$div,
		'roll_no_last_coll'=>$roll, 'blood_group'=>$blood,  'date1'=>$date1, 'fee_rs'=>$feers, 'deposit'=>$deposit]);
        $manager->executeBulkWrite('chintamanrao.form_part1', $bulk);
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
        <td>B.com<input type="text" name="Bcom" class="form-control" id="usr"></td>
        <td>Receipt<input type="text" name="receipt" class="form-control" id="usr"></td>
        <td>Year<input type="text" name="year" class="form-control" id="usr"></td>
      </tr>
      <tr>
        <td>Division<input type="text" name="division" class="form-control" id="usr"></td>
        <td>Date<input type="text" name="date" class="form-control" id="usr"></td>
        <td>Paying/concession Holder<input type="text" name="paying" class="form-control" id="usr"></td>
      </tr>
      <tr>
        <td>Roll No<input type="text" name="rollno" class="form-control" id="usr"></td>
        <td>Fee Rs.<input type="text" name="fee" class="form-control" id="usr"></td>
        <td>Form No:<input type="text" name="formno" class="form-control" id="usr"></td>
      </tr>
    </tbody>
  </table>
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
    </p>
	
	 <p style="margin-left: 40px">At the desire of my guardian, I the undersigned, hereby apply for admission to B.com
            <input type="text" name="byear" size="25" >Class.
            
    Select image to upload:
    <input class="upload" type="file" name="fileToUpload" id="fileToUpload">
    <input class="upload" type="submit" value="Upload Image" name="submitpic"> 

 </p>
        <p style="margin-left: 0px">&nbsp &nbsp &nbsp &nbsp I understand that my admission will be final only on my producing the Transference Certificate from the college last attended and if necessary the Eligibility Certificate from the Registrar, Shivaji University, Kolhapur.</p>
        <p style="margin-left: 0px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If I am granted admission, I agree to devote myself wholeheartedly to my studies and be guided in all by the authority of the Principal. I have read the rules of the college and do hereby undertake, if admitted, to abide by them as they are the present in force and as they may hereafter be made by the college authorities.</p>
        <p style="margin-left: 0px; ">&nbsp &nbsp &nbsp &nbsp I am remitting a sum of Rs.<input type="text" name="rs" size="25" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Per&nbsp;&nbsp;&nbsp;
    <select name="select">
  <option value="select">select</option>
  <option value="Cash">Cash</option>
  <option value="Cheque">Cheque</option>
  <option value="M.O">M.O</option>
</select>
<hr>


&nbsp;</p></div>
<div>
	<h3 class="text-center"><strong>Personal Information</strong></h3>
	<p style="margin-left: 200px; text-align: left;">Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Student&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Father&#39;s/Husband&#39;s Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mother&#39;s Name</p>
        <p style="margin-left: 0px; text-align: left;">Name(In Block Letters)&nbsp &nbsp &nbsp <input type="text" name="name" size="150" >&nbsp &nbsp &nbsp &nbsp
        &nbsp(Also in Devnagri Script)</p>
        <p>Complete Local Address&nbsp;
            <textarea rows="2" name="address" cols="60">
</textarea>
	<p>Mobile Number:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="mob" size="25" ></p>
	<p>Permanent Address:&nbsp &nbsp  &nbsp &nbsp;
            <textarea rows="2" name="peraddress" cols="60">
</textarea></p>
	<p>Taluka: <input type="text" name="taluka" size="20" >&nbsp District:&nbsp <input type="text" name="district" size="20" >&nbspState:&nbsp<input type="text" name="state" size="20" >&nbsp Rural/Urban:&nbsp <input type="text" name="ru" size="20" >
	<p>Date Of Birth:  <input type="text" name="dob" size="25" >&nbsp Place Of Birth:&nbsp <input type="text" name="pob" size="25" >&nbspMarried/Unmarried:&nbsp <input type="text" name="status" size="25" >&nbsp 
	<p>Male/Female: <input type="text" name="mf" size="25" >&nbsp Caste:<input type="text" name="caste" size="25" >&nbsp&nbspReligion:&nbsp <input type="text" name="religion" size="25" >
	<p>Whether <select name="select1">
  <option value="SC">SC</option>
  <option value="ST">ST</option>
  <option value="DT">DT</option>
  <option value="NT">NT</option>
  <option value="OBC">OBC</option>
  <option value="SBC">SBC</option>
  <option value="OTHER">OTHER</option>
</select>
<p>If yes,caste certificate should be attached</p>
<p>Whether in receipt og Govt. scholarship/freeship Yes/No:<input type="text" name="sch" size="25" >
<p>College last attended:&nbsp &nbsp <input type="text" name="coll" size="125" >
<p>Year:<input type="text" name="year1" size="20" >&nbsp Div:&nbsp <input type="text" name="div" size="20" >&nbspRoll No.&nbsp <input type="text" name="roll" size="20" >&nbsp Blood Group&nbsp <input type="text" name="blood" size="20" >
</div><hr>
<div>
<h4 class="text-center"><strong>For office use only</strong></h4>
<p>Date:&nbsp <input type="text" name="date1" size="20" > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Fee Rs.<input type="text" name="feers" size="20" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Deposit:<input type="text" name="deposit" size="20" >
</div>
<div class="text-center">
	<input type="submit" name="subform" class="btn btn-info" value="Save">
</div>
<div>
	 <ul class="pager">
    <li><a href="btry.php">Previous</a></li>
    <li><a href="form_part2.php">Next</a></li>
  </ul>
</div>
</form>

</div>

</body>
</html>