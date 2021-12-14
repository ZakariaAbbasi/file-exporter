<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    
    return; //Not Submited
    
}

# Form  Submit is OK;

[$title, $contecnt, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];