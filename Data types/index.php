<?php

# created by Gh0st-ed

$variables = ["13", "13.1", "true", "'string'"];

$script = "<?php\n\n";

$script .= "function F1(\$x) : int\n{\n    return (int)\$x;\n}\n";
$script .= "function F2(\$x) : float\n{\n    return (float)\$x;\n}\n";
$script .= "function F3(\$x) : bool\n{\n    return (bool)\$x;\n}\n";
$script .= "function F4(\$x) : string\n{\n    return (string)\$x;\n}\n";

foreach($variables as $variable){
    $script .= "var_dump(F1($variable));\n";
}
foreach($variables as $variable){
    $script .= "var_dump(F2($variable));\n";
}
foreach($variables as $variable){
    $script .= "var_dump(F3($variable));\n";
}
foreach($variables as $variable){
    $script .= "var_dump(F4($variable));\n";
}

$script .= "?>";
file_put_contents("functions.php", $script);

?>
