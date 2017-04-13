<?php
    if(isset($_POST['subform'])) {
        
		//echo $name.'<br>'.$author.'<br>'.$copies;
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        //Count number of rows to assign id
            $query = new MongoDB\Driver\Query([]);
            $cursor = $manager->executeQuery('chintamanrao.login', $query);
            $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
            $arr=$cursor->toArray();
            $cn=count($arr)+1;
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->		
		 $manager->executeBulkWrite('chintamanrao.login', $bulk);			
		}	
?>