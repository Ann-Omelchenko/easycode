<?php

require_once 'jsonWriter.php';
require_once 'xmlWriter.php';
require_once 'defaultWriter.php';

class WriterFactory
{
    /**
     * @return iWriter
     */
    public static function getWriter()
    {
<<<<<<< HEAD
 
       if (){

       $rmat = $_GET['format'];
=======
        if (!isset($_GET['format']) || empty($_GET['format'])) {
            $format = 'default';
        } else {
            $format = $_GET['format'];
        }
>>>>>>> upstream/dev

        $writerName = $format . '_' . 'Writer';
        if (!class_exists($writerName)) {
            $writerName = 'default_Writer';
        }

        $writer = new $writerName;

        return $writer;
    }else {
    	echo 'Some title';
    	echo '<br />';
        echo 'Some text';
    }
    
    }
}


