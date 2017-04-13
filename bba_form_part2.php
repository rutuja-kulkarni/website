<?php
    if(isset($_POST['ss'])) {
        $examno=$_POST["examno"];
        $boardnm=$_POST["boardnm"];
        $sub=$_POST["sub"];
		$marks=$_POST["marks"];
		$examnob1=$_POST["examnob1"];
		$boardnmb1=$_POST["boardnmb1"];
		$sub1=$_POST["sub1"];
		$marksb1=$_POST["marksb1"];
		$sub2=$_POST["sub2"];
		$sub3=$_POST["sub3"];
		$sub4=$_POST["sub4"];
		$sub5=$_POST["sub5"];
		$sub6=$_POST["sub6"];
		$sub7=$_POST["sub7"];
		$total1=$_POST["subtot1"];
		$examnob2=$_POST["examnob2"];
		$boardnmb2=$_POST["boardnmb2"];
		$sub11=$_POST["sub11"];
		$marksb2=$_POST["marksb2"];
		$sub22=$_POST["sub22"];
		$sub33=$_POST["sub33"];
		$sub44=$_POST["sub44"];
		$sub55=$_POST["sub55"];
		$sub66=$_POST["sub66"];
		$sub77=$_POST["sub77"];
		$total2=$_POST["subtot2"];
		$date=$_POST["date"];
		$mob=$_POST["mob"];
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
		
		
		
	
		
			if(!preg_match("/^[a-zA-Z'-]+$/",$nameG)) { die ("invalid first name");} 
//				if(!preg_match("/^[a-zA-Z'-]+$/",$address)) { die ("invalid first name");} 


		
		//echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['seatno' =>$examno, 'board/university' =>$boardnm, 'sub'=>$sub, 'marks'=>$marks, 'examnob1'=>$examnob1, 
		'boardnmb1'=>$boardnmb1, 'sub_bcom1'=>$sub1, 'marksb1'=>$marksb1, 'sub2'=>$sub2, 'sub3'=>$sub3, 'sub4'=>$sub4, 
		'sub5'=>$sub5, 'sub6'=>$sub6,'sub7'=>$sub7, 'total1'=>$total1, 'seatno_bcom'=>$examnob2, 'boardnmb2'=>$boardnmb2, 'sub_bcom2'=>$sub11,'marksb2'=>$marksb2, 'sub22'=>$sub22, 
		'sub33'=>$sub33, 'sub44'=>$sub44, 'sub55'=>$sub55, 'sub66'=>$sub66,'sub77'=>$sub77, 'total2'=>$total2,
		  	'date'=>$date, 'mobile'=>$mob, 'name_of_guardian'=>$nameG, 'occupation'=>$occ, 'income'=>$income,
		'dependents'=>$dep, 'phone'=>$ph,  'address'=>$address, 'select'=>$select, 'bcom_year'=>$byear, 'date'=>$dt, 'mobile'=>$mob,'bcom_part'=>$prt,'division'=>$div,
		'rollno'=>$roll, 'date'=>$dat]);
		
        $manager->executeBulkWrite('chintamanrao.bba_form_part2', $bulk);
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
 <table class="table table-bordered" >
    <thead>
      <tr>
        <th>Exam ination</th>
        <th>Exam seat no. & year of passing</th>
        <th>Name of board/university</th>
	<th>Subjects</th>
<th>Marks Obtained: Outof Total Marks</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>H.S.C</td>
        <td><input type="text" name="examno" class="form-control" id="usr" required></td>
        <td><input type="text" name="boardnm" class="form-control" id="usr" required></td>
	<td><input type="text" name="sub" class="form-control" id="usr" required></td>
	<td><input type="text" name="marks" class="form-control" id="usr" required></td>
	</tr>
     <tr>
        <td>B.B.A Part I</td>
        <td><input type="text" name="examnob1" class="form-control" id="usr" required></td>
	<td><input type="text" name="boardnmb1" class="form-control" id="usr" required></td>
        <td><input type="text" name="sub1" value="1." class="form-control" id="usr" required></td>
	<td><input type="text" name="marksb1" class="form-control" id="usr" required></td>
	
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub2" value="2." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub3" value="3." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub4" value="4." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub5" value="5." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub6" value="6." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	  
	  <tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub7" value="7." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	  
	<tr>
        <td></td>
        <td></td>
	<td></td>
    
	<td>Total</td>
	<td><input type="text"  name="subtot1" class="form-control" id="usr" required></td>
      </tr>

	
      <tr>
        <td>B.B.A Part II</td>
        <td><input type="text" name="examnob2" class="form-control" id="usr" required></td>
	<td><input type="text" name="boardnmb2" class="form-control" id="usr" required></td>
        <td><input type="text" name="sub11" value="1." class="form-control" id="usr" required></td>
	<td><input type="text" name="marksb2" class="form-control" id="usr" required></td>
	
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub22" value="2." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub33" value="3." class="form-control" id="usr"required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub44" value="4." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub55" value="5." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	<tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub66" value="6." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	  
	  <tr>
        <td></td>
        <td></td>
	<td></td>
        <td><input type="text" name="sub77" value="7." class="form-control" id="usr" required></td>
	<td></td>
	<td></td>
      </tr>
	  
	<tr>
        <td></td>
        <td></td>
	<td></td>
    
	<td>Total</td>
	<td><input type="text"  name="subtot2" class="form-control" id="usr" required></td>
      </tr>


    </tbody>
  </table>
  
</br></br></br>
<p>Date:&nbsp <input type="text" name="date" size="25" required> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
 Mobile No.<input type="text" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" name="mob" required >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Signature of Student

<hr>
<h3 class="text-center">Endorsement by the Guardian</h3>
<p>Name of the Guardian-full name (mother/father) Surname first:<input type="text" name="nameG" size="110" required  > 
<p>Occupation:&nbsp <input type="text" name="occ" size="20" required>&nbsp Annual Income Rs. &nbsp <input type="text" name="income" size="20" required>
&nbsp No. of dependents:&nbsp <input type="number" name="dep" min="0" step="1"/ required>&nbsp Phone no.&nbsp <input type="text" name="ph" size="20">
<p>Address:<input type="text" name="address" size="140" required> </p>
<p>I have permitted my &nbsp <select name="select" required>
  <option value="son">son</option>
  <option value="daughter">daughter</option>
  <option value="ward">ward</option>
  </select> to join the college.
<p>All the statements made by my ward in the application are true and correct.I undertake to abide by the rules and regulations of the college.I undertake to pay all the College fees,dues of my ward
and to see that he/she observes all the rules of discipline.I request you to admit my ward to B.B.A Part <input type="text" name="byear" size="20" >in your college.
</br></br><p>Date:&nbsp <input name="dt" type="text" size="20" required> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
 Mobile No.<input type="text" name="mob" maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" required >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Signature of Guardian
</br></br> <h3 class="text-center">Decision by the Principal</h3></br>
<p>Admitted to B.B.A Part &nbsp <input type="text" name="prt" size="25" >&nbsp &nbsp &nbsp &nbsp
Class Div:<input type="text" name="div" size="20" >&nbsp &nbsp &nbsp &nbsp Roll.No:<input type="text" name="roll" size="20" ></br></br></br></br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <Strong>Date:<input type="text" name="dat" size="20" > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Principal/Vice Principal</strong>
<hr>
<div class="text-center">
	<input type="submit" name="ss" class="btn btn-info" value="Save & Submit">
</div>
<div>
	 <ul class="pager">
    <li><a href="bba_form_part1.php">Previous</a></li>
  </ul>
</div>
</form>
</div>

</br></br></br></br>
</body>
</html>
