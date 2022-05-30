<?
$sum = $kor + $eng + $math;
$avg = $sum / 3;

if($kor > 100 || $eng > 100 || $math > 100){
        echo "올바른 값을 입력하세요.";
}
else{
    echo "이름 : $name<br>";
    echo "입력된 국어 성적 : $kor<br>";
    echo "입력된 영어 성적 : $eng<br>";
    echo "입력된 수학 성적 : $math<br>";
    echo "입력된 성적의 평균 : $avg<br>";
    if($avg >= 90){
        echo "성적은 A 입니다.";
    }
    else if($avg >= 80 && $avg <90){
        echo "성적은 B 입니다.";
    }
    else if($avg >= 70 && $avg <80){
        echo "성적은 C 입니다.";
    }
    else if($avg >= 60 && $avg <70){
        echo "성적은 D 입니다.";
    }
    else{
        echo "성적은 E 입니다.";
    }
}


?>