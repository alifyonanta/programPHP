<?php
    $today = 'Tue';

    switch ($today) {
        case "Mon":
            echo "Today is Monday.";
            break;
        case "Tue":
            echo "Today is Tuesday.";
            break;
        case "Wed":
            echo "Today is Wednesday.";
            break;
        case "Thu":
            echo "Today is Thursday.";
            break;
        case "Fri":
             echo "Today is Friday.";
             break;
        case "Sat":
             echo "Today is Saturday.";
             break;
        case "Sun":
             echo "Today is Sunday.";
             break;
        default:
             echo "Invalid day.";
    }
    
     $x=5;
    switch ($x) {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        default:
            echo "No match";
    }


    $day = 'Wed';

    switch ($day) {
        case 'Mon':
            echo 'First day of the week';
            break;
        case 'Tue':
        case 'Wed':
        case 'Thu':
            echo 'Working day';
            break;
        case 'Fri':
            echo 'Friday!';
            break;
        default:
            echo 'Weekend!';
    }
    
        for ($i=0; $i<10; $i++) {
        if ($i%2==0) {
            continue;
        }
        echo $i . ' ';
    }
?>
