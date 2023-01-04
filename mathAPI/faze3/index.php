<?php

$data = array('numbers' => [1, 4, 7], "dttm" => date('Y-m-d h:i:s'));

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$result = file_get_contents('http://localhost/mathAPI/mathAPI/faze3/', false, $context);

echo $result;
?>