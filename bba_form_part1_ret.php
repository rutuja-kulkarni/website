<?php
    

    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    //This program will perform addition of entries in the database

    /*$name1="Shivani";
    $name2="Rutuja";
    $name3="Pooja";
    $veh1="Activa";  
    $veh2="Activa";   
    $veh3="Access";  
        
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert(['name' => $name1, 'prn' => "2014bit012", 'class' => 'tyit', 'vehicle' => $veh1]);
    $bulk->insert(['name' => $name2, 'prn' => "2014bit059", 'class' => 'tyit', 'vehicle' => $veh2]);
    $bulk->insert(['name' => $name3, 'prn' => "2014bit032", 'class' => 'tyit', 'vehicle' => $veh3]);
    $manager->executeBulkWrite('mongotest.try1', $bulk);*/

    //Extract results
    $query = new MongoDB\Driver\Query([]);
    $cursor = $manager->executeQuery('chintamanrao.bba_form_part1', $query);
    $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
    //var_dump($cursor->toArray());     //This prints an associative array of all documents
    //For loop to retrieve all the elements from associative array
    //$arr=$cursor->toArray();
    //echo count($cursor); count of array elements
    foreach($cursor as $item){
		
        echo '<p> B.B.A:' . $item['bba'] . '</p>';
        echo '<p> Receipt:' . $item['receipt'] . '</p>';
        echo '<p> Year:' . $item['year'] . '</p>';
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