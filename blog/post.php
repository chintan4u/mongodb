<?php

// create mongo client. 
$client = new MongoClient();

//get database.
$db = $client->test;

//get post collection.
$collection = $db->users;

//save post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
//print_r($_POST);
//print_r($collection);
$document = array (
			"title"  => $_POST["title"],
			"body" => $_POST["body"],
			"username" => $_POST["username"],
			"created_at" => date("Y-m-d H:i:s")
			);
$collection->insert($document);
// echo "Please insert correct code here.";die;
 echo "Document inserted successfully";
 //save post record and redirect to index.php
 header('Location: index.php');
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
