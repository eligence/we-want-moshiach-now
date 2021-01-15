<?php


namespace Neshamah;

class MySelf
{

    public $KlalYisroel;

    public function __construct($KlalYisroel) {
        $this->KlalYisroel = $KlalYisroel;
    }

    function shouldBoardFlight() {
        return $this->KlalYisroel->bringMoshiach();
    }

}
