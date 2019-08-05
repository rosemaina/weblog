<?php

include 'config.php';

// TOP NAVIGATION WITH SEARCH BAR
echo '<html>';
echo '<head><title>Roses Blog</title></head>';
echo '<body>';
echo '<div class="topnav">';
echo '<a class="active" href="#home">Home</a>';
echo '<a href="#about">About</a>';
echo '<a href="#contact">Contact</a>';
echo '<input type="text" placeholder="Search..">';
echo '</div>';

// FORM FOR EDITING THE ARTICLE
echo '<form action="" method="POST">';
echo "Title: ";
echo'<input type="text" name="title" style="height:30px; width:300px;" required/>';

echo"<br> <br>Type your article here<br>";
echo'<textarea name="blog" style="height:400px; width:700px;" required></textarea>';
echo '<br><br><br><input type="submit" value="PUBLISH" name="submit_btn">';
echo '&nbsp &nbsp &nbsp<input type="submit" value="Edit" name="submit_btn">';
echo '&nbsp &nbsp &nbsp<input type="submit" value="See all" name="submit_btn">';
// echo" <button style='height:30px color: teal; width:50px;'><a href='search.php'>Search articles</a></button>&nbsp &nbsp &nbsp";
echo '</form>';

if(isset($_REQUEST['submit_btn'])){

$blog=$_POST['blog'];
$title=$_POST['title'];

$sql = "INSERT INTO `blog` (`title`, `blog`) VALUES('$title', '$blog')";
$result = $connection->query($sql);
if ($result===TRUE){
	// echo '<script>';
echo'article posted';
    // echo'</ /script>';
}

}
echo '';
echo '</body>';
echo '</html>';
?>