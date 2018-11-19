<?php
$x = mktime(00, 00, 00, 01, 01, 2019) - time();
echo floor($x / 3600 / 24);
?>