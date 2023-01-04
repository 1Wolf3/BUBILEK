<?php
$operator = filter_input(INPUT_GET, 'operator');
$numbers = filter_input(INPUT_GET, 'numbers', FILTER_DEFAULT);
$numbersArray = explode(",", $numbers);
$numbersArrayLength = count($numbersArray);

$report = "OK";
$result = 0;

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

$finalResponse = [
    "report" => $report,
    "result" => $result
];

echo json_encode($finalResponse);

?>