<?php
echo "<h2>PHP File Modes Demo</h2>";

file_put_contents("r_demo.txt", "This is r mode file.\n");

echo "<h3>Mode: r (Read Only)</h3>";
$f = fopen("r_demo.txt", "r");
echo "<pre>" . fread($f, filesize("r_demo.txt")) . "</pre>";
fclose($f);

echo "<h3>Mode: w (Write Only - Erase old data)</h3>";
$f = fopen("w_demo.txt", "w");
fwrite($f, "This is written using w mode.\n");
fclose($f);
echo "<pre>" . file_get_contents("w_demo.txt") . "</pre>";


echo "<h3>Mode: a (Append Only)</h3>";
$f = fopen("a_demo.txt", "a");
fwrite($f, "New line appended using a mode.\n");
fclose($f);
echo "<pre>" . file_get_contents("a_demo.txt") . "</pre>";

echo "<h3>Mode: r+ (Read and Write)</h3>";
file_put_contents("rplus_demo.txt", "Hello r+ mode.\n");

$f = fopen("rplus_demo.txt", "r+");
fwrite($f, "NEW "); 
rewind($f);
echo "<pre>" . fread($f, filesize("rplus_demo.txt")) . "</pre>";
fclose($f);


echo "<h3>Mode: w+ (Read & Write - erase old data)</h3>";
$f = fopen("wplus_demo.txt", "w+");
fwrite($f, "This is w+ mode.\n");
rewind($f);
echo "<pre>" . fread($f, filesize("wplus_demo.txt")) . "</pre>";
fclose($f);


echo "<h3>Mode: a+ (Read & Append)</h3>";
$f = fopen("aplus_demo.txt", "a+");
fwrite($f, "Appending line using a+ mode.\n");
rewind($f);
echo "<pre>" . fread($f, filesize("aplus_demo.txt")) . "</pre>";
fclose($f);


echo "<h3>Mode: x (Create new file)</h3>";
$f = fopen("x_bdemo.txt", "x");
fwrite($f, "File created using x mode.\n");
fclose($f);
echo "<pre>" . file_get_contents("x_bdemo.txt") . "</pre>";

echo "<h3>Mode: x+ (Create new file for Read & Write)</h3>";
$f = fopen("xplus_ddemo.txt", "x+");
fwrite($f, "File created using x+ mode.\n");
rewind($f);
echo "<pre>" . fread($f, filesize("xplus_ddemo.txt")) . "</pre>";
fclose($f);

?>
