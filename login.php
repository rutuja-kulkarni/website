<?php
    if(isset($_POST['login'])) {
       					if($_GET["userid"] === "rutuja") 
							echo "user can login\n";


//$cursor = $manager->executeQuery('chintamanrao.login', $query); // $mongo contains the connection object to MongoDB


		
		//echo $name.'<br>'.$author.'<br>'.$copies;
 /*       $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('chintamanrao.login', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
      //  $bulk = new MongoDB\Driver\BulkWrite;
     //   $bulk->insert(['_id'=>$cn,'username' =>"rutuja", 'password' =>"rutuja"]);
     //   $manager->executeBulkWrite('chintamanrao.login', $bulk);	

					if($_GET["user"] === "rutuja") echo "user can login\n"; */

		
										
					
			
			

}


			
				
				 
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
                        <input type="text" name="user" class="form-control" id="userid" placeholder="User id">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" id="pwd" placeholder="Password">
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
