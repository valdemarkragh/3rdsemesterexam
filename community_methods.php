<?php

// if call method function is set
if(isset($_POST['call_method'])) {	
// 	
if($_POST['call_method'] == 'register'){
	
	$un = filter_input(INPUT_POST, 'username');	
	$password_1 = filter_input(INPUT_POST, 'password_1');	
	$password_2 = filter_input(INPUT_POST, 'password_2');
	
	$sql = 'SELECT id FROM users WHERE name = ?';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows < 1) {

		if($password_1 == $password_2){
			$pw = password_hash($password_1, PASSWORD_DEFAULT);
			$sql = 'INSERT INTO users (name, password) VALUES (?,?)';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('ss', $un , $pw);	
			$stmt->execute();
			
			$id = $con->insert_id;
			
			$_SESSION['userid'] = $id;
			$_SESSION['username'] = $un;
			
		} else {
			$register_error = 'Passwords doesnt match';
		}
	 
	} else {
		$register_error = 'Username is already in use';
	} 
		 
}	

if($_POST['call_method'] == 'login'){
	
	$un = filter_input(INPUT_POST, 'username');
			
	$pw = filter_input(INPUT_POST, 'password');
			
	
	$sql = 'SELECT id, password FROM users WHERE name=?';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($id, $password);
	while($stmt->fetch());
	
	if(password_verify($pw, $password)){
		
		$_SESSION['userid'] = $id;
		$_SESSION['username'] = $un; // Store information i Session variable
		echo "Success";
	}
	else {
		$login_error = 'Wrong username or password';
	}
}	
	
if($_POST['call_method'] == 'newtopic'){
	
	$topic = filter_input(INPUT_POST, 'topic');	
	$content = filter_input(INPUT_POST, 'content');
			
	$sql = 'INSERT INTO forum_topics (headline, content, postdate, user_id) VALUES (?, ?, now(), ?)';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('ssi', $topic, $content, $_SESSION['userid']);
	$stmt->execute();
}
	
}
if(isset($_GET['call_method'])) {
	if($_GET['call_method'] == 'logout') {

		session_destroy();
		header('location: community.php');
	} 
}


?>	