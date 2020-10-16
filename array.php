<?php
    $people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
    $myArray[0] = "John";
    $myArray[1] = "<strong>PHP</strong>";
    $myArray[2] = 21;

    echo "$myArray[0] is $myArray[2] and knows $myArray[1]";
    echo $people['Amy']; 
    
//Multi-Dimensional Arrays
    $people = array(
        'online'=>array('David', 'Amy'),
        'offline'=>array('John', 'Rob', 'Jack'),
        'away'=>array('Arthur', 'Daniel')
);

    echo $people['online'][0];
    echo "<br />";
    echo $people['away'][1];

?>
