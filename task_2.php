<?php

$numbers = range(1, 10);

function oddNumber ($number) {
    if ($number % 2 !== 0) {
        return true;
    }
}

$result = array_filter($numbers, 'oddNumber');

print_r($result);