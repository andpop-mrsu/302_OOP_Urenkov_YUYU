<?php

namespace App;

function runTest()
{
    //тесты для compareStrings
    echo "Test 1: " . (compareStrings("ab#c", "ade##c") ? 'true' : 'false') . "\n"; // true
    echo "Test 3: " . (compareStrings("abc###", "a#b#") ? 'true' : 'false') . "\n"; // true
    echo "Test 4: " . (compareStrings("a##c", "#a#c") ? 'true' : 'false') . "\n"; // true
    echo "Test 5: " . (compareStrings("xy#z", "xzz##") ? 'true' : 'false') . "\n"; // false
}