<?php

require_once("./vendor/autoload.php");
require_once('./src/Activity.php');
require_once('./src/Triangle.php');
require_once('./src/Row.php');

$activity = new Activity();
$triangle = new Triangle(7, "#");
$row = new Row();

////OEFENING 1
//$toDo = $activity->getActivity();
//echo($toDo);

////OEFENING 2
//echo($triangle->rightAngledTriangle());
//echo($triangle->equilateralTriangle());
//echo($triangle->inverseRightAngledTriangle());
//echo($triangle->intervalEquilateralTriangle(6));

////OEFENING 3
//$numbers = $row->createRow(3, 7);
//var_dump($row->createRowStep(5,1, -2));

//$newNumbers = array_map(function ($number) {
//    return $number * 3;
//}, $numbers);
//
//var_dump($newNumbers);

