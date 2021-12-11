<?php
// -- Use this only in development environment
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
// -------------------------------------------

$INPUT = "MYPASSWORD";

// But don't use str_shuffle like this since it will change the end result every time and you'll have a hard time matching it
//$OUTPUT = str_shuffle(md5(sha1($INPUT)));

// Instead use a SALT; still not as encrypted
$SALT = "NASH";
$OUTPUT = md5(sha1($SALT . $INPUT . $SALT));

// The results
$OUTPUT = md5(sha1($INPUT));

// Display stuff
echo "RAW String: " . $INPUT . "<br />";
echo "Encoded Output: " . $OUTPUT;
?>