<?php

require_once('session.php');
require_once('classes.php');

if(isset($_POST['addfriend'])){

	$friend = new FRIEND();
	
	$user_id = $_SESSION['user_session'];
	$friend_id = $_POST['addfriend'];

	if ($user_id == $friend_id){
		echo false;
	}else{
		if($friend->checkiffriend($user_id, $friend_id)){
			echo false;
		}else{
			$friend->addfriend($user_id, $friend_id);
			echo true;
		}
	}
	
}

if(isset($_GET['checkiffriend'])){
	$friend = new FRIEND();
	
	$user_id = $_SESSION['user_session'];
	$friend_id = $_GET['checkiffriend'];

	$isfriends = $friend->checkiffriend($user_id, $friend_id);
	
	echo $isfriends;
}

//from session
if(isset($_GET['sessionamountoffollowing'])){
	$friend = new FRIEND();

	$friends = $friend->getfriends($_SESSION['user_session']);

	echo sizeof($friends);
}

if(isset($_GET['sessionamountoffollowers'])){
	$friend = new FRIEND();
	$friends = $friend->getfollowers($_SESSION['user_session']);
	echo sizeof($friends);
}

if(isset($_GET['amountoffollowing'])){
	$user_id = $_GET['amountoffollowing'];

	$friend = new FRIEND();
	$friends = $friend->getfriends($user_id);

	echo sizeof($friends);
}

if(isset($_GET['amountoffollowers'])){
	$user_id = $_GET['amountoffollowers'];

	$friend = new FRIEND();
	$friends = $friend->getfollowers($user_id);
	
	echo sizeof($friends);
}


?>