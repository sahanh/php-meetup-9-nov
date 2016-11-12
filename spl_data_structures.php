<?php
// $t_array = [1, 2, 3];

// $array    = new SplFixedArray(3);
// $array[0] = "s";
// $array[1] = 2;
// $array[2] = 3;

// $array->setSize(4);
// $array[3] = 5;

// foreach ($array as $value) {
//     echo $value."\n";
// }

//$array = [20, 4, 10, 5];

$heap = new SplMinHeap;
$heap->insert(20);
$heap->insert(4);
$heap->insert(10);
$heap->insert(5);

// $heap->insert(12);


// echo $heap->top();

// flaws with standard array in sorting
// 
// 
$stack = new SplQueue;
$stack->push(10);
$stack->push(["ss"]);
$stack->push(new StdClass);

for ($i=0; $i < 3; $i++) { 
    var_dump($stack->pop());
}
