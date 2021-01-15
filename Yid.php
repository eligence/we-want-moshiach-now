<?php


namespace Neshamah;


class Yid
{
    private $_shabbosCount = 0;
    public $didTeshuvah = null;

    public function keptShabbos() {
        $this->_shabbosCount = $this->_shabbosCount + 1;
    }

    public function keptShabbosCount() {
        return $this->_shabbosCount;
    }

    public function doTeshuvah() {
        $this->didTeshuvah = true;
    }
}