> # PHP - functions and data types
***

> ### This code is written in PHP and it's creating a new PHP script file called "functions.php".
***

> # Step one
> ### The code starts by creating an array with $variables.
> ### $variables contains four different values: "13", "13.1", "true", and "'string'".
***

> # Step two
>> ### Then, a string called $script is created which starts with the opening PHP tag. 
>> ### Then, four functions are created called F1, F2, F3, and F4. 
>> ### That functions take a single argument called $x and return it as an integer, float, boolean, or string depending on which function it is.
***

> # Step three
>> ### Finally, four foreach loops are executed, each one is looping over the $variables array. 
>> ### In each loop, the var_dump function is called with the result of one of the functions F1, F2, F3, or F4. 
>> ### This will output the result of the function and its type.
***

> # Step four
>> # Finally, the $script string is saved to a file called "types.php" using the file_put_contents function.