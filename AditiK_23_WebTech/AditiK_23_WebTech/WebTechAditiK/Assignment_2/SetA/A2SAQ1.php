<?php
$version = '<?xml version="1.0" encoding="UTF-8" ?>';
$simple = new SimpleXMLElement("<itemdetails></itemdetails>");

$item1 = $simple->addChild('item');
$item1->addChild('itemname', 'pencil');
$item1->addChild('itemprice', 10);
$item1->addChild('quantity', 2);

$item2 = $simple->addChild('item');
$item2->addChild('itemname', 'pen');
$item2->addChild('itemprice', 40);
$item2->addChild('quantity', 1);

$item3 = $simple->addChild('item');
$item3->addChild('itemname', 'scale');
$item3->addChild('itemprice', 20);
$item3->addChild('quantity', 3);

$item4 = $simple->addChild('item');
$item4->addChild('itemname', 'Bottle');
$item4->addChild('itemprice', 90);
$item4->addChild('quantity', 1);

$item5 = $simple->addChild('item');
$item5->addChild('itemname', 'Pouch');
$item5->addChild('itemprice', 100);
$item5->addChild('quantity', 4);

$simple->asXML('A2SAQ1.xml');
?>


