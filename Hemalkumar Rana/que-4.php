<?php
function shortestPalindrome($s) {
    $rev = strrev($s);
    $combined = $s . '#' . $rev;
    $lps = computeLPS($combined);
    $longestPrefix = end($lps);
    $toAdd = substr($rev, 0, strlen($s) - $longestPrefix);
    return $toAdd . $s;
}

function computeLPS($str) {
    $n = strlen($str);
    $lps = array_fill(0, $n, 0);
    $len = 0;
    $i = 1;

    while ($i < $n) {
        if ($str[$i] === $str[$len]) {
            $len++;
            $lps[$i] = $len;
            $i++;
        } else {
            if ($len !== 0) {
                $len = $lps[$len - 1];
            } else {
                $lps[$i] = 0;
                $i++;
            }
        }
    }
    return $lps;
}

// Take input from user
echo "Enter a string: ";
$s = trim(fgets(STDIN));

echo "Shortest Palindrome: " . shortestPalindrome($s) . PHP_EOL;
