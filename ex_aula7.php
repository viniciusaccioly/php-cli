#!/usr/bin/env php 

<?php

function tree($dirpath, $depth=0, $currdepth=0, $sep='') {

    // Check if $dir is a directory 
    if (is_dir($dirpath)) {

        // Display directory
        echo $sep.basename($dirpath)."\n";

        // Scan directory
        $dirarr=scandir($dirpath, SCANDIR_SORT_DESCENDING);
        unset($dirarr[array_search('.',$dirarr)]);
        unset($dirarr[array_search('..',$dirarr)]);

        // Iterate over files in directory
        foreach ($dirarr as $file) {
            // Recursive call: checks if depth has been reached
            if (is_dir($dirpath.'/'.$file) && $currdepth<$depth) {
                tree($dirpath.'/'.$file, $depth, $currdepth+1, $sep.'    ');
            // If depth is 0, all files and subdirectories will be searched 
            } elseif ($depth == 0) {
                echo $sep.'    '.$file."\n";
            // Display file
            } else {
                echo $sep.'    '.$file."\n";
            }
        }
    }   
}

tree($argv[1], $argv[2]);
