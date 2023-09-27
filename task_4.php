<?php

$studentGrades = array(
    "Joshim" => array(
        "Math" => 80,
        "English" => 70,
        "Science" => 90
    ),

    "Fokrul" => array(
        "Math" => 60,
        "English" => 59,
        "Science" => 61
    ),

    "Bappi" => array(
        "Math" => 50,
        "English" => 52,
        "Science" => 55
    )
);

function gradeChecker($studentGrades){

    foreach($studentGrades as $studentname => $numbers) {
        
        $sum = 0;
        foreach($numbers as $key => $value) {
           
            $sum = $sum + $value;
    
        }
          
            if($sum/3>=80){
                echo" {$studentname} Got  -  A+";
                echo"<br/>";
              }

              elseif($sum/3>=60 && $sum/3<80 ){
                echo" {$studentname} Got  -  A";
                echo"<br/>";
              } 
    
              elseif($sum/3>=50 && $sum/3<60 ){
                echo" {$studentname} Got  -  B";
                echo"<br/>";
              } 
    
              
              elseif($sum/3>=33 && $sum/3<50){
                echo" {$studentname} Got  -  C";
                echo"<br/>";
              } 

              elseif($sum/3<33){
                echo" {$studentname} Got  -  F";
                echo"<br/>";
              } 
            
        }
    


}

gradeChecker($studentGrades);