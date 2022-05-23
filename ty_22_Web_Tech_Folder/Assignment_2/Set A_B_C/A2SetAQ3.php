<?php
	$doc=new DOMDocument("1.0", "UTF-8");
	$doc->formatOutput=true;

	$bookinfo=$doc->createElement("Book_Info");
	$doc->appendChild($bookinfo);

	$book1=$doc->createElement("Book");
	$bookinfo->appendChild($book1);

	$bookno=$doc->createElement("Book_No",1);
	$book1->appendChild($bookno);

	$bookname=$doc->createElement("Book_Name","Java");
	$book1->appendChild($bookname);

	$authorname=$doc->createElement("Author_Name","Balguru Swami");
	$book1->appendChild($authorname);

	$price=$doc->createElement("Price",250);
	$book1->appendChild($price);

	$year=$doc->createElement("Year",2006);
	$book1->appendChild($year);


	$book2=$doc->createElement("Book");
	$bookinfo->appendChild($book2);

	$bookno=$doc->createElement("Book_No",2);
	$book2->appendChild($bookno);

	$bookname=$doc->createElement("Book_Name","C");
	$book2->appendChild($bookname);

	$authorname=$doc->createElement("Author_Name","Denis Ritchie");
	$book2->appendChild($authorname);

	$price=$doc->createElement("Price",500);
	$book2->appendChild($price);

	$year=$doc->createElement("Year",1971);
	$book2->appendChild($year);

	$doc->save("Book.xml");
	echo "<h3>A Book.xml file has been created Successfully!!</h3>";	
?>
