<?php

// class MyOwnExeception extends Exception
// {

// }

try {

    new DateTime("sadasdasd");

    if (1 == 1)
       throw new Exception;

} catch (Exception $e) {
    echo "something went wrong in my logic";
}