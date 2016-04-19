<?php

require_once 'jsonWriter.php';
require_once 'xmlWriter.php';

class WriterFactory
{
    public static function getWriter()
    {
 
       if (){

       $rmat = $_GET['format'];

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


