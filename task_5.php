<?php 


function makeRandomPassword($length) {
    $specifiedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($specifiedChars) - 1);
        $password .= $specifiedChars[$randomIndex];
    }

    return $password;
}

echo makeRandomPassword(12);