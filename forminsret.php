<?php
    if(isset($_POST['submit1'])) {
        $name=$_POST["bnm"];
        $author=$_POST["bauth"];
        $copies=$_POST["bcp"];
        //echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('booklib.books', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['_id'=>$cn,'book_name' =>$name, 'book_author' =>$author,'book_copies'=>$copies]);
        $manager->executeBulkWrite('booklib.books', $bulk);
    } 
?>
<html>
    <head>
        <title>Book form</title>
    </head>
    
    <form action="" method="post">
        <label for="nm">Name of the book</label><input type="text" id="nm" name="bnm" required><br>
        <label for="auth">Author of the book</label><input type="text" id="auth" name="bauth" required><br>
        <label for="copies">Copies of the book</label><input type="text" id="copies" name="bcp" required><br>
        <input type="submit" name="submit1">
        <input type="reset">
    </form>
</html>