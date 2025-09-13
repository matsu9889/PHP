<?php
function triangle($width,$height){
    $total= ($width * $height) /2;
    return $total;
}

function Square($width,$height){
    $total= ($width * $height);
    return $total;
}

function Trapezoid($upperBase,$lowerBase,$height){
    $total= ($upperBase + $lowerBase) * $height / 2;
    return $total;
}

echo triangle(10,6) . "\n";
echo Square(10,6) . "\n";
echo Trapezoid(4,5,4);

