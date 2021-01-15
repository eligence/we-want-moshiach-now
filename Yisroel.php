<?php


namespace Am;

use Neshamah\Moshiach,
    Neshamah\Yid;


class Yisroel
{
    private static $_Klal = null;
    private static $_Neshamos = 600000;
    static $emunah = true;
    static $bitachon = true;

    public function __construct() {
        self::$_Yidden = $this->_getSouls();
    }

    private function _getSouls() {
        $i = 1;
        $souls = [];
        do {
            $souls[$i] = new Yid();
            $i++;
        } while ($i < self::$_Neshamos);

        return $souls;
    }

    public static function haveTickets() {
        return self::haveDoneEnoughToBringMoshiach('HaveTickets');
    }

    public static function keepTwoShabboson() {
        return self::haveDoneEnoughToBringMoshiach('KeptShabbos');
    }

    public static function didTeshuvah() {
        return self::haveDoneEnoughToBringMoshiach('Teshuvah');
    }

    public static function haveDoneEnoughToBringMoshiach($condition) {
        $count = 0;

        foreach (self::$_Yidden as $Yid) {
            switch ($condition) {
                case 'KeptShabbos' :
                    $condition = $Yid->keptShabbosCount() === 2;
                    break;
                case 'Teshuvah' :
                    $Yid->didTeshuvah;
                    break;
                case 'HaveTickets' :
                    $condition = $Yid->hasTicket();
                    break;
                default :
                    $condition = self::$emunah && self::$bitachon;

            }
            if ($condition) {
                $count++;
            }
        }

        return $count === self::$_Neshamos;
    }

    public function bringMoshiach() {
        $shouldCome = true;
        $Moshiach = null;
        if (
            $this->haveTickets()
            || $this->keepTwoShabboson()
            || $this->didTeshuvah()
        ) {
            self::$emunah = true;
            self::$bitachon = true;
            $Moshiach = new Moshiach(true, true);
            $shouldCome = $Moshiach->shouldCome(self::$emunah && self::$bitachon);
        }

        return $Moshiach instanceof Moshiach && $shouldCome;
    }

    public static function Klal() {
        if (self::$_Klal == null) {
            self::$_Klal = new Yisroel();
        }

        return self::$_Klal;
    }
}