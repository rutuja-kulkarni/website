<?php
    

    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
   
   $name='rutuja';
  
    //Extract results
    $query = new MongoDB\Driver\Query([]);
    $cursor = $manager->executeQuery('chintamanrao.login', $query);
    $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
   
    foreach($cursor as $item){
		
     /*   echo '<p> username:' . $item['username'] . '</p>';
        echo '<p> password:' . $item['password'] . '</p>';
		if($item['username']== $name)
		{echo "ok";
			break;}*/
		}

	
       /* echo '<p> Year:' . $item['year'] . '</p>';
        echo '<p> Division:' . $item['division'] . '</p>';
		echo '<p> date:' . $item['date'] . '</p>';
		echo '<p> paying/concession holder:' . $item['Paying'] . '</p>';
		echo '<p> Roll no:' . $item['rollno'] . '</p>';
		echo '<p> fees:' . $item['fee'] . '</p>';
		echo '<p> form no:' . $item['formno'] . '</p>';
		echo '<p> B.B.A year:' . $item['bba_year'] . '</p>';
		echo '<p> file to upload:' . $item['fileToUpload'] . '</p>';
		echo '<p> photo:' . $item['submitpic'] . '</p>';
		echo '<p> Rs.:' . $item['Rs'] . '</p>';
		echo '<p> per:' . $item['per'] . '</p>';
		echo '<p> Name:' . $item['name'] . '</p>';
		echo '<p> Address:' . $item['address'] . '</p>';
		echo '<p> Mobile:' . $item['mob'] . '</p>';
		echo '<p> Permanent address:' . $item['per_address'] . '</p>';
		echo '<p> Taluka:' . $item['taluka'] . '</p>';
		echo '<p> District:' . $item['district'] . '</p>';
		echo '<p> State:' . $item['state'] . '</p>';
		echo '<p> Rural/Urban:' . $item['rural/urban'] . '</p>';
		echo '<p> Date of birth:' . $item['dob'] . '</p>';
		echo '<p> Place of birth:' . $item['place_of_birth'] . '</p>';
		echo '<p> married/Unmarried:' . $item['marries/not_married'] . '</p>';
		echo '<p> male/female:' . $item['male/female'] . '</p>';
		echo '<p> caste:' . $item['caste'] . '</p>';
		echo '<p> Religion:' . $item['religion'] . '</p>';
		echo '<p> Category:' . $item['category'] . '</p>';
		echo '<p> any Scholarship/freeship:' . $item['scholarship/freeship'] . '</p>';
		echo '<p> last college attended:' . $item['last_college'] . '</p>';
		echo '<p> Year:' . $item['year_1ast_coll'] . '</p>';
		echo '<p> division:' . $item['div_last_coll'] . '</p>';
		echo '<p> Roll no:' . $item['roll_no_last_coll'] . '</p>';
		echo '<p> Blood Group:' . $item['blood_group'] . '</p>';
		echo '<p> Date:' . $item['date1'] . '</p>';
		echo '<p> Fee:' . $item['fee_rs'] . '</p>';
		echo '<p> Deposit:' . $item['deposit'] . '</p>';
		
        echo "<br><br><hr>";
    }

    //Some filtering for projection (Not working as of 23rd March)
    /*$filter = ['vehicle' => 1];
    $options = [
        'projection' => ['_id' => 0],
        'sort' => ['vehicle' => -1],
    ];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $manager->executeQuery('mongotest.try1', $query);

    foreach ($cursor as $document) {
        var_dump($document);
    }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
        
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="jquery\3.1.1/jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>

  
  <style type="text/css">
body {
    background:#333;
}
.form_bg {
    background-color:#eee;
    color:#666;
    padding:20px;
    border-radius:10px;
    position: absolute;
    border:1px solid #fff;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 320px;
    height: 280px;
}
.align-center {
    text-align:center;
}


	}
        
    </style>
</head>
<body>
</br></br></br></br>

    <div class="container">
        <div class="row">
            <div class="form_bg">
                <form action="" method="post">
                     <h2 class="text-center">Admin Login</h2>
                    <br/>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" id="userid" placeholder="User id">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" id="pwd" placeholder="Password">
                    </div>
                   
					<div class="form-group">
                        &nbsp &nbsp <a href="changepass.php"><small>Change Password</small></a> 
                    </div>
                    <div class="align-center">
                        <button type="submit" class="btn btn-default" name="login" id="login">Login</button>
                    </div>
					
                </form>
            </div>
        </div>
    </div>
	