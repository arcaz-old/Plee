<?php include '../controllers/UserFunctions.php'; ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Plee - Social Network For Events</title>

<!-- Fonts Online -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Style Sheet -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/main-style.css">
<link rel="stylesheet" href="css/style.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div id="main-wrapper"> 
  <?php if(isset($_SESSION['username'])): ?>
  <!-- Top Toolbar -->
  <div class="toolbar">
    <div class="uou-block-1a blog">
      <div class="container">
        <div class="search"> <a href="#" class="toggle fa fa-search"></a>
          <form action="#">
            <input type="text" class="search-input" placeholder="Search ...">
            <input type="submit" value="">
          </form>
        </div>
        <ul class="authentication">
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
        <div class="language"> <a href="#" class="toggle"><img src="images/flags/32/US.png" alt=""> ENG</a>
          <ul>
            <li><a href="#"><img src="images/flags/32/PT.png" alt=""> ENG</a></li>
            <li><a href="#"><img src="images/flags/32/FR.png" alt=""> FR</a></li>
            <li><a href="#"><img src="images/flags/32/ES.png" alt=""> ES</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end .uou-block-1a --> 
  </div>
  <!-- end toolbar -->
  
  <div class="box-shadow-for-ui">
    <div class="uou-block-2b">
      <div class="container"> <a href="#" class="logo"><img src="images/logo.png" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
        <nav class="nav">
          <ul class="sf-menu">
            <li class="active"><a href="index.php"><i class="fa  fa-home"></i></a></li>
            <li> <a href="listing-filter.php">Professionals</a> </li>
            <li> <a href="index.php">Pages</a>
              <ul>
                <li><a href="profile_company.php">Profile Company</a></li>
                <li><a href="profile_company-no-tabs.php">Profile Company No Tabs</a></li>
                <li><a href="user-dashboard(connections)(hotkeys-disabled).php">User Dashboard 1</a></li>
                <li><a href="user-dashboard(connections)(hotkeys-enabled).php">User Dashboard 2</a></li>
                <li><a href="user-dashboard(followers).php">User Dashboard 3</a></li>
                <li><a href="user-dashboard(following).php">User Dashboard 4</a></li>
                <li><a href="blog-post.php">Blog Post</a></li>
              </ul>
            </li>
            <li> <a href="user-profile(layout-1).php">User Profile</a></li>
            <li><a href="blog.php">Events</a></li>
            <li><a href="gui-kit.php">GUI KIT</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- end .uou-block-2b --> 
  </div>
  <?php endif; ?>
  <!-- HOME PRO-->
  <div class="home-pro"> 
    
    <!-- PRO BANNER HEAD -->
    <div class="banr-head">
      <div class="container">
        <div class="row"> 
          
          <!-- CONTENT -->
          <div class="col-sm-7">
            <div class="text-area">
              <div class="position-center-center col-md-10">
                <h1> Here comes the social networking platform that will unify events and the people in it. </h1>
                <h6>Connecting events through a wide network of professional event organizers, DJs, and other event work force. </h6>
              </div>
            </div>
          </div>
          
          <!-- FORM SECTION -->
          <div class="col-sm-5">
            <div class="login-sec"> 
              
              <!-- TABS -->
              <div class="uou-tabs">
                <ul class="tabs">
                  <li><a href="#register">Register Now</a></li>
                  <li class="active"><a href="#log-in">Member Login</a></li>
                </ul>
                
                <!-- REGISTER -->
                <div class="content">
                  <div id="register">
                    <form>
                      <input name="fname" type="text" placeholder="Full Name">
                      <input name="email" type="email" placeholder="Email Address">
                      <input name="phone" type="text" placeholder="Phone">
                      <input name="pass" type="password" placeholder="Password">
                      <button name="submit" type="submit" value="submit">Register</button>
                      
                    </form>
                  </div>
                  
                  <!-- LOGIN -->
                  <div id="log-in" class="active">
                    <form>
                      <input type="email" placeholder="Email Address">
                      <input type="password" placeholder="Password">
                      <button type="submit">Login</button>
                      
                      <div class="forget">Forgot your password? <a href="#.">Click Here</a></div>
                    </form>
                  </div>
                  <div id="forget">
                    <form>
                      <input type="email" placeholder="Email Address">
                      <button type="submit">Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- SERVICES -->
    <section class="services"> 
      
      <!-- SERVICES ROW -->
      <ul class="row">
        
        <!-- SECTION -->
        <li class="col-md-4">
          <div class="ser-inn">
          <i class="fa fa-globe"></i>
            <h4>Stay connected with event organizers</h4>
            <i class="fa fa-globe big"></i>
            <p>From freelancer to groups of event workforce stay connected with them for fast and efficient transactions. </p>
          </div>
        </li>
        
        <!-- SECTION -->
        <li class="col-md-4">
          <div class="ser-inn">
            <i class="fa fa-book"></i>
            <h4>Get the latest event near you</h4>
            <i class="fa fa-book big"></i>
            <p>Town party, city wide raves to simple wedding events be informed on where this event workforce execute their professions</p>
          </div>
        </li>
        
        <!-- SECTION  -->
        <li class="col-md-4">
          <div class="ser-inn">
          <i class="fa fa-picture-o"></i>
            <h4>Share events</h4>
            <i class="fa fa-picture-o big"></i>
            <p>Share events to promote freelancers or groups. Post reviews and rate people's services</p>
          </div>
        </li>
      </ul>
    </section>
    
    <!-- PRO SECTION -->
    <section class="pro-content">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- PRO IMAGE -->
          <div class="col-md-6 pro-inside" style="background:url(images/pro-img-1.jpg) center center no-repeat;"></div>
          
          <!-- PRO CONTENT -->
          <div class="col-md-6 pro-inside">
            <div class="position-center-center col-md-6">
              <h1>Interact with other
                professionals</h1>
              <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium, totam rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                beatae vitae dicta sunt explicabo. </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- PRO SECTION -->
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- PRO TEXT -->
          <div class="col-md-6 pro-inside">
            <div class="position-center-center col-md-6">
              <h1>Collaborate on a
                project</h1>
              <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium, totam rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                beatae vitae dicta sunt explicabo. </p>
            </div>
          </div>
          
          <!-- PRO BACKGROUND -->
          <div class="col-md-6 pro-inside" style="background:url(images/pro-img-2.jpg) center center no-repeat;"></div>
        </div>
      </div>
    </section>
    
    <!-- APP IMAGE -->
    <section class="app-images">
      <div class="container">
        <div class="row"> 
          
          <!-- TEXT -->
          <div class="col-md-6 text-center text-area">
            <h1>SocialMe for your 
              Smartphone</h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
              accusantium doloremque laudantium, totam rem aperiam, 
              eaque ipsa quae ab illo inventore veritatis et quasi architecto 
              beatae vitae dicta sunt explicabo. </p>
            <a href="#."><i class="fa fa-apple"></i> App Store</a> </div>
          
          <!-- APP IMAGE -->
          <div class="col-md-6 text-right"><img src="images/app-img.png" alt="" > </div>
        </div>
      </div>
    </section>
    
    <!-- TESTIMONIALS -->
    <section class="clients-says">
      <div class="container">
        <h3 class="section-title">what our users say </h3>
        <div class="testi">
          <div class="texti-slide"> 
            <!-- SLide -->
            <div class="clints-text">
              <div class="text-in">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
              </div>
              <div class="avatar">
                <div class="media-left"> <a href="#."> <img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                <div class="media-body">
                  <h6>John Kevin Mara</h6>
                  <span>smashingmagazine.com</span> </div>
              </div>
            </div>
            
            <!-- SLide -->
            <div class="clints-text">
              <div class="text-in">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
              </div>
              <div class="avatar">
                <div class="media-left"> <a href="#."> <img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                <div class="media-body">
                  <h6>John Kevin Mara</h6>
                  <span>smashingmagazine.com</span> </div>
              </div>
            </div>
            
            <!-- SLide -->
            <div class="clints-text">
              <div class="text-in">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>
              </div>
              <div class="avatar">
                <div class="media-left"> <a href="#."> <img src="images/clients-avatar-1.jpg" alt=""> </a> </div>
                <div class="media-body">
                  <h6>John Kevin Mara</h6>
                  <span>smashingmagazine.com</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- sponsors -->
    <div class="sponsors" style="background:url(images/sponser-bg.jpg) no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Sponsors</h3>
            <div class="sponsors-slider">
              <div class="item"><img src="images/sponsor_logo1.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo2.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo3.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo4.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo5.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo6.png" alt="" class="img-responsive"></div>
              <div class="item"><img src="images/sponsor_logo4.png" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="uou-block-4e">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6"> <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
        <ul class="contact-info has-bg-image contain" data-bg-image="images/footer-map-bg.png">
          <li> <i class="fa fa-map-marker"></i>
            <address>
            795 Folsom Ave, Suite 600, San Francisco, CA 94107
            </address>
          </li>
          <li> <i class="fa fa-phone"></i> <a href="tel:#">(123) 456-7890</a> </li>
          <li> <i class="fa fa-envelope"></i> <a href="mailto:#">first.last@example.com</a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h5>Twitter Feed</h5>
        <ul class="twitter-feed">
          <li> RT <a href="#">@no1son</a>: Now this <a href="#">http://t.co/TSfMW1qMAW</a> is one hell of a stunning site!!! Awesome work guys <a href="#">@AIRNAUTS</a> <a href="#" class="time">May 25</a> </li>
          <li> Check out the wordpress version of Tucson - <a href="#">http://t.co/sBlU3GbapT</a> <a href="#" class="time">May 22</a> </li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h5>Photostream</h5>
        <ul class="photos-list">
          <li><img src="images/photostream4.jpg" alt=""></li>
          <li><img src="images/photostream6.jpg" alt=""></li>
          <li><img src="images/photostream3.jpg" alt=""></li>
          <li><img src="images/photostream2.jpg" alt=""></li>
          <li><img src="images/photostream1.jpg" alt=""></li>
          <li><img src="images/photostream.jpg" alt=""></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6">
        <h5>Newsletter</h5>
        <p>Subscribe to our newsletter to receive our latest news and updates. We do not spam.</p>
        <form class="newsletter-form" action="#">
          <input type="email" placeholder="Enter your email address">
          <input type="submit" class="btn btn-primary" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end .uou-block-4e -->

<div class="uou-block-4a secondary dark">
  <div class="container">
    <ul class="links">
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms &amp; Conditions</a></li>
    </ul>
    <p>Copyright &copy; 2015 <a href="#">UOUAPPS</a>. All Rights reserved.</p>
  </div>
</div>
<!-- end .uou-block-4a -->

<div class="uou-block-11a">
  <h5 class="title">Menu</h5>
  <a href="#" class="mobile-sidebar-close">&times;</a>
  <nav class="main-nav">
    <ul>
      <li class="active"><a href="index.php">Index</a></li>
      <li> <a href="listing-filter.php">Professionals</a> </li>
      <li><a href="profile_company.php">Profile Company</a></li>
      <li><a href="profile_company-no-tabs.php">Profile Company No Tabs</a></li>
      <li><a href="user-dashboard(connections)(hotkeys-disabled).php">User Dashboard 1</a></li>
      <li><a href="user-dashboard(connections)(hotkeys-enabled).php">User Dashboard 2</a></li>
      <li><a href="user-dashboard(followers).php">User Dashboard 3</a></li>
      <li><a href="user-dashboard(following).php">User Dashboard 4</a></li>
      <li><a href="blog-post.php">Blog Post</a></li>
      <li> <a href="user-profile(layout-1).php">User Profile</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="gui-kit.php">GUI KIT</a></li>
    </ul>
  </nav>
  <hr>
</div>

<!-- Scripts --> 
<script src="https://maps.googleapis.com/maps/api/js"></script> 
<script src="js/jquery-2.1.3.min.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/plugins/superfish.min.js"></script> 
<script src="js/jquery.ui.min.js"></script> 
<script src="js/plugins/rangeslider.min.js"></script> 
<script src="js/plugins/jquery.flexslider-min.js"></script> 
<script src="js/uou-accordions.js"></script> 
<script src="js/uou-tabs.js"></script> 
<script src="js/plugins/select2.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/gmap3.min.js"></script> 
<script src="js/scripts.js"></script> 
<script>

</script>
</body>
</html>