<?php

$url = $_SERVER["REQUEST_URI"];
$data = explode("/", $url);

$operace = $data[5];
echo $operace;

for ($i = 0; $i < 5; $i++){
    array_shift($data);
}

var_dump($data);

$operator = filter_input(INPUT_GET, 'operator');
$numbers = filter_input(INPUT_GET, 'numbers', FILTER_DEFAULT);
$numbersArray = explode(",", $numbers);
$numbersArrayLength = count($numbersArray);

switch ($operator) {
    case "add": {
        for ($i = 0; $i < $numbersArrayLength; $i++) {
            $result += $numbersArray[$i];
        }
        break;
    }

    case "sub": {
        for ($i = 0; $i < $numbersArrayLength; $i++) {
            if ($i == 0) {
                $result = $numbersArray[$i];
                continue;
            }
            $result -= $numbersArray[$i];
        }
        break;
    }

    case "mul": {
        for ($i = 0; $i < $numbersArrayLength; $i++) {
            if ($i == 0) {
                $result = $numbersArray[$i];
                continue;
            }
            $result *= $numbersArray[$i];
        }
        break;
    }

    case "div": {
        for ($i = 0; $i < $numbersArrayLength; $i++) {
            if ($i == 0) {
                $result = $numbersArray[$i];
                continue;
            }
            $result /= $numbersArray[$i];
        }
        break;
    }

    case "mod": {
        for ($i = 0; $i < $numbersArrayLength; $i++) {
            if ($i == 0) {
                $result = $numbersArray[$i];
                continue;
            }
            $result %= $numbersArray[$i];
        }
        break;
    }

    case "sqrt": {
        if ($numbersArrayLength > 1)
            $report = "ERROR_TOO_MANY_NUMBERS";
        $result = sqrt($numbersArray[0]);
        break;
    }
    default: {
        $report = "UNKNOWN_OPERATION";
    }
}

?>