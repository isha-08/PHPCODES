<?php
	$doc=new DOMDocument("1.0","UTF-8");
	$doc->formatOutput=true;
	
	$movie=$doc->createElement("Movie");
	$doc->appendChild($movie);



	$category1=$doc->createElement("Category");
	$category1->setAttribute("type","Classical");
	$movie->appendChild($category1);	
	
	$movietitle1=$doc->createElement("MovieTitle","K3G");
	$category1->appendChild($movietitle1);

	$actorname1=$doc->createElement("ActorName","Hritik Roshan");
	$category1->appendChild($actorname1);

	$releaseyear1=$doc->createElement("ReleaseYear",1980);
	$category1->appendChild($releaseyear1);



	$category1=$doc->createElement("Category");
	$category1->setAttribute("type","Classical");
	$movie->appendChild($category1);	
	
	$movietitle1=$doc->createElement("MovieTitle","Padosan");
	$category1->appendChild($movietitle1);

	$actorname1=$doc->createElement("ActorName","Kishor Kumar");
	$category1->appendChild($actorname1);

	$releaseyear1=$doc->createElement("ReleaseYear",1960);
	$category1->appendChild($releaseyear1);




	$category2=$doc->createElement("Category");
	$category2->setAttribute("type","Horror");
	$movie->appendChild($category2);	
	
	$movietitle2=$doc->createElement("MovieTitle","Ghost");
	$category2->appendChild($movietitle2);

	$actorname2=$doc->createElement("ActorName","Akshay Kumar");
	$category2->appendChild($actorname2);

	$releaseyear2=$doc->createElement("ReleaseYear",2002);
	$category2->appendChild($releaseyear2);



	$category2=$doc->createElement("Category");
	$category2->setAttribute("type","Horror");
	$movie->appendChild($category2);	
	
	$movietitle2=$doc->createElement("MovieTitle","Bhootnaath");
	$category2->appendChild($movietitle2);

	$actorname2=$doc->createElement("ActorName","Amitabh Bacchan");
	$category2->appendChild($actorname2);

	$releaseyear2=$doc->createElement("ReleaseYear",2010);
	$category2->appendChild($releaseyear2);




	$category3=$doc->createElement("Category");
	$category3->setAttribute("type","Action");
	$movie->appendChild($category3);	
	
	$movietitle3=$doc->createElement("MovieTitle","Baaghi");
	$category3->appendChild($movietitle3);

	$actorname3=$doc->createElement("ActorName","Tiger Shroff");
	$category3->appendChild($actorname3);

	$releaseyear3=$doc->createElement("ReleaseYear",2012);
	$category3->appendChild($releaseyear3);




	$category3=$doc->createElement("Category");
	$category3->setAttribute("type","Action");
	$movie->appendChild($category3);	
	
	$movietitle3=$doc->createElement("MovieTitle","Rowdy Rathod");
	$category3->appendChild($movietitle3);

	$actorname3=$doc->createElement("ActorName","Akshay Kumar");
	$category3->appendChild($actorname3);

	$releaseyear3=$doc->createElement("ReleaseYear",2015);
	$category3->appendChild($releaseyear3);

	$doc->save("Movie.xml");
?>

