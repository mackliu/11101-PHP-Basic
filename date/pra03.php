<h1>計算生日倒數</h1>
<?php
$birthday="04-25";
echo "你的生日是".$birthday."<br>";
//$now=strtotime('now');
$today=strtotime(date("Y-m-d"));
$mybirth=strtotime(date("Y-").$birthday);
$diff=0;
$result="";
if($mybirth-$today>0){
    $diff=($mybirth-$today)/(24*60*60);

    $result="距離你的生日還有<span style='color:red'>".$diff."</span>天";

}else if($mybirth-$today<0){
    $mybirth=strtotime("+1 year",$mybirth);
    $diff=($mybirth-$today)/(24*60*60);

    $result="距離你的生日還有<span style='color:red'>".$diff."</span>天";

}else{

    $result="今天是你的生日，祝你生日快樂";
}

echo $result;


?>
