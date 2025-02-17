<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Onine examiner</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body 


.modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}



  {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .left{
  float:left;
}

.right{
  float:right;
}

.clear{
  clear:both;
}
  .jumbotron {
      background-color: #4267b2;
      /* background-color: #4267b2; */
      color: #fff;
      padding: 70px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #4267b2;
      font-size: 50px;
  }
  .logo {
      color: #4267b2;
      font-size: 200px;
  }
 
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #4267b2;
  }
  .carousel-indicators li {
      border-color: #4267b2;
  }
  .carousel-indicators li.active {
      background-color: #4267b2;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #4267b2; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #4267b2;
      background-color: #fff !important;
      color: #4267b2;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #4267b2 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #4267b2;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;

      background-color: #4267b2;
      z-index: 9999;
      border: 0;
      
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #4267b2 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #4267b2 !important;
      background-color: #fff !important;

  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #4267b2;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  @layer library, reset, base, demo;
  @import 'https://unpkg.com/open-props@2.0.0-beta.5' layer(library);
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300..700&display=swap');

  @layer reset {
    *,
    ::before,
    ::after {
      box-sizing: border-box;
    }
    :where(:not(dialog)) {
      margin: 0;
    }
  }

  @layer base {
    html {
      --nav-block-size: 74px;
      --brand-gradient: linear-gradient(227deg,
          #1400c7 0%,
          #00bbff 100%);
      @media (prefers-reduced-motion: no-preference) {
        scroll-behavior: smooth;
      }
    }
    body {
      font-family: 'Inter', sans-serif;
      min-block-size: 100dvb;
    }
  }

  @layer demo {
    .navbar {
      min-block-size: var(--nav-block-size);
      display: grid;
      position: fixed;
      inset-block-start: 0;
      inset-inline: 0;
      background-color:white;
      z-index: var(--layer-3);
      place-items: center end;
      padding-block: var(--size-3);
      padding-inline: var(--size-5);
      @media (width >=600px) {
        padding-inline: 6dvi;
      }
    }
    .nav-cta-btn {
      font-size: var(--font-size-1);
      font-weight: var(--font-weight-7);
      inline-size: max-content;
      white-space: nowrap;
      text-decoration: none;
      padding-block: var(--size-3);
      padding-inline: var(--size-7);
      border: var(--border-size-2) solid transparent;
      color: black;
      position: relative;
      isolation: isolate;
      background: linear-gradient(white, white) padding-box,
        var(--brand-gradient) border-box;
      border-radius: var(--radius-6);
      overflow: hidden;
      &::before {
        content: '';
        display: block;
        position: absolute;
        inset: 0;
        background: var(--brand-gradient);
        mix-blend-mode: screen;
      }
      &:hover {
        color: white;
        &::before {
          background: var(--brand-gradient) padding-box,
            var(--brand-gradient) border-box;
          background-repeat: no-repeat;
          background-size: contain;
          mix-blend-mode: normal;
          z-index: -1;
        }
      }
    }
    .section {
      --section-block-size: max(400px, 100dvb);
      display: grid;
      background-color: white;
      min-block-size: var(--section-block-size);
      position: relative;
      block-size: 100%;
      display: grid;
      >* {
        grid-area: 1/1;
      }
    }
    .section-wrapper {
      position: relative;
      display: grid;
      @media (width >=960px) {
        grid-template-columns: 1fr 1fr;
      }
      @media (width < 960px) {
        padding-block-start: calc(var(--nav-block-size) + var(--size-7));
        padding-block-end: var(--size-7);
      }
    }
    .video {
      display: block;
      inline-size: 100%;
      block-size: 100%;
      object-fit: cover;
      position: relative;
      z-index: -1;
    }
    .content-wrapper {
      display: grid;
      @media (width < 960px) {
        gap: var(--size-7);
      }
    }
    .meta {
      display: grid;
      gap: var(--size-3);
      font-size: 1.2em; /* Increase font size */
      text-align: left; /* Align text to the left */
    }
    .content {
      display: grid;
      inline-size: 100%;
      place-items: center;
      padding-block: var(--size-7);
      padding-inline: var(--size-5);
      @media (width >=960px) {
        padding: var(--size-10);
        min-block-size: 100cqb;
        place-items: center end;
      }
      @media (width < 960px) {
        gap: var(--size-5);
      }
    }
    .mobile-visual {
      inline-size: 100%;
      aspect-ratio: var(--ratio-square);
      @media (width >=960px) {
        display: none;
      }
    }
    .mobile-visual img {
      border-radius: 10px; /* Apply border radius to images */
      float: right; /* Align images to the right */
      margin-left: 20px; /* Add some space between text and image */
    }
    .headline {
      font-size: var(--font-size-7);
      font-weight: var(--font-weight-4);
      max-inline-size: var(--size-content-1);
      text-wrap: pretty;
      @media (width < 960px) {
        font-size: var(--font-size-6);
      }
    }
    .desc {
      font-size: var(--font-size-4);
      line-height: 1.5;
      max-inline-size: 80ch;
      text-wrap: pretty;
      @media (width < 960px) {
        font-size: var(--font-size-3);
      }
    }
    .visual {
      display: grid;
      position: sticky;
      block-size: var(--section-block-size);
      inset-block-start: 0;
      container-type: size;
      @media (width < 960px) {
        display: none;
      }
    }
    .video-visual {
      inline-size: 100%;
      block-size: var(--section-block-size);
      display: block;
      position: sticky;
      inset-block-start: 0;
      isolation: isolate;
      filter: hue-rotate(210deg);
    }
    .card-wrapper {
      container-type: size;
      display: grid;
      place-items: center;
      overflow: clip;
      >* {
        grid-area: 1/1;
      }
    }
    .card {
      aspect-ratio: var(--ratio-square);
      inline-size: 70cqi;
      border-radius: var(--radius-3);
      scale: 0.4;
    }
    .card-img {
      display: block;
      inline-size: 100%;
      block-size: 100%;
      object-fit: cover;
    }
    .card-1 {
      scale: 1;
    }
    .card-2 {
      translate: -35cqi 30cqb;
      opacity: 0.3;
    }
    .card-3 {
      translate: 0cqi 50cqb;
      opacity: 0.5;
    }
    .card-4 {
      translate: 45cqi 40cqb;
      opacity: 0.5;
    }
    .content-1 {
      --_text-gradient: linear-gradient(227deg,
          #1400c7 0%,
          #00bbff 100%);
    }
    .content-2 {
      --_text-gradient: linear-gradient(227deg,
          #28dc28 0%,
          #00bbff 100%);
    }
    .content-3 {
      --_text-gradient: linear-gradient(227deg,
          #1400c7 0%,
          #b800b1 100%);
    }
    .content-4 {
      --_text-gradient: linear-gradient(227deg,
          #b800b1 0%,
          #f50000 100%);
    }
    .text-highlight {
      background: var(--_text-gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-fill-color: transparent;
    }
  }

  @supports (animation-timeline: scroll()) {
    body {
      timeline-scope: --content-1, --content-2, --content-3, --content-4;
    }
    .section {
      view-timeline-name: --section;
    }
    .content-1 {
      view-timeline-name: --content-1;
    }
    .content-2 {
      view-timeline-name: --content-2;
    }
    .content-3 {
      view-timeline-name: --content-3;
    }
    .content-4 {
      view-timeline-name: --content-4;
    }
    .card {
      animation-timing-function: linear;
      animation-fill-mode: forwards;
    }
    .card-1 {
      animation-timeline: --content-1;
      animation-name: slide-up-first-card;
    }
    .card-2 {
      animation-timeline: --content-2;
      animation-name: slide-up-card;
    }
    .card-3 {
      animation-timeline: --content-3;
      animation-name: slide-up-card;
    }
    .card-4 {
      animation-timeline: --content-4;
      animation-name: slide-up-card;
    }
    .video-visual {
      animation-timeline: --section;
      animation-range-end: exit 110%;
      animation-name: update-hue;
      animation-timing-function: step-end;
      animation-fill-mode: forwards;
    }
    @keyframes update-hue {
      0% {
        filter: hue-rotate(210deg);
      }
      25% {
        filter: hue-rotate(150deg);
      }
      45% {
        filter: hue-rotate(300deg);
      }
      60% {
        filter: hue-rotate(4deg);
      }
    }
    @keyframes slide-up-first-card {
      50% {
        translate: 0;
        opacity: 1;
      }
      90% {
        translate: 0 -50cqi;
        scale: 0.6;
      }
      100% {
        translate: 0 -100cqi;
        opacity: 0;
      }
    }
    @keyframes slide-up-card {
      50% {
        translate: 0;
        opacity: 1;
      }
      100% {
        translate: 0 -100cqi;
        opacity: 0;
      }
    }
  }
  </style>


</head>





<body>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1">SIGN UP</a></li>
         <li><a href="#" data-toggle="modal" data-target="#login2">TEACHER</a></li>
  
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Online Examination</h1> 
  <p>e-EXAMINATION</p> 
  <!--  form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form -->
</div>

<!-- Add new interface here -->
<!-- <nav class="navbar"> -->
    <!-- <a href="Authentication.html" class="nav-cta-btn">Get Started</a> -->
<!-- </nav> -->
<div class="section">
    <div class="video-visual">
        <video
            class="video"
            autoplay
            loop
            muted
            poster=""
            role="none"
            aria-label="background gradient animation"
        >
            <source
                src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/dynamic-content-lockups-v2/assets/bg-gradient-animation.mp4"
                type="video/mp4"
            />
        </video>
    </div>
    <div class="section-wrapper">
        <div class="content-wrapper">
            <div class="content content-1">
                <div class="mobile-visual">
                    <img
                        class="card-img"
                        src="Photos/image1.jpg"
                        alt="Fantasy warrior  - Video game character"
                    />
                </div>
                <div class="meta">
                    <h2 class="headline">
                    Multi-Device & <span class="text-highlight">Flexible Scheduling</span>
                    </h2>
                    <p class="desc">
                    Take your exam anytime, anywhere on your preferred device, whether it's a laptop, tablet,
                     or mobile phone. Our system is designed to provide a seamless and convenient examination
                      experience, allowing candidates to participate without location or device restrictions.
                       With flexible scheduling, you can choose an exam time that best suits your availability, 
                       ensuring a stress-free and personalized assessment process. Whether you're at home, in a café,
                        or traveling, you can easily access and complete your exam with ease. This flexibility ensures
                         that candidates can focus on their performance without worrying about rigid schedules or device limitations,
                     making the examination process more accessible, efficient, and user-friendly.                   
                     </p>
                </div>
            </div>
            <div class="content content-2">
                <div class="mobile-visual">
                    <img
                        class="card-img"
                        src="Photos/image2.jpg"
                        alt="Green haired ninja in armor - Video game character"
                    />
                </div>
                <div class="meta">
                    <h2 class="headline">
                    Duration-Based 
                        <span class="text-highlight">Exams</span>
                    </h2>
                    <p class="desc">
                    Our duration-based examination system ensures a structured and time-bound assessment experience. Each exam is designed with a fixed time limit, requiring candidates to complete their answers within the
                     allotted duration. This approach helps maintain fairness and consistency in evaluations while encouraging effective time management. Once the exam is submitted, candidates can instantly
                     view their performance summary and scores, allowing them to analyze their results immediately. This feature ensures a disciplined assessment process, helping candidates stay focused and complete exams efficiently. 
                    </p>
                </div>

                
            </div>
            <div class="content content-3">
                <div class="mobile-visual">
                    <img
                        class="card-img"
                        src="Photos/image3.png"
                        alt="Female warrior in armor - Video game character"
                    />
                </div>
                <div class="meta">
                    <h2 class="headline">
                    Secure Login &  
                        <span class="text-highlight">Data Encryption</span>
                    </h2>
                    <p class="desc">
                    Our system ensures secure authentication by using MD5 hashing for password encryption, preventing direct access to user credentials. During login, passwords are validated using hashed comparisons, ensuring security against unauthorized access. Additionally, session management is implemented to prevent session hijacking and unauthorized logins.

For data protection, all communication is secured using SSL/TLS encryption, preventing data interception during transmission. User details, exam responses, and sensitive information are securely stored in the database with MD5-hashed passwords, maintaining privacy and integrity. These measures ensure a safe and protected examination environment.
                    </p>
                </div>
            </div>
            <div class="content content-4">
                <div class="mobile-visual">
                    <img
                        class="card-img"
                        src="Photos/image4.png"
                        alt="Agile warrior - Video game character"
                    />
                </div>
                <div class="meta">
                    <h2 class="headline">
                    Instant Ranking & <span class="text-highlight">Real-Time Leaderboard</span>
                    </h2>
                    <p class="desc">
                    Receive your exam results instantly upon submission with a detailed performance breakdown. Our system provides a clear summary of your performance, including the total number of questions attempted, the count of correct (✅) and wrong (❌) answers, and an automatically calculated score. Additionally, an overall score summary helps you quickly assess your performance at a glance.
                   Our dynamic leaderboard allows you to compare your performance with peers in real time. Stay ahead by tracking your ranking, helping you gauge where you stand among other candidates. This feature ensures transparency and motivates you to improve with every attempt.

                    </p>
                </div>
            </div>
        </div>
        <div class="visual">
            <div class="card-wrapper">
                <div class="card card-1">
                    <img
                        class="card-img"
                        src="Photos/image1.jpg"
                        alt="image1"
                    />
                </div>
                <div class="card card-2">
                    <img
                        class="card-img"
                        src="Photos/image2.jpg"
                        alt="image2"
                    />
                </div>
                <div class="card card-3">
                    <img
                        class="card-img"
                        src="Photos/image3.png"
                        alt="image3"
                    />
                </div>
                <div class="card card-4">
                    <img
                        class="card-img"
                        src="Photos/image4.png"
                        alt="image4"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of new interface -->

<!-- Container (Admin Section) -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#4267b2;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -ADMIN</b></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="head.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!----Teacher signin--->
<div class="modal fade" id="login2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#4267b2;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -TEACHER</b></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Teacher user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login2" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Container (USERS section) -->
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:#4267b2;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -USER</b></span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--sign up modal start-->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span  style="color:#4267b2;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>SIGN UP</b></span></h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>  
  <div class="col-md-6">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="gender"></label>
  <div class="col-md-6">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>  
  <div class="col-md-6">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label title1" for="email"></label>
  <div class="col-md-6">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="mob"></label>  
  <div class="col-md-6">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="cpassword"></label>
  <div class="col-md-6">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for=""></label>
  <div class="col-md-6"> 
    <input  type="submit"  style="background: #4267b2;" class="sub" value="sign up"  />
  </div>
</div>
</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign up modal closed-->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>


</html>
