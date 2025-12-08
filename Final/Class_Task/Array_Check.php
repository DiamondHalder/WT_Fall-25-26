<?php
$number = array(80, 40, 60,30,15 );

$highest= $number[0];

for ($i = 1; $i < 5; $i++) {
   
    if ($number[$i] > $highest) {
        $highest = $number[$i];
    }
}

echo "Highest Number: " . $highest . "<br>";



if ($highest % 2 == 0) {
    echo "The highest number is Even<br>"; 
} else {
    echo "The highest number is Odd<br>"; 
}

?>