<?php
$masss = [5,67,8,2,45,3,1];
$result = masss_sum($masss) / count($masss);
echo "\n" . $result;


echo "\n" . masss_sum(range(1, 100));

echo "\n";

$masss1 = [4,7,63,77,23,1];
function sqrtt($a)
{
    return sqrtt($a);
}
$masss1 = masss1_map('sqrt', $masss1);
foreach($masss1 as $v)
    echo $v . "\n";


$k = 1;
$masss2 = masss2_comb(range('a', 'z'), range(1, 26));
while($k <= 26)
{
    echo key($masss2) . "\n" . current($masss2) . "\n";
    next($masss2);
    $k++;
}  


$a = "1234567890";
$masss3 = str_split($a, 2);
echo masss3_sum($masss3);
?>