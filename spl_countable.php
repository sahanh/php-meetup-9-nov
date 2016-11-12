<?php
//Countable
//
class Candidates implements Countable
{
    public function count()
    {
        return 5;
    }
}

$c = new Candidates;
echo count($c);

