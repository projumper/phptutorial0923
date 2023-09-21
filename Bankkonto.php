<?php

class Bankkonto 
{
    
public $name;
public $kntnr;
private $credit ;

public function getCredit()
    {
        return $this->credit;
    }

public function buchung($betrag, $art)
    {
        if ($art = "einzahlung")
            $this->credit = $this->credit + $betrag;
        
    }

}
