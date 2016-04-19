<?php

require_once 'iWriter.php';

class html_Writer implements iWriter
{
    public function write(Post $post) {
        echo = 'Some title';
        echo '<br />';
        echo = 'Some text';
    }
}