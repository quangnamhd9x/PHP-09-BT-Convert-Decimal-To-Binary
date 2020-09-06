<?php
include_once 'Stack.php';

$stack = new Stack();
print_r($stack->binaryConverter(12));
echo "<br>";
print_r($stack->binaryConverter1(53));
echo "<br>";
print_r($stack->convert());