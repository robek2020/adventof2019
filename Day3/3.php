<?php

function buildCoordinateArray($lineInput) {
    $linePos = [0,0];
    $line = [$linePos];
    for ($i = 0; $i < sizeof($lineInput) - 1; $i++) {
        $lineEnd = $linePos;
        $change = intval(preg_replace("/[0-9]/", "", $lineInput[$i]));
        switch ($lineInput[$i][0]) {
            case 'L':
                $lineEnd[0] -= $change;
                break;
            case 'R':
                $lineEnd[0] += $change;
                break;
            case 'U':
                $lineEnd[1] += $change;
                break;
            case 'D':
                $lineEnd[1] -= $change;
                break;
            default:
                break;
        }
        $line[] = $lineEnd;
    }
    return $line;
}

$lines = [];

foreach(file('inputs/input.txt') as $line) {
    $lines[] = explode(",", $line);
}

$firstLineRaw = $lines[0];
$secondLineRaw = $lines[1];

//build arrays of coordinates for each point
$firstLine = buildCoordinateArray($firstLineRaw);
$secondLine = buildCoordinateArray($secondLineRaw);

foreach($firstLine as $lineCoord) {
    print_r("<div>[" . $lineCoord[0] . "," . $lineCoord[1] . "]</div>");
}

