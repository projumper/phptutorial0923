<?php

class Girokonto extends Bankkonto
{


    function __construct()
    {
        $this->name = "Girokonto";
    }

    public function einzahlung($betrag)
    {
        $this->buchung($betrag, "einzahlung");
    }

    public function auszahlung($credit)
    {
        $this->buchung($credit, "auszahlung");
    }

    public function ueberweisung()
    {

    }

}
