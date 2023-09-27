<?php



$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function oddArray($numbers){

    $evenNumbers = array_filter($numbers, function ($number) {
        return $number % 2 != 0;
    });
    
    print_r($evenNumbers);

}

oddArray($numbers);