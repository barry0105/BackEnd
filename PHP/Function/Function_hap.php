<?
function hap($a, $b)
{
    $sum=0;
    while($a<=$b)
    {
        $sum=$sum+$a;
        $a++;
    }
    return $sum;
}
$total = hap($from, $to); 
echo"$from ���� $to ������ �� : $total";
?>