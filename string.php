<?php

// $str1 = "Hello";
// $str2 = "World";
// $str3 = "PHP";
// $str3 = "Programming";


$strings = ["Hello", "World", "PHP", "Programming", ];

foreach ($strings as $str) {  // str dia process 
    $vowelCount = preg_match_all('/[aeiou]/i', $str); //counts korci vowels 
    $reversed = strrev($str); // strrev dia reverse 
    
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}
