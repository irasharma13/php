<?php

function prime_function($n)
{
    
    $prime_factor = array_fill(0, $n+1, true);
  
    for ($p = 2; $p*$p <= $n; $p++)
    {
        if ($prime_factor[$p] == true)
        {
            for ($i = $p*$p; $i <= $n; $i += $p)
                $prime_factor[$i] = false;
        }
    }

    for ($p = 2; $p <= $n; $p++)
        if ($prime_factor[$p])
            echo $p." ";
}


    $n = 10; 

    echo prime_function($n)." is output from prime_function(10) equal to '2, 3, 5, 7?' If yes, test passed\n\n"; 
    $n = 0; 

    echo prime_function($n)." is output from prime_function(0) equal to ''? If yes, test passed";