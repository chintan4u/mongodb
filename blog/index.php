<?php
// create mongo client. 
$client = new MongoClient();

//get database.
$db = $client->tieto;

//get post collection.
$collection = $db->post;

//find post by username
$username = isset($_GET['username']) ? $_GET['username'] : null;


// insert mongodb code here
// find all post in descending order
// if username is given then find post by username

?>

<html>
  <head></head>
  <body>
	<h1>Blog Posts</h1>
	<?php if(isset($posts)):?>
		<?php foreach($posts as $post ): ?>
		 <div>
		   <h3><?php echo $post['title'];?></h3>
		   <small><?php echo "username : " . $post['username'];?></small>
		   <p><?php echo $post['body'];?></p>
		   <em><?php echo date("d/m/Y",$post['created_at'])?></em>
		 </div>
		<?php endforeach;?>
	<?php else:?>
	  <?php echo "No blog post found."?>
	<?php endif;?>
  </body>
</html>
