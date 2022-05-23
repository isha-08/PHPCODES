
<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Store></Store>");

$item1 = $sxe->addChild('Item');
$item1->addChild('ItemName', 'Pen');
$item1->addChild('ItemPrice', 20);
$item1->addChild('Quantity', 100);

$item2 = $sxe->addChild('Item');
$item2->addChild('ItemName', 'Pencil');
$item2->addChild('ItemPrice', 5);
$item2->addChild('Quantity', 100);

$sxe->asXML('item.xml');

?>

