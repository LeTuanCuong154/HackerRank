<?php
    $numbers = [3, 8, 7, 2, 4, 5, 1, 9, 6,11,10]; 
    $o = 0;
    $c = count($numbers);
    echo "Before <br>";
    echo implode(', ',$numbers);
    while($o<$c)
    {
        $i = ($c-1);
        while($i>$o)
        {
            if ($numbers[$i] < $numbers[$i-1])
            { 
                $tmp            = $numbers[$i];
                $numbers[$i]    = $numbers[$i-1];
                $numbers[$i-1]  = $tmp;
            }
            $i--;
        }
        $o++;
    }
    echo "After <br>" ;
    echo implode(', ',$numbers);
?>