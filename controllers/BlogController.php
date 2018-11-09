<?php

require_once MODELS.'Post.php';

$array = array_combine($keys, $value0);
print_r($array);

// var_dump($data[0][0]);

// print count($data);
// print count($data[0]);
// print count($data[0][0]);
// print count($data, 1);


// echo "<h2>While</h2>";
// $i = count($data[0]) - 1;
// while ($i >= 0):
//     var_dump($data[0][$i]);
//     $i--;
// endwhile;

// echo "<h2>For</h2>";
// for ($i=0; $i<count($data[0]); $i++) {
//     var_dump($data[0][$i]);
// } 

// echo "<h2>ForEach</h2>";
// foreach ($data[0] as $value) {
//     echo "<br>";
//     var_dump($value);
// }

// echo "<h2>ForEach key => value</h2>";


// foreach ($data[0] as $key => $value) {
//     echo "Ключ: $key"; 
//     echo "<br>";
//     var_dump($value);
// }

// echo "<h2>ForEach key => value</h2>";
// foreach ($data[0] as $value) {
//     foreach ($value as $key => $field) {
//         echo "<br>";
//         echo "Ключ: $key"; 
//         echo "<br>";
//         echo "Field: $field"; 
//     }
// }

// $posts =[];

// for ($i=0; $i<count($data[0]); $i++) {
//     array_push($posts, array_combine($keys, $data[0][$i])); 
// } 

// var_dump($posts);


// require_once VIEWS.'blog/index.php';