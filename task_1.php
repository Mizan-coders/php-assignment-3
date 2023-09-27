<?php

    $text = "The quick brown fox jumps over the lazy dog.";

    function modifieText($text) {
        $lower_Text = strtolower($text);
        $modifiedText = str_replace("brown", "red", $lower_Text);
    
        echo $modifiedText;
    }
    
    modifieText($text);
    
