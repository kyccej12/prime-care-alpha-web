<?php
    $val = $_GET['file'];
    $files = $val. ".pdf";
    header('Content-Disposition: attachment; filename="'.urldecode($files).'"');
    $fl = fopen($files, r);
    while(!feof($fl)) {
        echo fread($fl, 8192);
        flush();
    }
    fclose($fl);
?>