<?php
	$doc=new DOMDocument("1.0","UTF-8");
	$doc->formatOutput=true;
	
	$movie=$doc->createElement("Movie");
	$doc->appendChild($movie);



	$category1=$doc->createElement("Category");
	$category1->setAttribute("type","Classical");
	$movie->appendChild($category1);	
	
	$movietitle1=$doc->createElement("MovieTitle","Katyaar Kaaljaat Ghusli");
	$category1->appendChild($movietitle1);

	$actorname1=$doc->createElement("ActorName","Subodh Bhave");
	$category1->appendChild($actorname1);

	$releaseyear1=$doc->createElement("ReleaseYear",2018);
	$category1->appendChild($releaseyear1);



	$category1=$doc->createElement("Category");
	$category1->setAttribute("type","Classical");
	$movie->appendChild($category1);	
	
	$movietitle1=$doc->createElement("MovieTitle","Natasamraat");
	$category1->appendChild($movietitle1);

	$actorname1=$doc->createElement("ActorName","Nana Patekar");
	$category1->appendChild($actorname1);

	$releaseyear1=$doc->createElement("ReleaseYear",2017);
	$category1->appendChild($releaseyear1);




	$category2=$doc->createElement("Category");
	$category2->setAttribute("type","Horror");
	$movie->appendChild($category2);	
	
	$movietitle2=$doc->createElement("MovieTitle","Bhoot");
	$category2->appendChild($movietitle2);

	$actorname2=$doc->createElement("ActorName","Vicky Kaushal");
	$category2->appendChild($actorname2);

	$releaseyear2=$doc->createElement("ReleaseYear",2016);
	$category2->appendChild($releaseyear2);



	$category2=$doc->createElement("Category");
	$category2->setAttribute("type","Horror");
	$movie->appendChild($category2);	
	
	$movietitle2=$doc->createElement("MovieTitle","Talaash");
	$category2->appendChild($movietitle2);

	$actorname2=$doc->createElement("ActorName","Kareena Kapoor Khan");
	$category2->appendChild($actorname2);

	$releaseyear2=$doc->createElement("ReleaseYear",2015);
	$category2->appendChild($releaseyear2);




	$category3=$doc->createElement("Category");
	$category3->setAttribute("type","Action");
	$movie->appendChild($category3);	
	
	$movietitle3=$doc->createElement("MovieTitle","Fast And Furious");
	$category3->appendChild($movietitle3);

	$actorname3=$doc->createElement("ActorName","Vin Diesel");
	$category3->appendChild($actorname3);

	$releaseyear3=$doc->createElement("ReleaseYear",2014);
	$category3->appendChild($releaseyear3);




	$category3=$doc->createElement("Category");
	$category3->setAttribute("type","Action");
	$movie->appendChild($category3);	
	
	$movietitle3=$doc->createElement("MovieTitle","Mission Impossible");
	$category3->appendChild($movietitle3);

	$actorname3=$doc->createElement("ActorName","Tom Cruise");
	$category3->appendChild($actorname3);

	$releaseyear3=$doc->createElement("ReleaseYear",2013);
	$category3->appendChild($releaseyear3);

	$doc->save("Movie.xml");
?>

