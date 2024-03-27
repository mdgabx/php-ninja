<?php

    // file system

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';

    if(file_exists($file)) {

        // read file
        echo readfile($file) . '<br />';

        // copy($file, 'quotes.txt');
        mkdir("quotes.txt");
        copy($file, "quotes.txt");

        // real path
        echo realpath($file);

        //file size

        echo filesize($file);



    } else {
        echo 'file does not exist';
    }

?>