<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$n);
$phoneBook = [];
$queryList = [];
 
if(1 <= $n && $n <= 100000) 
{
    while($fileInput = fgets($_fp)) 
    {
         if(strpos($fileInput, " ")) {
            $array = explode(" ", $fileInput);
            $phoneBook += [$array[0]=>$array[1]];
                } else 
                    {
                        array_push($queryList, $fileInput);
                    }
    }
}
 
$totalQuery = count($queryList);
    if (1 <= $totalQuery && $totalQuery <= 100000) {
        for($i=0; $i<$totalQuery; $i++) {
    $query = trim($queryList[$i]);
    if(array_key_exists($query, $phoneBook)) 
     {
        echo $query."=".$phoneBook[$query];
     } 
     else 
        {
            echo "Not found\n";
        }
 }
}

