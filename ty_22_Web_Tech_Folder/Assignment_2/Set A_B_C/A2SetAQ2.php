<?php
$version = '<?xml version="1.0" encoding="UTF-8" ?>';
$xmldoc = new SimpleXMLElement("<ItemDetails></ItemDetails>");

$item1 = $xmldoc->addChild('Item');
$item1->addChild('ItemName', 'graph_paper');
$item1->addChild('ItemPrice', 10);
$item1->addChild('Quantity', 50);

$item2 = $xmldoc->addChild('Item');
$item2->addChild('ItemName', 'log_book');
$item2->addChild('ItemPrice',20);
$item2->addChild('Quantity', 25);

$item3 = $xmldoc->addChild('Item');
$item3->addChild('ItemName', 'geometry_box');
$item3->addChild('ItemPrice', 80);
$item3->addChild('Quantity', 100);

$item4 = $xmldoc->addChild('Item');
$item4->addChild('ItemName', 'crayons_box');
$item4->addChild('ItemPrice', 50);
$item4->addChild('Quantity', 100);

$item5 = $xmldoc->addChild('Item');
$item5->addChild('ItemName', 'answer_sheets');
$item5->addChild('ItemPrice', 18);
$item5->addChild('Quantity', 180);

$xmldoc->asXML('item2.xml');
?>


