<?php

fwrite(STDOUT, 'What is your name? ');

$first_name = fgets(STDIN);

fwrite(STDOUT, "Hello, $first_name");

fwrite(STDOUT, 'How are you doing today? ');

$status = fgets(STDIN);

fwrite(STDOUT, "Sounds great.\n\n\n");

?>