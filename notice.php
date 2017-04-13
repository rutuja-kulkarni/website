<?php
    if(isset($_POST['submit1'])) {
        $date=$_POST["date"];
		$title=$_POST["title"];
        $content=$_POST["content"];

        //echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['date' =>$date,'title' =>$title,'content'=>$content]);
        $manager->executeBulkWrite('chintamanrao.notice', $bulk);
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
<style type="text/css">
        
	.container{
	background-color:#9999ff;
	}
	
}
        
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="logo" style="float:left;">
		<img src="clogo.jpg" class="img-rounded" alt="Cinque Terre" width="200" height="140">
	</div>
	<center>
	<div class="head">
		<h4 style="text-align:center;margin-top:2%">Deccan Education Society's</h4>
		<h1 style="font-style:bold;margin-left:15%">Chintamanrao College of Commerce,Sangli.</h1>
		<h4 style="text-align:center">Phone : 0233-3025200, 3025201, 601362.</h4>
	</div>
	</center>
	
	<hr>
	<h1 class="text-center">NOTICE</h1>
	<p class="text-right"><form action="" method="post" class="text-right" ><strong style="font-size:18px">Date:</strong>
 <label for="date">Date of Birth</label>
	  					<input type="date" id="dt" name="date" placeholder="Enter required date"></p>

	<p><strong style="float:left;font-size:18px">Title</strong><input type="text" class="form-control" name="title" id="usr" required/></p>
	 <div class="form-group">
  <label for="comment" style="float:left;font-size:18px">Content</label>
  <textarea class="form-control" rows="5" id="comment" name="content" required/></textarea>
</div>
</p>
	<div class="text-center">
	<input type="submit" class="btn btn-info" name="submit1" value="Add Notice"> &nbsp &nbsp &nbsp &nbsp 
	<input type="reset" name="submit2" class="btn btn-info" value="Reset">
	</br></br>
	</div>
</form>
</div>