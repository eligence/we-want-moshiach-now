<?php

require_once('Yisroel.php');
require_once('Moshiach.php');
require_once('Yid.php');
require_once('MySelf.php');

define('KLAL_YISROEL', \Am\Yisroel::Klal());


$MySelf = new \Neshamah\MySelf(KLAL_YISROEL);


echo $MySelf->shouldBoardFlight() ?
    '<h1>Moshiach is Here! Hop on your eagle and get to Yerushalayim!</h1>'
    : '<h1>Do more acts of goodness and kindness to bring Moshiach Now!';
