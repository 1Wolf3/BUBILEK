<?php

function F1($x) : int
{
    return (int)$x;
}
function F2($x) : float
{
    return (float)$x;
}
function F3($x) : bool
{
    return (bool)$x;
}
function F4($x) : string
{
    return (string)$x;
}
var_dump(F1(13));
var_dump(F1(13.1));
var_dump(F1(true));
var_dump(F1('string'));
var_dump(F2(13));
var_dump(F2(13.1));
var_dump(F2(true));
var_dump(F2('string'));
var_dump(F3(13));
var_dump(F3(13.1));
var_dump(F3(true));
var_dump(F3('string'));
var_dump(F4(13));
var_dump(F4(13.1));
var_dump(F4(true));
var_dump(F4('string'));
?>