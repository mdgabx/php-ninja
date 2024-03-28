<?php

    // file system

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';

    // if(file_exists($file)) {

    //     // read file
    //     echo readfile($file) . '<br />';

    //     // copy($file, 'quotes.txt');
    //     mkdir("quotes.txt");
    //     copy($file, "quotes.txt");

    //     // real path
    //     echo realpath($file);

    //     //file size

    //     echo filesize($file);



    // } else {
    //     echo 'file does not exist';
    // }

    // open a file

    $handle = fopen($file, 'r');

   echo fread($handle, filesize($file));

    // read single line
    // echo fgets($handle);

    // // read a single character
    // echo fgetc($handle);

    // writing to a file
    // fwrite($handle, "\nTasdadsasdawasdawd");

    fclose($handle);

    unlink($file);
?>