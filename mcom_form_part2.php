<?php
    if(isset($_POST['ss'])) {
		$nameG=$_POST["nameG"];
		$occ=$_POST["occ"];
		$income=$_POST["income"];
		$dep=$_POST["dep"];
		$ph=$_POST["ph"];
		$address=$_POST["address"];
		$select=$_POST["select"];
		$byear=$_POST["byear"];
		$dt=$_POST["dt"];		
		$prt=$_POST["prt"];
		$div=$_POST["div"];
		$roll=$_POST["roll"];
		$dat=$_POST["dat"];
		$mob=$_POST["mob"];
		
		
				if(!preg_match("/^[a-zA-Z'-]+$/",$nameG)) { die ("invalid");} 

		
		
		
		
		//echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
           
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert([ 'name_of_guardian'=>$nameG, 'occupation'=>$occ, 'income'=>$income,
		'dependents'=>$dep, 'phone'=>$ph,  'address'=>$address, 'select'=>$select, 'mcom_year'=>$byear, 'date'=>$dt,'mcom_part'=>$prt,'division'=>$div,
		'rollno'=>$roll, 'date'=>$dat, 'mobile'=>$mob]);
        $manager->executeBulkWrite('chintamanrao.mcom_form_part2', $bulk);
    } 
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
<style type="text/css">
        
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

<div class="container">

  <form action="" method="post">               
 
<h3 class="text-center">Shivaji University has Adopted The Semester</h3>
<h3 class="text-center">Pattern For M.Com Courses Since The Academic Year</h3>
<div class="row">
    <div class="col-sm-6">
      <h3>M.Com I</h3>
      <p><strong>Compulsory papers:</strong></p>
      <p>1.Management Concepts and Organizational Behaviour Paper I and II</p>
      <p>2.Managerial Economics Paper I and II</p></br>
      <p><strong>Optional Papers:</strong></p>
      <p>Any one of the following</p>
      <p>1.Ad. Banking Financial Systems Paper-I & II</p>
      <p>2.Ad. Costing Paper-I & II</p>
	  <p>3.Taxation I and II</p>
	  <p>2.Ad. Accountancy I & II</p>
    </div>
    <div class="col-sm-6">
      <h3>M.Com II</h3>
      <p><strong>Compulsory papers:</strong></p>
      <p>1.Management Accounting Paper I and II</p>
      <p>2.Business Finance Paper I and II</p></br>
      <p><strong>Optional Papers:</strong></p>
      <p>Any one of the following</p>
      <p>1.Ad. Banking Financial Systems Paper-III & IV</p>
      <p>2.Ad. Costing Paper-III & IV</p>
	  <p>3.Taxation III and IV</p>
	  <p>2.Ad. Accountancy III & IV</p>
      
    </div>
</div>







<hr>
<h3 class="text-center">Endorsement by the Guardian</h3>
<p>Name of the Guardian-full name (mother/father) Surname first:<input type="text" name="nameG" size="110" required > 
<p>Occupation:&nbsp <input type="text" name="occ" size="15" required>&nbsp Annual Income Rs. &nbsp <input type="text" name="income" size="15" required>&nbsp
 No. of dependents:&nbsp <input type="number" min="0" step="1"/ required> &nbsp Phone no.&nbsp <input type="text" name="ph" size="15" required>
<p>Address:<input type="text" name="address" size="140" required > </p>
<p>I have permitted my &nbsp <select name="select" required>
  <option value="son">son</option>
  <option value="daughter">daughter</option>
  <option value="ward">ward</option>
  </select> to join the college.
<p>All the statements made by my ward in the application are true and correct.I undertake to abide by the rules and regulations of the college.I undertake to pay all the College fees,dues of my ward
and to see that he/she observes all the rules of discipline.I request you to admit my ward to M.Com Part <input type="text" name="byear" size="20" required>in your college.
</br></br><p>Date:&nbsp <input name="dt" type="text" size="20" required> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
 Mobile No.<input type="text" name="mob" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required  >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Signature of Guardian
</br></br> <h3 class="text-center">Decision by the Principal</h3></br>
<p>Admitted to M.Com Part &nbsp <input type="text" name="prt" size="25" >&nbsp &nbsp &nbsp &nbsp
Class Div:<input type="text" name="div" size="20" >&nbsp &nbsp &nbsp &nbsp Roll.No:<input type="text" name="roll" size="20" ></br></br></br></br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <Strong>Date:<input type="text" name="dat" size="20" > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Principal/Vice Principal</strong>
<hr>
<div class="text-center">
	<input type="submit" name="ss" class="btn btn-info" value="Save & Submit">
</div>
<div>
	 <ul class="pager">
    <li><a href="mcom_form_part1.php">Previous</a></li>
  </ul>
</div>
</form>
</div>

</br></br></br></br>

</body>
</html>
