<?php


namespace Neshamah;


class Moshiach
{
    public $isMelechHaMoshiach = null;
    public $isMelech = null;
    public $isVadai = null;
    public $hasCome = false;
    public $Yid = null;

    public function __construct($isMelech, $isVadai) {
        $this->isMelech = $isMelech;
        $this->isVadai = $isVadai;

        $this->isMelechHaMoshiach = $this->isMelech && $this->isVadai;
    }

    /*
        public function isMelechHaMoshiach($Yid) {
            return $Yid->MelechHaMoshiach;
        }*/

    public function isHere() {
        return $this->hasCome;
    }

    public function shouldCome($YiddenReady) {
        return $YiddenReady && $this->isMelechHaMoshiach;
    }
}