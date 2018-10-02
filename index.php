<?php
include 'includes/header.php';
					$allposts=array_diff(scandir('posts/'), array('.', '..'));

					foreach ($allposts as $curr)
					{
						if ($curr == "Table of Contents.html")
							continue;

					$post=file("posts/$curr");

					$title=$post[0];
	
					echo "<h2><a href=\"#\">$title</a></h2>";	

					$postauthor=$post[1];
	
					$postdate=$post[2];

					echo "<p><a href=\"#\">$postauthor</a></p>";

					echo "<p>$postdate</p>";

					foreach ($post as $i => $content) 
					{
						if ($i < 3) continue;
						echo "<p>$content</p>";
					}
					
					echo "</div></div>";
						
					echo "<div class=\"row\"> <div class=\"col-lg-6\">";
					}



include 'includes/footer.php';
?>
