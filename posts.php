<html
<?php
	include 'includes/header.php';


	$post=file("posts/post5.txt");

	$title=$post[0];
	
	echo "<h2><a href=\"#\">$title</a></h2>";	

	$postauthor=$post[1];

	$postdate=$post[2];

	$postcontent=$post[3];

	
	echo "<p><a href=\"#\">$postauthor</a></p>";

	echo "<p>$postdate</p>";

	echo "<p>$postcontent</p>";

?>

<?php
	include 'includes/footer.php';
?>
