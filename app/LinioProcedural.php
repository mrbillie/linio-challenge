<?php

// My procedural first try

// The initial variables, fully configurable!
$multipleA = 3;
$multipleB = 5;
$valMultipleA = 'Linio';
$valMultipleB = 'IT';
$valMultipleAyB = 'Linianos';
$numbersToPrint = 100;

// Finds the string for a given number and its multiplies or returns the same number
function findVal($num, $multiple1, $multiple2, $valTrue) {
	if ( ((int)$num % $multiple1 == 0) && ((int)$num % $multiple2 == 0) && is_numeric($num) )
	{
		return $valTrue;
	} 
	return $num;
}

// The 'for' for numbers from 1 to 100
for ($i=1; $i<=$numbersToPrint; $i++){
    $returnNumOrVal = $i;
    $returnNumOrVal = findVal($returnNumOrVal, $multipleA, $multipleB, $valMultipleAyB);
    $returnNumOrVal = findVal($returnNumOrVal, $multipleA, 1, $valMultipleA);
    $returnNumOrVal = findVal($returnNumOrVal, $multipleB, 1, $valMultipleB);
    echo $returnNumOrVal."<br>";
}
