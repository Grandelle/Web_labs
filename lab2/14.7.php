<?php
$a = rand();
$b = rand();
echo abs($a - $b);

$masss = array(1, 2, -1, -2, 3, -3);
for($i = 0; $i < count($masss); $i++)
    if($masss[$i] < 0)
        $masss[$i] = abs($masss[$i]);
?>