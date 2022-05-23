<?php
	$doc = new DOMDocument("1.0", "UTF-8");
	$doc->formatOutput = true;
	
	$movieinfo= $doc->createElement("MovieInfo");
	$doc->appendChild($movieinfo);
	
	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Classical");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","1");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","Simba");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","Ranveer Singh");
	$movie->appendChild($actorname);
		

	$releaseyear= $doc->createElement("ReleaseYear","2021");
	$movie->appendChild($releaseyear);
	
	
	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Classical");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","2");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","Fast and Furious");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","Vin Diesel");
	$movie->appendChild($actorname);

	$releaseyear= $doc->createElement("ReleaseYear","2022");
	$movie->appendChild($releaseyear);

	
	
	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Horror");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","3");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","X");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","Jenna Ortega");
	$movie->appendChild($actorname);

	$releaseyear= $doc->createElement("ReleaseYear","2022");
	$movie->appendChild($releaseyear);


	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Horror");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","4");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","Annabelle");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","Unknown");
	$movie->appendChild($actorname);
		

	$releaseyear= $doc->createElement("ReleaseYear","2022");
	$movie->appendChild($releaseyear);



	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Action");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","5");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","Shole");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","Dharmendra");
	$movie->appendChild($actorname);
		
	$releaseyear= $doc->createElement("ReleaseYear","1990");
	$movie->appendChild($releaseyear);

		
	$movie= $doc->createElement("movie");
	$movie->setAttribute("type","Action");
	$movieinfo->appendChild($movie);

	$movieno= $doc->createElement("MovieNo","6");
	$movie->appendChild($movieno);

	$movietitle= $doc->createElement("MovieTitle","Batala House");
	$movie->appendChild($movietitle);
	
	$actorname= $doc->createElement("ActorName","john");
	$movie->appendChild($actorname);
		

	$releaseyear= $doc->createElement("ReleaseYear","2020");
	$movie->appendChild($releaseyear);


	$doc->save("movies.xml");

	echo "<h4>movies.xml created<h4>";
?>

