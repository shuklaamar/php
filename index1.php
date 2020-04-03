<?php 
	session_start(); 
  
  if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	

?>
<!Doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!--card gallery css-->
     <link rel="stylesheet" href="css/card gallery.css">
	 
	 <!-- footer css-->
	 <link rel="stylesheet" href="css/footer.css">
	 <!--user icon in nav bar-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	 <!-- navbar and coursel CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/nav bar and coursel.css">
	
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  

    
    <style type="text/css">
	* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
   padding-top:10px;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* fade in overlay*/
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 50%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 50%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 30%;
  text-align: center;
}
<!-- For man and woman-->
.outer-div{
	height: 350px;
	overflow: hidden;
		
}
.inner-div1{
	height: 300px;
	width: 100%;
	background-size: cover;
	background-position: center;
	transition: all 0.5s ease;
	background-image:url(img/Vivo-Nex-3_759.jpg)
}
.inner-div1:hover{
	transform: scale(0.8)
}
.inner-div2{
	height: 300px;
	width: 100%;
	background-size: cover;
	background-position: center;
	transition: all 0.5s ease;
	background-image:url(img/Vivo-Y19-759.jpg)
}
.inner-div2:hover{
	transform: scale(0.8)
}


/* heading hover*/

    </style>

    <!--slishow script-->
    <script type="text/javascript">
      
      var i = 0; // Start point
  var images = [];
  var time = 1000;

  // Image List
  images[0] = 'img/Sports1.png';
  images[1] = 'img/pakistanrailway.jpg';
  images[2] = 'img/Natarajan-Chandrasekaran.jpg';
  images[3] = 'img/Aravinddelhicm.jpg';

  // Change Image
  function changeImg(){
    document.slide.src = images[i];

    if(i < images.length - 1){
      i++;
    } else {
      i = 0;
    }
	setTimeout("changeImg()", time);
  }

  window.onload = changeImg;
    </script>
  </head>
  <body>

   </head>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"  >
                <img src="img/logo.png" class="rounded-circle" style="width:15%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="font-size:25px;">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" >
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="fileupload1.php">Contribute News</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact us</a>
                          </li>
                    <li class="nav-item">
                            <button type="button" class="btn btn-danger">Download</button>
                    </li>
                  </ul>
                  <b> <p style="color:red;">Welcome <?php echo $_SESSION["username"]; ?></p></b>
                </div>
                <a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
           </a>
               
              </nav>
		
   
   
   
   
   
   
   
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block w-100" src="img/twitternews.png" alt="First slide" style="height:500px;width:400px;"></a>
      
      <div class="carousel-caption d-none d-md-block">
         <h3>Twitter Defends Its 'Inclusion and Diversity' Stance Amid Cultural Bias Allegations</h3><br>
        <a href="https://www.news18.com/news/tech/twitter-defends-stance-with-inclusion-and-diversity-amid-cultural-bias-allegations-2377927.html"> <btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/gaming.png" alt="Second slide" style="height:450px;">
      <div class="carousel-caption d-none d-md-block">
         <h3>Anyone in China Under 18 Years of Age Cannot Play Online Games Between 10pm and 8am</h3><br>
         <a href="https://www.news18.com/news/tech/anyone-in-china-under-18-years-of-age-cannot-play-online-games-between-10pm-and-8am-2377343.html"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
    <div class="carousel-item">
     <img class="d-block w-100 h-40" src="img/shaktikanta-das.jpg" alt="Third slide" style="height:450px;">
      <div class="carousel-caption d-none d-md-block">
         <h3>Closely Monitoring Situation at Scam-hit PMC Bank, Forensic Audit Underway: RBI Governor</h3><br>
         <a href="https://www.news18.com/news/business/closely-monitoring-situation-at-scam-hit-pmc-bank-forensic-audit-underway-rbi-governor-2377919.html"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--/.Carousel Wrapper-->
<div class="container-fluid" style="padding-top:40px;">
<div class="row">
  <div class="col-sm-4">
   <h4 style="color:red;font-weight:bold;text-decoration:underline;">Trending News:</h4>
  <img name="slide" style="width:100%">
  <h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/tata-group-not-ruling-out-bid-for-air-india-chairman-n-chandrasekaran-indicates-2373343.html">Tata Group Not Ruling Out Bid for Air India, Chairman N Chandrasekaran Indicates</a></h1>
  </div>
  <div class="col-sm-4">
  <h4 style="color:red;font-weight:bold;text-decoration:underline;">Cricket News:</h4>
  <a href="https://www.news18.com/cricketnext/news/india-vs-bangladesh-mistakes-in-the-field-main-cause-of-defeat-rohit-sharma-2372473.html"><img src="img/Indian-cricket-team1.jpg" style="width:100%"></a>
  <a href="https://www.news18.com/cricketnext/news/india-vs-bangladesh-mistakes-in-the-field-main-cause-of-defeat-rohit-sharma-2372473.html">India vs Bangladesh | Mistakes in the Field Main Cause of Defeat: Rohit Sharma</a>
  </div>
  <div class="col-sm-4">
  <h4 style="color:red;font-weight:bold;text-decoration:underline;">Headlines News:</h4>
    <h1 style="font-size:15px;"> <a href="https://www.news18.com/news/india/delhi-govt-advises-to-stay-indoors-avoid-driving-as-city-air-quality-goes-off-the-charts-2372373.html" style="color:blue;"> Delhi Govt Advises to 'Stay Indoors, Avoid Driving' as City Air Quality Goes Off the Charts</a> </h1><br>
	<h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/each-breath-we-take-is-killing-us-environmentalists-write-to-pm-modi-seeking-intervention-2372399.html" style="color:red">Each Breath is Killing Us': Environmentalists Write to PM Modi Seeking Intervention</a></h1><br>
    <h1 style="font-size:15px;"><a href="https://www.news18.com/news/india/air-purifier-deployed-at-taj-mahal-to-check-damage-from-worsening-air-quality-in-agra-2372353.html" style="color:black">Air Purifier Deployed at Taj Mahal to Check Damage From Worsening Air Quality in Agra</a></h1><br>
    <h1 style="font-size:15px;"><a href="https://www.news18.com/news/tech/still-thinking-of-buying-an-air-purifier-for-your-bedroom-to-beat-999-aqi-in-delhi-2372021.html" style="color:orange">Still Thinking of Buying an Air Purifier For Your Bedroom to Beat 999 AQI in Delhi?</a></h1>
  </div>
</div>
</div>
    <!--slide show-->
	
    
   <section class="gallery-block cards-gallery" style="padding-top:100px;">
    <div class="container-fluid">
      <div class="heading">
        <h2 style="color: red;text-align: center;" >Breaking News</h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/uganda-759.jpg" class="card-img-top">
            <div class="card-body">
 
              <p class="text-muted card-text">Uganda says no plan to bring bill punishing .</p><br>
             <a href="https://indianexpress.com/article/world/uganda-says-no-plan-to-bring-bill-punishing-homosexuals-6102737/"> <button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/BREATH-TESTS-TAKEAWAYS-1-759.jpg" class="card-img-top">
            <div class="card-body">
            
              <p class="text-muted card-text">These machines can put you in jail. Don’t trust them</p><br>
              <a href="https://indianexpress.com/article/world/these-machines-can-put-you-in-jail-dont-trust-them-6103118/"> <button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 transform-on-hover">
            <img src="img/delhi-lawyer-police.jpg" class="card-img-top">
            <div class="card-body">
            
              <p class="text-muted card-text">Watch: Two days after Tis Hazari violence, cop thrashed by protesting lawyer outside Delhi court</p><br>
               <a href="https://indianexpress.com/article/cities/delhi/two-days-after-tis-hazari-violence-cop-thrashed-by-protesting-lawyer-outside-delhi-court-6102678/"><button type="button" class="btn btn-primary">Read</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>
   
   
   
   <div class="container-fluid mt-5">
   
   <h2 style="color: red;text-align: center; padding-top:40px; padding-bottom:40px;">Technology News</h2>
	<div class="row">
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div1">
					<a htref="https://indianexpress.com/article/technology/tech-news-technology/vivo-has-done-well-in-india-now-it-wants-to-become-no-1-smartphone-vendor-6108552/"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
				</div>
				
			</div>
			
		</div>
		
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div2">
						<a htref="https://indianexpress.com/article/technology/mobile-tabs/vivo-y19-with-mediatek-helio-p65-processor-launched-price-specifications-6099681/"><btn class="btn btn-lg btn-danger">KNOW MORE</btn></a>
				</div>
			</div>
		</div>
	
	</div>
</div>
   
   
   
   <!--Footer-->
   
   <h1 style="color: red;text-align: center; padding-top:40px;">About us</h1>
   
   <footer class="footer"> 
  <div class="footer-left col-md-4 col-sm-6">
      <h2> About the website</h2> <p class="about"><span>News Portal Limited is an Indian news media publishing company. It publishes several widely circulated dailies. The company's newspapers are published from over a dozen cities daily, including New Delhi, Mumbai, Ahmedabad, Bengaluru, Kolkata, Pune, Chandigarh, Hyderabad, Kochi, Lucknow, Jaipur, Nagpur, Vadodara and Chennai. Its weekly entertainment magazine Screen, covering Indian film industry, also has a popular following</span>
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Lovely Professional University</span> Jalandhar, India</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> (+91)9999999999</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"> News Portal@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <b>NEWS PORTAL</b>
    <p class="menu">
      <a href="#"> Home</a> 
      <a href="#"> About</a> 
      <a href="#"> Services</a> 
      <a href="#"> News</a> 
      <a href="#"> Contact</a>
    </p>
    <p class="name">News Portal</p>
  </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>