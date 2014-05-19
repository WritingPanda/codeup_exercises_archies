<?php 

$hand = ['A-H', '5-D', 'K-C', 'A-S', '4-H'];

function getTotal($array) {
    $total = 0;
    $cardValue = [];
    $ace = 0;

    foreach ($array as $card) {
        $card = explode('-', $card);
        switch ($card[0]) {
            case 'A':
                $ace = 11;
                $cardValue[] = &$ace;
                break;
            case 'K':
            case 'Q':
            case 'J':
                $cardValue[] = 10;
                break;
            case '10':
                $cardValue[] = 10;
                break;
            case '9':
                $cardValue[] = 9;
                break;
            case '8':
                $cardValue[] = 8;
                break;
            case '7':
                $cardValue[] = 7;
                break;
            case '6':
                $cardValue[] = 6;
                break;
            case '5':
                $cardValue[] = 5;
                break;
            case '4':
                $cardValue[] = 4;
                break;
            case '3':
                $cardValue[] = 3;
                break;
            case '2':
                $cardValue[] = 2;
                break;
        }

        $total = array_sum($cardValue);

        if ($total > 21) {
            $ace = 1;
        } 
    }

    return $total;
}

$total = getTotal($hand);

if ($total > 21) {
    echo "You've gone over with $total. Too bad. Good news is that you won't lose any money. Try again?" . PHP_EOL;
} elseif ($total == 21){
    echo "Perfect hand with a total of $total! You will win a game of Blackjack!" . PHP_EOL;
} else {
    echo "Your total is $total. If your total is > 17, don't hit, but if your total is < 17, hit!" . PHP_EOL;
}

?>