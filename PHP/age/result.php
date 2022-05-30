<?
    $pay = "10000원";
    if($age <= 3 || $age >=80){
        $pay = "무료";
    }
    else if(($age >= 3 && $age <=13) || ($hour >= 17 && $min >= 10)){
        $pay = "4000원";
    }
    else if(($age >=70 && $age<80) || ($age >=14 |$age <=18) || service==True || nation == True){
        $pay = "8000원";
    }
    echo "나이 : $age <br>";
    echo "입장시간 : $hour 시 $min 분 <br>";
    echo "가격 : $pay <br>";
    echo "국가 유공자 : $nation <br>";
    echo "복지카드 : $service";

?>