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
    $cursor = $manager->executeQuery('chintamanrao.form_part2', $query);
    $cursor->setTypeMap(['root' => 'array', 'document' => 'array', 'array' => 'array']);
    //var_dump($cursor->toArray());     //This prints an associative array of all documents
    //For loop to retrieve all the elements from associative array
    //$arr=$cursor->toArray();
    //echo count($cursor); count of array elements
    foreach($cursor as $item){
		
        echo '<p> Exam seat no. & year of passing:' . $item['seatno'] . '</p>';
        echo '<p> Name of board/university:' . $item['board/university'] . '</p>';
        echo '<p> Subjects bcom1:' . $item['sub'] . '</p>';
        echo '<p> marks/out of:' . $item['marks'] . '</p>';
		echo '<p> Exam seat no. & year of passing bcom1:' . $item['examnob1'] . '</p>';
		echo '<p> Name of board/university:' . $item['boardnmb1'] . '</p>';
		echo '<p> Subject 1:' . $item['sub_bcom1'] . '</p>';
		echo '<p> marks/out of -bcom1:' . $item['marksb1'] . '</p>';
		echo '<p> Subject 2:' . $item['sub2'] . '</p>';
		echo '<p> Subject 3:' . $item['sub3'] . '</p>';
		echo '<p> Subject 4:' . $item['sub4'] . '</p>';
		echo '<p> Subject 5:' . $item['sub5'] . '</p>';
		echo '<p> Subject 6:' . $item['sub6'] . '</p>';
		echo '<p> Total:' . $item['total1'] . '</p>';
		echo '<p> Exam seat no. & year of passing bcom2:' . $item['seatno_bcom'] . '</p>';
		echo '<p> Name of board/university:' . $item['boardnmb2'] . '</p>';
		echo '<p> subjects bcom2:' . $item['sub_bcom2'] . '</p>';
		echo '<p> marks/out of -bcom2:' . $item['marksb2'] . '</p>';
		echo '<p> Subject 2:' . $item['sub22'] . '</p>';
		echo '<p> Subject 3:' . $item['sub33'] . '</p>';
		echo '<p> Subject 4:' . $item['sub44'] . '</p>';
		echo '<p> Subject 5:' . $item['sub55'] . '</p>';
		echo '<p> Subject 6:' . $item['sub66'] . '</p>';
		echo '<p> Total:' . $item['total2'] . '</p>';
		echo '<p> sub_selected_grp1_1:' . $item['sub_selected_grp1_1'] . '</p>';
		echo '<p> sub_selected_grp1_2:' . $item['sub_selected_grp1_2'] . '</p>';
		echo '<p> sub_selected_grp2_1:' . $item['sub_selected_grp2_1'] . '</p>';
		echo '<p> Date:' . $item['date'] . '</p>';
		echo '<p> mobile:' . $item['mobile'] . '</p>';
		echo '<p> name_of_guardian:' . $item['name_of_guardian'] . '</p>';
		echo '<p> occupation:' . $item['occupation'] . '</p>';
		echo '<p> income:' . $item['income'] . '</p>';
		echo '<p> No of dependents:' . $item['dependents'] . '</p>';
		echo '<p> phone:' . $item['phone'] . '</p>';
		echo '<p> address:' . $item['address'] . '</p>';
		echo '<p> son/daughter/ward:' . $item['select'] . '</p>';
		echo '<p> bcom year:' . $item['bcom_year'] . '</p>';
		echo '<p> date:' . $item['date'] . '</p>';
		echo '<p> mobile:' . $item['mobile'] . '</p>';
		echo '<p> bcom_part:' . $item['bcom_part'] . '</p>';
		echo '<p> division:' . $item['division'] . '</p>';
		echo '<p> rollno:' . $item['rollno'] . '</p>';
		echo '<p> date:' . $item['date'] . '</p>';

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