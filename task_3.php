<?php

    $grades = [85, 92, 78, 88, 95];

    function sortPrint ($arg) {
        rsort($arg);

        print_r($arg);
    }

    sortPrint($grades);