<?php
                $doc=simplexml_load_file("book.xml");
		
                foreach($doc->book as $book)
                {
                                echo "Category: ".$book->attributes() ."<br>";
				echo "Book no : ".$book->bookno."<br>";
				echo "<br>"."Book name : ".$book->bookname."<br>";
				echo "<br>"."Author name : ".$book->authorname."<br>";
				echo "<br>"."Price : ".$book->price."<br>";	
				echo "<br>"."Year : ".$book->year."<br>";
				echo "...............................................<br>";		
                }
                
?>

