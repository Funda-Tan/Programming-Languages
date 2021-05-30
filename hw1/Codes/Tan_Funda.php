<!DOCTYPE html>
<html>
<body>

<?php
$a = true;
$b = true;
$c = false;

$result = $a && $b;
var_dump($result);

$result = $a || $b;
var_dump($result);

$result = $a xor $b;
var_dump($result);

$result = !$a;
var_dump($result);

$result = $a and $b;
var_dump($result);

$result = $a or $b;
var_dump($result);

//Precedence
//&& and ||
$result = ($a || $b) && $c;
var_dump($result);
$result = $a || ($b && $c);
var_dump($result);
$result = $a || $b && $c;
var_dump($result);
//&& has precedence over ||

//&& and xor
$result = ($a xor $b) && $c;
var_dump($result);
$result = $a xor ($b && $c);
var_dump($result);
$result = $a xor $b && $c;
var_dump($result);
//&& has precedence over xor

//&& and and
$result = ($a and $b) && $c;
var_dump($result);
$result = $a and ($b && $c);
var_dump($result);
$result = $a and $b && $c;
var_dump($result);
//&& has precedence over and

//&& and or
$result = ($a or $b) && $c;
var_dump($result);
$result = $a or ($b && $c);
var_dump($result);
$result = $a or $b && $c;
var_dump($result);
//&& has precedence over or

//&& and !
$result = (!$a) && $c;
var_dump($result);
$result = !($a && $c);
var_dump($result);
$result = !$a && $c;
var_dump($result);
//! has precedence over &&

//|| and xor
$result = ($a xor $b) || $c;
var_dump($result);
$result = $a xor ($b || $c);
var_dump($result);
$result = $a xor $b || $c;
var_dump($result);
//|| has precedence over xor

//|| and or
$result = ($c or $c) || $b;
var_dump($result);
$result = $c or ($c || $b);
var_dump($result);
$result = $c or $c || $b;
var_dump($result);
//|| has precedence over or

//|| and and
$result = ($c and $c) || $b;
var_dump($result);
$result = $c and ($c || $b);
var_dump($result);
$result = $c and $c || $b;
var_dump($result);
//|| has precedence over and

//and and xor
$result = ($a xor $b) and $b;
var_dump($result);
$result = $a xor ($b and $b);
var_dump($result);
$result = $a xor $b and $b;
var_dump($result);
//and has precedence over xor

//and and or
$result = ($c or $b) and $c;
var_dump($result);
$result = $c or ($b and $c);
var_dump($result);
$result = $c or $b and $c;
var_dump($result);
//and has precedence over or

//or and xor
$result = ($c xor $b) or $c;
var_dump($result);
$result = $c xor ($b or $c);
var_dump($result);
$result = $c xor $b or $c;
var_dump($result);
//xor has precedence over or
//Precedecne order is : ! - && - || - and - xor - or

//Operator associativity rules and operand evaluation order
function func1(){
    echo "func1 ";
    return true;
}

function func2(){
    echo "func2 ";
    return true;
}

function func3(){
    echo "func3 ";
    return true;
}

$result = func1() && func2() && func3();
echo "\n";
var_dump($result);

$result = !func1() || !func2() || func3();
echo "\n";
var_dump($result);

$result = func1() and func2() and func3();
echo "\n";
var_dump($result);

$result = !func1() or !func2() or func3();
echo "\n";
var_dump($result);

$result = func1() xor func2() xor func3();
echo "\n";
var_dump($result);

   /* &&, ||, and, or, xor operators has left to right associativity because leftmost function is
       evaluated first*/

   /* &&, ||, and, or, xor operands are evaluated left to right because they evaluated func1 and stopped. Operand evaluation order is from left to right for AND and OR operators.*/

$a = false;
$b = false;

$result = !$a && $b;
var_dump($result);

$result = !($a && $b);
var_dump($result);

$result = (!$a) && $b;
var_dump($result);
   //Result of !a && b is like (!a) && b so ! operator is right associative

//Short-circuit evaluation
$result = !func1() && func2() && func3();
echo "\n";

$result = func1() || func2() || func3();
echo "\n";

$result = !func1() and func2() and func3();
echo "\n";

$result = func1() or func2() or func3();
echo "\n";
/* &&, ||, and, or operators are short-circuit because only func1 is called,
func2 and func3 is disregarded*/

?>

</body>
</html>
