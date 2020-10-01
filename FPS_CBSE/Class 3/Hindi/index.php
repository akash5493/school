<?php
$path = ".";
$dh = opendir($path);
echo "<br /><br /><br /><br />";

$i=1;
$URL = urldecode($_SERVER["REQUEST_URI"]);
$baseURL = basename($URL);
echo "<div style='font-size:20px;'>Study Material of $baseURL</div>";
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<ul style='list-style-type:square;'><div style='font-size:20px;'><li><a href='$path/$file'>$file</a></li></ul></div><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 