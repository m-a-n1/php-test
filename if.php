<?php
$username = "Nour Homsi";
$email = "nh@gmail.com";

if($username !== "Nour Homsi" && $email !== "nh@gmail.com"){
    echo "welcome admin";
}
?>

<?php
$number1 = 20;
$number2 = 30;

if($number1 > $number2){
    echo "الرقم الاول اكبر";

    if($number1 === 20){
        echo "<br>"
        echo "الرقم الاول عشرون"
    }

}elseif($number1 < $number2){
    echo "الرقم الاول اصغر"
}else{
    echo "الرقمين متساويين"
}


?>