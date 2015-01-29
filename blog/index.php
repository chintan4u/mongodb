<?php
// create mongo client. 
$client = new MongoClient();

//get database.
$db = $client->test;

//get post collection.
$collection = $db->users;

//find post by username
$username = isset($_GET['username']) ? $_GET['username'] : null;

// if username is given then find post by username
if (isset($_GET['username'])){
$posts = $collection->find(array("username" => $username));
}
else{
$posts = $collection->find();
}

// find all post in descending order
$posts->sort(array('created_at'=>-1));
?>

<html>
  <head></head>
  <body>
	<h1>Blog Posts</h1><a href = "post.php"><?php echo "Add new Blog"?></a>
	<form action="" method="GET">
	<p>username: <input type="text" name="username"/></p>
	 <p><input type="submit" value="save"/></p>
	</form>
	
	<?php if(isset($posts)):?>
		<?php foreach($posts as $post ): ?>
		 <div>
		   <h3><?php echo $post['title'];?></h3>
		  
		   <small><?php echo "username : " . $post['username'];?></small>
		   <p><?php echo $post['body'];?></p>
		   <em><?php echo $post['created_at']?></em>
		   <em><?php echo "</br>======================================";?></em>
		
		 </div>
		<?php endforeach;?>
	<?php else:?>
	  <?php echo "No blog post found."?>
	<?php endif;?>
	
  </body>
</html>
