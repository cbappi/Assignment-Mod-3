<?php

$grades = [85, 92, 78, 88, 95];
function sortGrading($grades){

    rsort($grades);
    print_r($grades);

}

sortGrading($grades);