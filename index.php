<?php

require_once('Yisroel.php');
require_once('Moshiach.php');
require_once('Yid.php');
require_once('MySelf.php');

define('KLAL_YISROEL', \Am\Yisroel::Klal());
$MySelf = new \Neshamah\MySelf(KLAL_YISROEL); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We Want Moshiach Now!</title>
</head>
<body>
<?php echo $MySelf->shouldBoardFlight() ?
    '<h1>Moshiach is Here! Hop on your eagle and get to Yerushalayim!</h1>'
    : '<h1>Do more acts of goodness and kindness to bring Moshiach Now!'; ?>
</body>
</html>




