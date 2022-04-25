<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
        }

        table td{
            padding:5px;
            text-align: center;
            border:1px solid #aaa;
        }

    </style>
</head>
<body>
<?php
$month=4;

?>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

$firstDay=date("Y-").$month."-1";
$firstWeekday=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));
$lastDay=date("Y-").$month."-".$monthDays;

echo "月份".$month;
echo "<br>";
echo "第一天是".$firstDay;
echo "<br>";
echo "第一天是星期".$firstWeekday;
echo "<br>";
echo "最後一天是".$lastDay;
echo "<br>";
echo "當月天數共".$monthDays;
echo "<br>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    
    for($j=0;$j<7;$j++){

        echo "<td>";
        if($i==0 && $j==$firstWeekday){
            echo "第一天";
        }else if($i==0 && $j<$firstWeekday){
            echo "";
        }else{
            echo $i*7+($j+1);
        }
        echo "</td>";

    }

    echo "</tr>";
}



?>


</table>



</body>
</html>