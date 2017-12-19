<?php require('db_con.php');
session_start();

include('topic_methods.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Greenpeace</title>
  <meta name="description" content="Greenpeace">
  <meta name="keywords" content="Greenpeace, CSR, Microsoft, Google, Apple">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Green<span>peace</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php#feature">What is CSR?</a></li>
          <li><a href="index.php#organisations">Does CSR matter to you?</a></li>
          <li><a href="index.php#ourwork">Our Work</a></li>
          <li><a href="index.php#partners">Partners</a></li>
          <li><a href="community.php">Community</a></li>
      
          
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
<section id="forum">
	<div class="container">
		
		<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<a href="community.php" class="btn btn-block btn-submit">Back</a></div>
			<div class="col-md-12">
			<br>
			</div>
			<div class="col-md-2 col-md-offset-5">
			<a href="#newpost" class="btn btn-block btn-submit">Reply to topic</a></div>
			<div class="col-md-10 col-xs-12 col-md-offset-1">
			<? if(isset($_SESSION['userid'])) { ?>
			
			<br>
			
			
				
			<?php
			$sql = 'SELECT forum_topics.headline, forum_topics.content, forum_topics.postdate, users.name
			FROM forum_topics JOIN users ON forum_topics.user_id = users.id WHERE forum_topics.id = ?';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('i', $_GET['id']);
			$stmt->execute();
                        $stmt->bind_result($headline, $content, $postdate, $username);
											   
			while ($stmt->fetch());
			?>
			
			<h2><? echo $headline; ?></h2>
			<table class="table table-bordered">
				<tbody>
				<tr>
					
				  <td style="width: 15%;">Posted by <? echo $username; ?><br /><? echo $postdate; ?></td>
					<td style="width: 85%;"><? echo $content; ?></td>
					</tr>	</tbody>
				</table>
				<h4>Replies</h4>
				<table class="table table-bordered">
				<tbody>
				<?php
				$sql = 
				'SELECT forum_posts.content, forum_posts.postdate, users.name FROM forum_posts 
				JOIN users ON forum_posts.user_id = users.id 
				WHERE forum_posts.topic_id = ? 
				ORDER BY forum_posts.postdate';
				$stmt = $con->prepare($sql);
				$stmt->bind_param('i', $_GET['id']);
				$stmt->execute();
				$stmt->bind_result($content, $postdate, $username);

				while ($stmt->fetch()) {
				?>
				
				<tr>
					<td style="width: 15%;">Posted by <? echo $username; ?><br /><? echo $postdate; ?></td>
					<td style="width: 85%;"><? echo $content; ?></td>
				</tr>	
					
				<? } ?>
				</tbody>
			</table>	
			</div>
			<? } else { ?>
			<div class="col-md-6 col-sm-6 col-xs-12 left">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" style="text-align:center;">
			<h3>Register User</h3>
			<div class="form-group">
			<input type="text" name="username" placeholder="Username">
					</div>
			<div class="form-group">
			<input type="password" name="password_1" placeholder="Password">
			</div>
			<div class="form-group">
			<input type="password" name="password_2" placeholder="Confirm Password">
			</div>
			<input type="hidden" name="call_method" value="register"/>
			<button type="submit" class="btn btn-block btn-submit">Register</button>
				
	
				</form>
		
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 right">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" style="text-align:center;">
					<h3>Login</h3>
					<div class="form-group">
					<input type="text" name="username" placeholder="Username"/>
					</div>
					<div class="form-group">	
					<input type="password" name="password" placeholder="Password"/>
					</div>
					<input type="hidden" name="call_method" value="login"/>
					<div class="form-group">
					<button type="submit" class="btn btn-block btn-submit">Login</button>
					</div>
				
				</form>
				
			
			</div>
			
			<? } ?>
		</div>
	
	</div>
	
</section>
<? if(isset($_SESSION['userid'])) { ?>
<section id="newpost">
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-xs-12 col-md-offset-3">
			<h4>Reply to this topic</h4>
			<form action="<?= $_SERVER['PHP_SELF'] ?>?id=<?= $_GET['id']; ?>" method="post">
				<div class="form-group">
					<textarea name="content" required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write a reply here"></textarea>
				</div>
				<div class="form-group">
					<input type="hidden" name="call_method" value="newpost"/>
					<button type="submit" class="btn btn-block btn-submit">Submit</button>
				</div>
			</form>
		</div>
		</div>	
	</div>
	<br>
</section>
<? } ?>
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Sign Up For Our Newsletter</h3>

      <form class="mc-trial row">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Submit <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2016 Greenpeace. All rights reserved
      <div class="credits">
        
        
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  

</body>

</html>
