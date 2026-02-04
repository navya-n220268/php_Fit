<?php
    echo "<h2>String Functions in PHP</h2>";

    $str = "Hehe! Shinchan loves ChocoChips";

    // strlen() - Get the length of a string
    echo "Length of string: " . strlen($str) . "<br>";

    //str_word_count() - Count the number of words in a string
    echo "Number of words in string: " . str_word_count($str) . "<br>";

    //strrev() - Reverse a string
    echo "Reversed string: " . strrev($str) . "<br>";

    echo "<hr>";

    // strtoupper() - Convert a string to uppercase
    echo "Uppercase string: " . strtoupper($str) . "<br>";

    // strtolower() - Convert a string to lowercase
    echo "Lowercase string: " . strtolower($str) . "<br>";

    //ucwords() - Capitalize the first letter of each word in a string
    echo "Capitalized string: " . ucwords($str) . "<br>";

    // ucfirst() - Capitalize the first letter of a string
    echo "First letter capitalized string: " . ucfirst($str) . "<br>";

    // lcfirst() - Lowercase the first letter of a string
    echo "First letter lowercased string: " . lcfirst($str) . "<br>";

    //strpos()  - Find the position of the first occurrence of a substring
    echo "strpos('Choco'): " . strpos($str, "Choco") . "<br>";

    // str_replace() - Replace all occurrences of a search string with a replacement string
    echo "Replaced string: " .str_replace("ChocoChips", "Shiro", $str) . "<br>";

    echo "<hr>";

    // substr() - Return part of a string
    echo "Substring: " . substr($str, 7, 9) . "<br>";

    // trim() - Remove whitespace from both ends of a string
    echo "Trimmed string: '" . trim($str) . "'<br>"; 

    //ltrim() - Remove whitespace from the beginning of a string
    echo "Left Trimmed string: '" . ltrim("   " . $str) . "'<br>";

    //rtrim() - Remove whitespace from the end of a string
    echo "Right Trimmed string: '" . rtrim($str . "   ") . "'<br>";

    echo "<hr>";

    // strcmp() - Compare two strings
    $str2 = "Hehe! Shinchan loves Shiro";
    echo "String comparison: " . strcmp($str, $str2) . "<br>";

    // htmlspecialchars() - Convert special characters to HTML entities
    $strs = "<h1>Hello & Welcome to 'FitCulture'</h1>";
    echo "HTML Special chars: " . htmlspecialchars($strs) . "<br>";

    //strcasecmp() - Case-insensitive string comparison
    echo "Case-insensitive comparison: " . strcasecmp($str, $str2) . "<br>";

    //addslashes() - Add backslashes before characters that need to be escaped
    $str3 = "He said, 'Hello!'";
    echo "String with slashes: " . addslashes($str3) . "<br>";

    // explode() - Split a string by a string
    echo "Words in string: " . implode(", ", explode(" ", $str)) . "<br>";
?>