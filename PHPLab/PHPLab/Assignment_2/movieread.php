<?php
                $doc=simplexml_load_file("movies.xml");
		
                foreach($doc->movie as $movie)
                {
                                echo "Movie Type: ".$movie->attributes() ."<br>";
				echo "Movie Title: ".$movie->MovieTitle."<br>";
				echo "<br>"."Actor Name: ".$movie->ActorName."<br>";
				
				
				echo "...............................................<br>";		
                }

		
?>

