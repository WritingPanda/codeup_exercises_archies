<?php

// $filename = "todo_list.txt";
// $handle = fopen($filename, "r");
// $contents = fread($handle, filesize($filename));
// $contents_array = explode("\n", $contents);
// foreach ($contents_array as $value) {
// 	echo $value . PHP_EOL;
// }
// fclose($handle);


$new_cities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$filename = "todo_list.txt";
$handle = fopen($filename, 'a');
foreach ($new_cities as $city) {
    fwrite($handle, PHP_EOL . $city);
}
fclose($handle);
?>