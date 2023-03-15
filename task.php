<?php

// Task 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

$arr = array("apple", "banana", "orange", "pear");

function arrayByLenth($arr) {
    usort($arr, function($a, $b) {
        return (strlen($a) - strlen($b));
    });

    return $arr;
}

// print_r(arrayByLenth($arr));

// Task 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

$fStr = 'First string';
$lStr = 'Last string';

function concatenateTwoStrings($a, $b) {
    $a = explode(' ',$a);
    $a = array_shift($a);
    
    $b = explode(' ',$b);
    $b = strrev(array_pop($b));

    return ($a.' '.$b);
}
// echo concatenateTwoStrings($fStr, $lStr);

// Task 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$array = array("apple", "banana", "orange", "pear");

function removeLFARA($array){
    array_pop($array);
    array_shift($array);

    return $array;
}
$newArray = removeLFARA($array);
// print_r($newArroy);


// Task 4.Write a PHP function to check if a string contains only letters and whitespace.
function contains_only_letters_and_whitespace($str) {
    if ( preg_match ("/^[a-zA-Z\s]+$/",$str)) {
        $result = "string contains only letters and whitespace";
    } else {
        $result = "not string contains only letters and whitespace";
    }
    return $result;
}
$str1 = "Hello world";
$str2 = "Hello world, hi";

echo contains_only_letters_and_whitespace($str1).PHP_EOL;
echo contains_only_letters_and_whitespace($str2);

// Task 5.Write a PHP function to find the second largest number in an array of numbers.
$numbers = array(5, 3, 32, 1, 10);
function findSecondLargestNum(array $arr):int {
    if(count($arr) <= 2) {
        return "Please send minimum 3 values";
    }

    usort($arr, function($a, $b) {
        return ($a < $b);
    });

    return $arr[1];
}

// echo findSecondLargestNum($numbers);