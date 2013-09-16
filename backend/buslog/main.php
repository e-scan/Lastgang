<?php

// sorgt für die korrekte Kodierung
header ( 'Content-Type: text/html; charset=utf-8' );
// ist mal wieder wichtig wegen IE
header ( 'Cache-Control: must-revalidate, pre-check=0, no-store, no-cache, max-age=0, post-check=0' );

$text = "<img alt=\"blau\" src=\"./blau.png\">";

echo $text;

?>