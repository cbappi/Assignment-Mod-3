<?php


function modifiedTex($text){

    $lowercase = strtolower($text);
    $search = "brown";
    $replace = "red";

    $modifiedText = str_replace($search,$replace,$lowercase);
    echo $modifiedText;


}
$text = "The quick brown fox jumps over the lazy dog.";
modifiedTex($text);