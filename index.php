<?php
$total="98";
$total2="78";
$total3="45";
$avg = ($total+$total2+$total3)/3;
 $grade ='';

 switch ($avg){
        case $avg>=90:
            $grade = 'A';
            break;
        case $avg>=80:
            $grade = 'B';
            break;
        case $avg>=70:
            $grade = 'C';
            break;
        case $avg>=60:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            
 };
   

echo "your letter grade is" . $grade;








?>