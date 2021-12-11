<?php
$INPUT = "MYPASSWORD";

$OUTPUT = md5(sha1($INPUT));

echo "RAW String: " . $INPUT . "<br />";
echo "Encoded Output: " . $OUTPUT;
?>