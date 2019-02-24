<?php
    $numbers = [3, 8, 7, 2, 4, 5, 1, 9, 6,11,10]; 
    $c = count($numbers);
    for ($i=0;$i<$c;$i++)
        {
            echo  $numbers[$i]."|";
        }
    $tmp = 0;
    $o = 0;
    for($o;$o<count($numbers);$o++)   
     {
        for ($i = (count($numbers)-1);$i>$o;$i--)
        {
            if ($numbers[$i] < $numbers[$i-1])
            { 
                $tmp = $numbers[$i];
                $numbers[$i] =  $numbers[$i-1];
                $numbers[$i-1] = $tmp;
            }
       
        }
    }
    echo "--------";
    for ($i=0;$i<$c;$i++)
        {
            echo  $numbers[$i]."|";
        }

?>