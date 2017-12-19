<?php require('db_con.php');
session_start();

include('community_methods.php');
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="js/jquery.validate.js"></script>
  
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
			
			
			<? if(isset($_SESSION['userid'])) { ?>
				
			<h3 style="text-align:center;">Welcome <? echo $_SESSION['username']; ?>!</h3>
			<br>
			<div class="col-md-2 col-md-offset-5">
			<a href="community.php?call_method=logout" class="btn btn-block btn-submit">Log out</a>
			</div>
			<div class="col-md-12">
			<br>
			</div>
			<div class="col-md-2 col-md-offset-5">
			<a href="#newtopic" class="btn btn-block btn-submit">Create New Post</a>
			</div>
			<div class="col-md-12">
			<h2>Posts</h2>
			</div>
			<table class="table table-bordered table-hover">
			
			  <thead>
				<tr>
				  <th scope="col" style="width:50%;">Topic</th>
				  <th scope="col" style="width:25%;">Author</th>
				  <th scope="col" style="width:25%;">Date posted</th>
				</tr>
			  </thead>
			  <tbody>
				
			<?php
			$sql = 
			'SELECT forum_topics.id, forum_topics.headline, forum_topics.postdate, users.name
			FROM forum_topics 
			JOIN users ON forum_topics.user_id = users.id 
			ORDER BY forum_topics.postdate DESC';
			$stmt = $con->prepare($sql);
			$stmt->execute();
            $stmt->bind_result($tid, $headline, $postdate, $username);
											   
			while ($stmt->fetch()){
			?>
				<tr style="cursor:pointer;" onclick="window.location.assign('topic.php?id=<?php echo $tid ?>')">
				  <td><? echo $headline; ?></td>
				  <td><? echo $username; ?></td>
				  <td><? echo $postdate; ?></td>
				</tr>	
			<?}?>
				
				</tbody>
			</table>	
			
			<? } else { ?>
			<h2 style=text-align:center;>Register or login below to discuss CSR topics on our forum!</h2>
			<div class="col-md-6 col-sm-6 col-xs-12 left">
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form" id="registerform" style="text-align:center;">
			<h4>Register</h4>
			<div class="form-group">
			<input class="form-control form" type="text" name="username" placeholder="Username" minlength="3" required/>
			</div>
			<div class="form-group">
			<input class="form-control form" type="password" name="password_1" placeholder="Password" required/>
			</div>
			<div class="form-group">
			<input class="form-control form" type="password" name="password_2" placeholder="Confirm Password" required/>
			</div>
			<input type="hidden" name="call_method" value="register"/>
					
			<?php if(isset($register_error)) { ?>
					<div class="invalid-feedback">
        			<?php echo $register_error ?>
     				</div>
					<? } ?>
				
			<?php if(isset($username_error)) { ?>
					<div class="invalid-feedback">
        			<?php echo $username_error ?>
     				</div>
					<? } ?>
			<button type="submit" name="submit" class="btn btn-block btn-submit">Register and Login</button>
				
	
				</form>
		
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 right">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="loginform" style="text-align:center;">
					<h4>Login</h4>
					<div class="form-group">
					<input class="form-control form" type="text" name="username" placeholder="Username" required/>
					</div>
					<div class="form-group">	
					<input class="form-control form" type="password" name="password" placeholder="Password" required/>
					</div>
					<input type="hidden" name="call_method" value="login"/>
					
					<?php if(isset($login_error)) { ?>
					<div class="invalid-feedback">
        			<?php echo $login_error ?>
     				</div>
					<? } ?>
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
<section id="newtopic">
	<div class="container">
		
		<div class="row">
		<div class="col-md-6 col-xs-12 col-md-offset-3">
			<h4>New post</h4>
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="form-group">
					
					<input type="text" name="topic" required maxlength="30" class="form-control" id="exampleFormControlInput1" placeholder="Topic">
				</div>
				<div class="form-group">
					
					<textarea name="content" required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Content"></textarea>
				</div>
				<div class="form-group">
					<input type="hidden" name="call_method" value="newtopic"/>
					<button type="submit" class="btn btn-block btn-submit">Submit</button>
				</div>
				<br>
			</form>
		</div>
		</div>	
	</div>	
</section>
<? } ?>
  <!--Footer-->
	<br>
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
	<script>
		$("#registerform").validate();
		$("#loginform").validate();
	</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  

</body>

</html>
