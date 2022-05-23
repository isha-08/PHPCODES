<?php
	$dom=new DOMDocument();
	$dom->load("Movie.xml");
	echo"<h3>Name of the Movie is: </h3>";
	$mtitle=$dom->getElementsByTagName("MovieTitle");
	foreach($mtitle as $movietitle)
	{
		echo"$movietitle->textContent<br><br>";
	}
	echo"<h3>Name of the Actor is: </h3>";
	$mtitle=$dom->getElementsByTagName("ActorName");
	foreach($mtitle as $actorname)
	{
		echo"$actorname->textContent<br><br>";
	}
?>
