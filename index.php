<?php

//1. Explain the difference between $var, $$var, and ${'var'} in PHP.

// $a="hello";//$(single dollar sign) to store a data.
// $$a="world";//A variable takes the value of a variable and treats that as the name of a variable.

// echo "$a {$$a}";//output hello world
// echo PHP_EOL;
// echo "$a $$a";//output hello $hello
// echo PHP_EOL;
// echo "$a $hello";//output hello world

// $Bar = "a";
// $Foo = "Bar";
// $World = "Foo";
// $Hello = "World";
// $a = "Hello";

// echo $a; //Returns Hello
// echo $$a; //Returns World
// echo $$$a; //Returns Foo
// echo $$$$a; //Returns Bar
// echo $$$$$a; //Returns a
// echo $$$$$$a; //Returns Hello 
//and so on ...

// ${'var'} This syntax is used for variable interpolation within strings. It allows us to dynamically include the value of a variable inside a string.
// $greeting = "Hello";
// $name = "Mahady";

// echo "${'greeting'}, $name!"; //is deprecated since PHP 8.2


        //2. Discuss the importance of variable scoping in PHP. How does PHP handle variable scope?


// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.

// $a = 1; /* global scope */ 

// function test()
// { 
//     echo $a; /* reference to local scope variable */ 
// } 

// test();


// By declaring $a and $b global within the function, all references to either variable will refer to the global version. There is no limit to the number of global variables that can be manipulated by a function.
// $a = 1;
// $b = 2;

// function Sum()
// {
//     global $a, $b;

//     $b = $a + $b;
// } 

// Sum();
// echo $b;
// echo PHP_EOL;

// The $GLOBALS array is an associative array with the name of the global variable being the key and the contents of that variable being the value of the array element. 

// $aa = 1;
// $bb = 2;

// function Sums()
// {
//     $GLOBALS['bb'] = $GLOBALS['aa'] + $GLOBALS['bb'];
// } 

// Sums();
// echo $bb;



// 03. What is variable interpolation in PHP? Provide an example.

/*
In PHP, variable interpolation refers to the technique of embedding the value of a variable directly within a string literal. This allows us to dynamically construct strings based on variable values, making our code more concise and flexible.
*/ 

/*
 Double-quoted strings: Variable interpolation only works with double-quoted strings ("). Single-quoted strings (') will treat the variable name literally rather than inserting its value. 
 */

/* 
Variable syntax: To include a variable inside a string, place the variable name prefixed with a dollar sign ($) within the double-quoted string. 
*/

// $name = "Mahady";
// $greeting = "Hello, {$name}!";

// echo $greeting; // Outputs "Hello, Alice!"


        
        //04. Describe the concept of variable variables in PHP. Provide an example to illustrate its usage.

/* 
Variable variables, or indirect variable access, are a special feature in PHP that allows us to use the value of one variable as the name of another variable. This can be useful in some specific situations, but it's generally considered an advanced technique due to its complexity and potential for confusion.
*/

/* 
Double Dollar Signs ($$var):
The value of the variable $var is used as the name of another variable.
*/

/* 
Curly Braces with Single Quotes (${'var'}):
Similar to the first method, but the variable name within single quotes is used dynamically.
*/
// $type = "name";
// $name = "John";
// $age = 30;

// Using double dollar signs:
// echo "Hello, {$$type}!"; // Outputs "Hello, John!" (indirectly accessing $name)

// Using curly braces with single quotes:
// $greeting = "Hello, ${'type'}!"; // Outputs "Hello, name!" (using $type's value as the name)
// echo $greeting;


        //05. How do you check if a variable is set and not null in PHP? Explain the significance of this check in preventing errors.


        // There are two primary ways to check if a variable is set and not null in PHP:

        // $var = "Some value";
        // $unsetVar; // Not explicitly set
        
        // if (isset($var)) {
        //     echo "Variable \$var is set and has a value: $var";
        // } else {
        //     echo "Variable \$var is not set.";
        // }
        // echo PHP_EOL;
        // if (isset($unsetVar)) {
        //     echo "Variable \$unsetVar is set (but might be null)";
        // } else {
        //     echo "Variable \$unsetVar is not explicitly set."; // This will be printed
        // }


        // 06. In PHP, what is the difference between == and === when comparing variables? Provide examples illustrating their differences.

// == (Loose comparison):
/* 
This operator performs a loose comparison, meaning it attempts to convert both operands to the same type before making the actual comparison.
*/

// $num = 5;
// $str = "5";

// if ($num == $str) {
//     echo "Loose comparison: They are equal!"; // Outputs "Loose comparison: They are equal!"
// } else {
//     echo "Loose comparison: They are not equal.";
// }

/* 
=== (Strict comparison):
This operator performs a strict comparison, meaning it checks both the value and the type of the operands.
If the values are the same and the types are identical, it returns true. Otherwise, it returns false.
*/

$num = 5;
$str = "5";

if ($num === $str) {
    echo "Strict comparison: They are equal!"; // This will not be printed
} else {
    echo "Strict comparison: They are not equal.";
}