<?php

class Girokonto extends Bankkonto
{
    public function einzahlung($betrag)
    {
        $this->buchung($betrag, "einzahlung");
    }

    public function auszahlung()
    {

    }

    public function ueberweisung()
    {

    }
}
