<?php
function getTriangleArea($base,$height)
{
    return $base * $height / 2;
}
        function getSquareArea($base,$height)
        {
            return $base * $height;
        }
        function getTrapezoidArea($upperBase,$bottombase,$height)
        {
            return ($upperBase + $bottombase) * $height / 2;
        }

echo getTriangleArea(5,5) . "\n";
echo getSquareArea(7,8) . "\n";
echo getTrapezoidArea(4,5,4); "\n";



// function getTriangleArea($base,$height)
// {
//     return $base * $height / 2;
// }
// function getSquareArea($base,$height)
// {
//     return $base * $height;
// }
// function getTrapezoidArea ($upperbase,$lowerbase,$height)
// {
//     return ($upperBase + $lowerBase) * $height / 2;
// }

// echo getTriangleArea(5,5) . "\n";
// echo getSquareArea(7,8) . "\n";
// echo getTrapezoidArea(6,4,8) . "\n";