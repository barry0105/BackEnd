<?
$num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);
$count = 10;
echo "���ĵǱ� �� : ";
for ($a=0; $a<10; $a++){
	echo $num[$a]." ";
}
echo "<br>";
for($i=0;$i<$count;$i++){
	for($j=0;$j<$count-1-$i;$j++){
		if($num[$j] > $num[$j+1]){
			$tmp = $num[$j];
			$num[$j] = $num[$j+1];
			$num[$j+1]=$tmp;
		}
	}
}
echo "�������� ����(���� ����) : ";
for ($a=0; $a<10; $a++) {
	echo $num[$a]." ";
}
?>