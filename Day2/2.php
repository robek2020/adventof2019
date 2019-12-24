<?php

function runIntcodeFromInput(&$input, $noun, $verb) {
    $input[1] = $noun;
    $input[2] = $verb;
    for ($i = 0; $i < sizeof($input); $i = $i + 4) {
        if($input[$i] == 1) {
            $input[$i + 3] = $input[$i + 1] + $input[$i + 2];
        } elseif($input[$i] == 2) {
            $input[$i + 3] = $input[$i + 2] * $input[$i + 2];
        } elseif($input[$i] == 99) {
            break;
        } else {
            echo "Something went wrong";
            break;
        }
    }
}

$input = explode(",", file_get_contents('inputs/input.txt'));
$inputPart1 = $input;
runIntcodeFromInput($input, 12, 2);

print_r("Answer 1: " . $input[0] . "\r\n");

$input2 = $input;


