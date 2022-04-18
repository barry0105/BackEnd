<?
    
    for($i=1;$i<=9;$i++){
        echo "<table border=1 width=100>";
        for($j=1;$j<=9;$j++){
            $gob = $i * $j;
            echo "<tr><td align=center> $i x $j = $gob </td></tr>";
        }
        echo "<br>";
        echo "</table>";
    }
    
?>