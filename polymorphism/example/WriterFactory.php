<?php

require_once 'jsonWriter.php';
require_once 'xmlWriter.php';

class WriterFactory
{
    public static function getWriter()
    {
$format = $_GET['format'];

       if ($_GET[' ']){
        //$format = $_GET['format'];

        $writerName = $format . '_' . 'Writer';

        $writer = new $writerName;

        return $writer;
    }else {
    	echo 'Some title';
    	echo '<br />';
        echo 'Some text';
    }
    
    }
}