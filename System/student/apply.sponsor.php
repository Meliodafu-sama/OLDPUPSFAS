<?php

$file = 'How-To-Sponsor.pdf';
$filename = 'How-To-Sponsor.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Rangers: bytes');
@readfile($file);

?>