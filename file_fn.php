<?php
echo "<h2>PHP File Functions Demo</h2>";

$filename = "demo.txt";

$file = fopen($filename, "w");
fwrite($file, "Hello! This is PHP File Handling Demo.\n");
fwrite($file, "Second line added.\n");
fclose($file);

echo "<h3>File Written Successfully!</h3>";


$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);

echo "<h3>File Content using fread():</h3>";
echo "<pre>$content</pre>";


echo "<h3>File Content using file_get_contents():</h3>";
echo "<pre>" . file_get_contents($filename) . "</pre>";


file_put_contents($filename, "This line is overwritten using file_put_contents().\n");

echo "<h3>After file_put_contents():</h3>";
echo "<pre>" . file_get_contents($filename) . "</pre>";


echo "<h3>File Content as Array using file():</h3>";
$lines = file($filename);
print_r($lines);


echo "<h3>File Information:</h3>";

if(file_exists($filename)) {
    echo "File Exists <br>";
    echo "File Size: " . filesize($filename) . " bytes<br>";
    echo "File Type: " . filetype($filename) . "<br>";
    echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($filename)) . "<br>";
    echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($filename)) . "<br>";
    echo "Created Time: " . date("d-m-Y H:i:s", filectime($filename)) . "<br>";
    echo "Permissions: " . substr(sprintf('%o', fileperms($filename)), -4) . "<br>";
    echo "Owner ID: " . fileowner($filename) . "<br>";
    echo "Group ID: " . filegroup($filename) . "<br>";
    echo "Inode: " . fileinode($filename) . "<br>";
} else {
    echo "File Not Found ";
}


copy($filename, "copy_demo.txt");
echo "<h3>File Copied to copy_demo.txt</h3>";

rename("copy_demo.txt", "renamed_demo.txt");
echo "<h3>File Renamed to renamed_demo.txt</h3>";

unlink("renamed_demo.txt");
echo "<h3>File renamed_demo.txt Deleted</h3>";


$folder = "myfolder";

if(!is_dir($folder)) {
    mkdir($folder);
    echo "<h3>Folder Created: myfolder</h3>";
}


echo "<h3>Checking File/Folder:</h3>";
echo (is_file($filename)) ? "demo.txt is a File <br>" : "Not a file<br>";
echo (is_dir($folder)) ? "myfolder is a Directory <br>" : "Not a directory<br>";


echo "<h3>Directory Listing using scandir():</h3>";
print_r(scandir("."));


echo "<h3>Directory Listing using opendir() and readdir():</h3>";

$dir = opendir(".");
while(($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);


echo "<h3>Current Working Directory:</h3>";
echo getcwd() . "<br>";

chdir("..");
echo "<h3>After chdir('..'):</h3>";
echo getcwd() . "<br>";


echo "<h3>File Locking using flock():</h3>";

$fp = fopen("lockfile.txt", "w+");
if(flock($fp, LOCK_EX)) {
    fwrite($fp, "This file is locked and written safely.\n");
    flock($fp, LOCK_UN);
    echo "File Locked & Written Successfully <br>";
} else {
    echo "Could not lock file <br>";
}


fclose($fp);

?>
