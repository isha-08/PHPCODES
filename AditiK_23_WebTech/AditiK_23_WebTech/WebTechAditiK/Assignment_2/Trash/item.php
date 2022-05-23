<?php
$version = '<?xml version="1.0" encoding="UTF-8" ?>';
$simple = new SimpleXMLElement("<itemdetails></itemdetails>");

$item1 = $simple->addChild('item');
$item1->addChild('itemname', 'sugar');
$item1->addChild('itemprice', 100);
$item1->addChild('quantity', 2);

$item2 = $simple->addChild('item');
$item2->addChild('itemname', 'salt');
$item2->addChild('itemprice', 80);
$item2->addChild('quantity', 1);

$item3 = $simple->addChild('item');
$item3->addChild('itemname', 'rice');
$item3->addChild('itemprice', 56);
$item3->addChild('quantity', 30);

$item4 = $simple->addChild('item');
$item4->addChild('itemname', 'handwash');
$item4->addChild('itemprice', 90);
$item4->addChild('quantity', 1);

$item5 = $simple->addChild('item');
$item5->addChild('itemname', 'hair shampoo');
$item5->addChild('itemprice', 145);
$item5->addChild('quantity', 4);

$simple->asXML('item2.xml');
?>


