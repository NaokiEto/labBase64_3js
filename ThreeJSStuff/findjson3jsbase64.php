<?php

    foreach (glob("*.json") as $filename)
    {
        // read file into array

        $data = file($filename) or die('Could not read file!');

        foreach ($data as $line)

        {
            echo $line;
        }
    }
?>
