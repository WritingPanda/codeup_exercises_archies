<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'A Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//Sorting the books with the information pertaining to each book

foreach ($books as $title => $details) {
    foreach ($details as $key => $value) {
        if ($key == 'published') {
            echo "{$title} was published in {$value}";
        } elseif ($key == 'author') {
            echo " and was written by {$value}.";
        } elseif ($key == 'pages') {
            echo " It has {$value} pages.\n\n";
        }
    }
}

//Solving for the last question in the exercise

echo "Which books were published after 1950?\n\n";

foreach ($books as $title => $details) {
    foreach ($details as $key => $value) {
        if ($key == 'published') {
            if ($value > 1950) {
                echo $title . PHP_EOL . PHP_EOL;
            }
        } 
    } 
}

echo "Trying the problem in a different way.\n\n";

//Testing out a different way of solving the problem

foreach ($books as $title => $book) {
    if ($book['published'] > 1950) {
        echo "{$book['author']} wrote $title, and published it in {$book['published']}.\n The book has {$book['pages']} pages.\n\n";
    }
}


?>