<?php


function result($mark){

    $sum=0;
    $allSubject=count($mark);
    //mark range 
    foreach ($mark as $marks){
        if ($marks<0 || $marks>100){
            echo "Invalid mark";
            return;
        }
    }
     //fail condition
     foreach ($mark as $marks){
        if($marks<33){
            echo "Student has fail";
            return;
        }
    }

    //total mark
    $sum=0;
    foreach($mark as $marks){
        
        $sum=$sum+$marks;
        
      }
    

     //avg mark
    $averageMarks = $sum / $allSubject;
    
   
     // Grade Calculation
  $number_grade ="";
 switch (true) {
     case ($averageMarks >= 80 && $averageMarks <= 100):
        $number_grade ="A+";
         break;
     case ($averageMarks >= 70 && $averageMarks < 80):
        $number_grade ="A";
         break;
     case ($averageMarks >= 60 && $averageMarks < 70):
        $number_grade ="A-";
         break;
     case ($averageMarks >= 50 && $averageMarks < 60):
        $number_grade ="B";
         break;
     case ($averageMarks>= 40 && $averageMarks< 50):
        $number_grade ="C";
         break;
     case ($averageMarks >= 33 && $averageMarks < 40):
        $number_grade = "D";
         break;
     default:
         $ $number_grade ="F";
 } 
         echo "Avg mark is : $averageMarks <br> Total Mark is :  $sum <br> Grade is :  $number_grade";
}    

$mark =[99,80,70,90,90];
result($mark);









   