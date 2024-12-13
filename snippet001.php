<?php 
class sampleClass{};
$myObject = new sampleClass();

if ($myObject instanceof sampleClass)
    echo "My Object is an instance of sampleClass";
$a = 56;
echo gettype($a);
settype($a, double);
echo gettype($a);

/**php also provides some specific type-tesing functions.
 * Each takes a variable as an argument and returns either 
 * true or false..... the functions are 
 * 
 * is_array()--- check whether the variable is an array
 * is_double(),is_real(), is_float(), checks whether the variable is float
 * is_long(), is_int, is_integer(), check whether the variable is an integer
 * is_string(), check whether the variable is a boolean
 * is_object(), check whether the variable is an object
 * is_resource(), checks whether the variable is an object
 * is_null(), checks whether the variable is null
 * is_scalar(), check whether the variable is a scalar, i.e integer, bool, float or string
 * is-numeric(), check whether the variable is any kind of number or a numeric string
 * is_callable(), check whether the variable is a name of any valid function
 */

/**             Testing VAriable Status
 * php has several functions for testing the status of a variable.
 * The first is isset, which has rhe following prototype
 * 
 * bool isset(mixed var ) [;mixedvar[,...]])
 * this function takes a variable name as an argument and returns true 
 * if it exists and false otherwise, you can also pass in comma seperated list of variables
 * isset will return true, if all the variables are set
 * 
 * you can wipe  a variable out of existence by using its companion function, unset(), 
 * which has the following prototypes:
 * 
 * void unset(mixed var);[;mixed var[,...]])
  */
?>