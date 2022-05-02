<?
    echo "<table border=1 width=1000>";
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=9;$j++){
            $gob = $i * $j;
            echo "<td align=center> $i x $j = $gob </td>";
        }
        echo "</tr>";
    }
echo "</table>";
    
?>