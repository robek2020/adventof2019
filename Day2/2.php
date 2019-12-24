<?php

function runIntcodeFromInput(&$input, $noun, $verb) {
    $input[1] = $noun;
    $input[2] = $verb;
    for ($i = 0; $i < sizeof($input); $i = $i + 4) {
        if($input[$i] == 1) {
            $input[$input[$i + 3]] = $input[$input[$i + 1]] + $input[$input[$i + 2]];
        } elseif($input[$i] == 2) {
            $input[$input[$i + 3]] = $input[$input[$i + 1]] * $input[$input[$i + 2]];
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
$inputPart2 = $input;
runIntcodeFromInput($inputPart1, 12, 2);

print_r("<div>Answer 1: " . $inputPart1[0] . "</div>");

for ($i = 0; $i <= 99; $i++) {
    for ($j = 0; $j <= 99; $j++) {
        $inputPart2 = $input;
        runIntcodeFromInput($inputPart2, $i, $j);
        if ($inputPart2[0] === 19690720) {
            print_r("<div>Answer 2:  " . ((100*$i)+$j) . "</div>");
            break;
        }
    }
}
