<?php
$doc=simplexml_load_file("Book.xml");
echo "Book Information";
foreach($doc->Book as $book)
{
	echo "<br>"." Book category attribute= ".$book->attributes()."<br>";
	echo "<br>"." Book Number Element is: ".$book->Book_No."<br>";
	echo "<br>"." Book Name Element is: ".$book->Book_Name."<br>";
	echo "<br>"." Book Author Name Element is: ".$book->Author_Name."<br>";
	echo "<br>"." Book Price Element is: ".$book->Price."<br>";
	echo "<br>"." Book Year Element is: ".$book->Year."<br>";
} 
?>


