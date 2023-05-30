<?php
$num = 30;
$masss = array();
$c = 0;
for($i = 1; $i < $num; $i++)
    if($num % $i == 0)
        {
            $masss[$c] = $i;
            $count++;
        }

echo $num;
foreach($masss as $value)
        echo "\n $value";

$masss1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$c1 = 0;
$sum = 0;
foreach($masss1 as $value)
{
    $sum += $value;
    $c1++;
    if($sum > 10)
    {
        echo "\n$c1";
        break;
    }
}
?>