<?php

$input = explode(",", file_get_contents('inputs/input.txt'));

$input[1] = 12;
$input[2] = 2;
for ($i = 0; $i < sizeof($input); $i = $i + 4) {
    if($i == 1) {
        $input[$i + 3] = $input[$i + 1] + $input[$i + 2];
    } elseif($i == 2) {
        $input[$i + 3] = $input[$i + 2] * $input[$i + 2];
    } elseif($i == 99) {
        break;
    } else {
        echo "Something went wrong";
        break;
    }
}
echo $input[0];
