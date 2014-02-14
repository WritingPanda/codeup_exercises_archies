<?php

$filename = "todo_list.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
$contents_array = explode("\n", $contents);
foreach ($contents_array as $value) {
	echo $value . PHP_EOL;
}
fclose($handle);
?>