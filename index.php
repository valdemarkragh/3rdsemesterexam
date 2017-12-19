<?php require('db_con.php') ?>

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
  <script>
	  
	  //google
	$(document).ready(function(){
    $("#googlebtn").click(function(){
        $("#companyshow").load("google.html");
    });
		
	$("#microsoftbtn").click(function(){
        $("#companyshow").load("microsoft.html");
    });
		
	$("#applebtn").click(function(){
        $("#companyshow").load("apple.html");
    });
});
	  
	  

	
	</script>
	
	<script>
	
            //smooth scrolling
            $(document).ready(function(){
                $("a").on('click', function(event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();
                        // Store hash
                        var hash = this.hash;
                        // Using jQuery's animate() method to add smooth page scroll
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }
                });
            });
        
	
	</script>
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
          <li><a href="#feature">What is CSR?</a></li>
			<li><a href="#organisations">Does CSR matter to you?</a></li>
          <li><a href="#ourwork">Our Work</a></li>
          <li><a href="#partners">Partners</a></li>
          <li><a href="community.php">Community</a></li>
          <!-- <li class="btn-trial"><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li> -->
          
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Greenpeace</h2>
            </div>
			  <div class="col-md-12">
				  <br>
			  </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Make a difference today!</p>
              <p class="small-text">The world needs a new story – a story in which humanity overcomes seemingly impossible odds to not only survive, but to thrive. A story in which healthy, abundant oceans and forests heal a world powered by the natural forces that have powered life on Earth for billions of years</p>
             
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>What is CSR?</h2>
          <p>Corporate Social Responsibility is a management concept whereby  companies integrate social and environmental concerns in their business  operations and interactions with their stakeholders. Greenpeace see it as one of their responsibilities to ensure that companies strive to optimize their CSR strategies.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Environmental Sustainability</h4>
                <p>Sustainability is responsibility for the impact that the organization exerts on its surroundings, in business, environmental and social terms. Conscious management of the impact translates into lower costs, improved external relations and better managed risks.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Social Responbility</h4>
                <p>Social responsibility is an ethical framework and suggests that an entity, be it an organization or individual, has an obligation to act for the benefit of society at large. Social responsibility is a duty every individual has to perform so as to maintain a balance between the economy and the ecosystems.</p>
              </div>
              <div class="fea-img pull-left">
               <i class="fa fa-male" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Benefits for the Company</h4>
                <p>Building a reputation as a responsible business can lead to competitive advantage. Companies often favour suppliers who have responsible policies, since this can reflect on how their customers see them. Some customers don't just prefer to deal with responsible companies - they insist on it.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>80%</h3>
              
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>93%</h3>
              
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
				<h3>89%</h3>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt">Does CSR matter to you?</h3>
              <h4 class="sm-txt">Studies show that....<h4>
            </hgroup>
				  <br>
            <p>- 80 percent would tell friends and family about a company’s CSR efforts</p>
			<p>- 93 percent of global citizens will have a more positive image of a company engaging in CSR</p>
			<p>- 89 percent believe companies need to do a better job showing how social and environmental commitments are personally relevant</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <section id="ourwork" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Our Work</h2>
          <p>At Greenpeace we have a professional and dedicated team ready to help and guide your company's CSR policy. Partner with us and you will experience all of the great benefits of CSR.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>CSR Policy Review</h4>
                <p>Alternatively, if you have been working to the guidelines in your CSR policy, but feel it is time to refresh and review your approach to sustainable business, Greenpeace can help you review and evaluate your policy</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Development</h4>
                <p>Greenpeace conduct surveys with your stakeholders (including your workforce) to uncover objective input and feedback. Your CSR policy may require significant organisational changes, or the support of external agencies. Greenpeace can put you in touch with key people to help your CSR strategy develop.</p>
              </div>
              <div class="fea-img pull-left">
               <i class="fa fa-list" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Implementation</h4>
                <p>Defining how you will implement your updated CSR policy. Easy to follow processes will ensure that your policy becomes an integral part of your business. CSR Training helps to establish the need for CSR among your workforce, and improves rates of implementation.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
		
<!--Partners-->
  <section id="partners" class="section-padding" style="background-color:rgb(247, 247, 247);">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Partners</h2>
			<p>We have the past years been working with multiple companies in order to improve their CSR strategies. We have listed some of the most prominent companies below</p>
          <p>Click on the images to show how our partners work with CSR strategies within their workfield</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/maxresdefault.jpg" class="img-responsive">
            <figcaption>
              <h3>Apple</h3>
				
              <p>Click on the image to display Apple's work with Corporate Social Responbility</p>
            </figcaption>
            <a id="applebtn" href="#companywork"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/microsofts-logo.jpg" class="img-responsive">
            <figcaption>
              <h3>Microsoft</h3>
              <p>Click on the image to display Microsoft's work with Corporate Social Responbility</p>
            </figcaption>
            <a id="microsoftbtn" href="#companywork"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/google2.0.0.jpg" class="img-responsive">
            <figcaption>
              <h3>Google</h3>
              <p>Click on the image to display Google's work with Corporate Social Responbility</p>
            </figcaption>
            <a id="googlebtn" href="#companywork"></a>
          </figure>
        </div> 
      </div>
    </div>
  </section>
	<!--/ Partners-->
	<!-- Companywork -->
	<section id="companywork" style="background-color:rgb(247, 247, 247);">
	<div id="companyshow"></div>
		
		</section>
  <!--/ Companywork -->
  <!--Community-->
  <section id="community" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Join Our Community!</h2>
          <p>Interact with other users and consumers around the world and discuss CSR on our brand new forum! <br>
			  Below you can see the recent posts by our users</p>
          <hr class="bottom-line">
        </div>
		 <?php 
			$sql = 'SELECT forum_topics.headline, forum_topics.postdate, users.name
			FROM forum_topics JOIN users ON forum_topics.user_id = users.id ORDER BY forum_topics.postdate LIMIT 3';
			$stmt = $con->prepare($sql);
			$stmt->execute();
            $stmt->bind_result($headline, $postdate, $username);
											   
			while ($stmt->fetch()) {;
	
		?>
        <div class="col-md-4 col-sm-6">
         <div class="service-box text-center"><a href="community.php">
            <div class="icon-box">
              <i class="fa fa-clipboard" aria-hidden="true"></i>
            </div>
            <div class="icon-text">
              <h4><?php echo $headline ?></h4>
			  <p>Posted by <?php echo $username ?></p>
			  
            </div>
			 </a>
          </div>
			 
			 
        </div>
		  <? } ?>
		  <div class="col-md-12">
		  <br>
		  </div>
		  <div class="col-md-4 col-md-offset-4">
		 <a href="community.php" class="btn btn-block btn-submit">Join the Forum!</a>
		  </div>
      </div>
    </div>
  </section>
  <!--/ Community-->
  
  

  
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Partners Are Saying?</h2>
     
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Working with Greenpeace was the best choice we have made. Great people to work with, full of personality. A really well-organized company. It's been an excellent benefit for our company"</p>
            <p class="text-name">Lisa Jackson - Vice President of Environmental Initiatives at Apple</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Choosing to tie a partnership with Greenpeace really improved our Corporate Social Responbility strategies. Now we really understand how important it is to ensure that our activites are substainable in all aspects thanks to guidance from Greenpeace"</p>
            <p class="text-name">Susan Hauser - Corporate Vice President at Microsoft</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contact Us</h2>
          <p>Please fill out the contact form below to get in touch with us!</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="index.php#contact" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Sign Up For Our Newsletter</h3>

      <form action="index.php#footer" class="mc-trial row">
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
        <li><a href="https://www.facebook.com/GreenpeaceCph/" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
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
