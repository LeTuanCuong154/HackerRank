<?php
    $numbers = [3, 8, 7, 2, 4, 5, 1, 9, 6,11,10]; 
    $o = 0;
    $c = count($numbers);
    function printnumbers($text)
    {

        global $c;
        global $numbers;
        echo $text . "<br>";
        for ($i=0;$i<$c;$i++)
        {
            echo  $numbers[$i]."|";
        }
            echo  "<br>";
    }
    printnumbers(Before);
    while($o<$c)
    {
        $o++;
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
    
    }
    printnumbers(After);
?>