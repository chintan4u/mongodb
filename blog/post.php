<?php

// create mongo client. 
$client = new MongoClient();

//get database.
$db = $client->tieto;

//get post collection.
$collection = $db->post;

//save post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 echo "Please insert correct code here.";die;
}


?>

<html>
  <head></head>
  <body>
	<h1>Blog Post</h1>
	<form action="" method="POST">
	 <p>title: <input type="text" name="title"/></p>
	 <p>post: <textarea name="body"></textarea></p>
	 <p>username: <input type="text" name="username"/></p>
	 <p><input type="submit" value="save"/></p>
	</form>
  </body>
</html>
