<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>myBlog</title>
</head>

 <body>
 <div id="main">  
    <h1>My Simple Blog</h1>  
    <div id="blogPosts">  
  <?php  
	  	include 'blogsql.php';  
	  	$blogPosts = GetBlogPosts();
		foreach ($blogPosts as $post)  
{  
    echo "<div class='post'>";  
    echo "<h1>" . $post->title . "</h1>";  
    echo "<p>" . $post->post . "</p>";  
    echo "<span class='footer'>Posted By: " . $post->author . " Posted On: " . $post->datePosted . " Tags: " . $post->tags . "</span>";  
    echo "</div>";  
}  	  	  
?>     
 </div>  
</div>  
</body>
</html>