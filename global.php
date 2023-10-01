<?php
$g = gmdate('D, d M Y H:i:s');
header('Expires: ' . $g . ' GMT');
header('Last-Modified: ' . $g . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>