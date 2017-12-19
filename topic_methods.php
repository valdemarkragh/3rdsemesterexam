<?php
if(isset($_POST['call_method'])) {		
	
	if($_POST['call_method'] == 'newpost'){

		$content = filter_input(INPUT_POST, 'content');

		$sql = 'INSERT INTO forum_posts (topic_id, user_id, content, postdate) VALUES (?, ?, ?, now())';
		$stmt = $con->prepare($sql);
		$stmt->bind_param('iis', $_GET['id'], $_SESSION['userid'], $content);
		$stmt->execute();
	}
	
}
?>	