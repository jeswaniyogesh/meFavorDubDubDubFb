<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>meFavor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>   
    <!-- for news ticker css file -->
     <link href="css/li-scroller.css" rel="stylesheet">
     <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- for fancybox slider -->
     <link href="css/jquery.fancybox.css" rel="stylesheet">    
    <!-- website theme file -->
    <!-- <link href="css/theme-red.css" rel="stylesheet"> -->
 
     <link href="css/theme.css" rel="stylesheet">
    <!-- main site css file -->    
    <link href="style.css" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- End Preloader -->
   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <div class="container">
    <!-- start header section -->
    <header id="header">    
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_top">
            <div class="header_top_left">
              <ul class="top_nav">
                <li><a href="home.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="header_top_right">
              <p>Powered by meFavor Team</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_bottom">
            <div class="logo_area">
              <!-- for your img logo format
              <a href="home.html" class="logo">
                <img src="img/logo.jpg" alt="logo">
              </a> -->
              <!-- for your text logo format -->
               <a href="#" class="logo">
                me <span>Favor</span>
              </a> 
            </div>
            <div class="add_banner">
              <a href="#"><img src="img/addbanner_728x90_V1.jpg" alt="img"></a>
            </div>
          </div>
        </div>
      </div>  
    </header><!-- End header section --> 
    <!-- start nav section --> 
    <section id="navArea">
      <!-- Start navbar -->
      <nav class="navbar navbar-inverse" role="navigation">      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <li class="active"><a href="home.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <li><a href="#">Assign Work</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">See Work History</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">From yesterday</a></li>
                <li><a href="#">From Last week</a></li>
                <li><a href="#">From Last Month</a></li>
                <li><a href="#">From Last year</a></li>
                <li><a href="#">All history</a></li>               
              </ul>
            </li>
            <li><a href="#">Assigned to me</a></li> 
            <li><a href="#">do some stuff</a></li> 
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="404.html">profile</a></li>
          </ul>           
        </div><!--/.nav-collapse -->      
      </nav>
    </section><!-- End nav section -->
	<!-- 
    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          
          <div class="latest_newsarea">      
            <span>Latest News</span>
            <ul id="ticker01" class="news_sticker">
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My First News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Four News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Seven News Item</a></li> 
              <li><a href="#"><img src="img/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
              <li><a href="#"><img src="img/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>          
            </ul>
            <div class="social_area">
              <ul class="social_nav">
                <li class="facebook"><a href="#"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="flickr"><a href="#"></a></li>
                <li class="pinterest"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="vimeo"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
                <li class="mail"><a href="mailto:info@smartnews.com"></a></li>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    </section> -->
	
    <!-- start slider section -->
    <section id="sliderSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <!-- Set up your HTML -->
<!--           <div class="slick_slider">
            <div class="single_iteam">
              <a href="single_page.html"> <img src="img/slider_img4.jpg" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="img/slider_img2.jpg" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="img/slider_img3.jpg" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
            <div class="single_iteam">
              <a href="single_page.html"> <img src="img/slider_img1.jpg" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
              </div>
            </div>
          </div> -->
           <form role="form" action="work.php" method="post">
 <div class="form-group">
  <label for="work">Work Description:</label>
  <input type="text" class="form-control" name="work-desc">
</div>
  <div class="form-group">
    <label for="work">Start Location:</label>
    <input type="text" class="form-control" name="work-start-loc">
  </div>


  <div class="form-group">
    <label for="work">End Location:</label>
    <input type="text" class="form-control" name="work-end-loc">
  </div>

<div class="form-group">
    <label for="work">Amount:</label>
    <input type="text" class="form-control" name="work-cost">
  </div>

  <div class="form-group">
    <label for="work">Deadline:</label>
    <input type="text" class="form-control" name="work-deadline">
  </div>

  <div class="checkbox">
    <label><input type="checkbox"> Negotiable data and time </label>
  </div>


  <div class="checkbox">
    <label><input type="checkbox"> Negotiable Rate </label>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
            <h2><span>News feed as a assigner</span></h2>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user7.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Ravi requested for task requested by Ashesh</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user6.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Hariom asked to complete task requested by Abhishek</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user5.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Prabhat confirmed to complete the task raised by Anjali</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user1.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Arvind completed the assigned task</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Rubi completed the task </a>                        
                    </div>
                  </div>
                </li>
              </ul>
             <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End slider section -->
     <!-- =========================
      //////////////This Theme Design and Developed //////////////////////
      //////////// by triumphantakash.github.io======================-->

    <!-- ==================start content body section=============== -->
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">
            <div class="single_post_content">
              <h2><span>News Feed as Driver</span></h2>
              <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
              <?php

			   //          class ChildThread extends Thread {
			   //  			public $data;

			   //  			public function run() {
			   //    			/* Do some work */

			   //    			$this->data = 'result';
			   //  			}
						// }

						// $thread = new ChildThread();

						// if ($thread->start()) {
					 //    /*
					 //     * Do some work here, while already doing other
					 //     * work in the child thread.
					 //     */

						//     // wait until thread is finished
						//     $thread->join();

    		// 				// we can now even access $thread->data
						// }


					$json = file_get_contents('http://localhost:8081/Favor/work/open');
					$feedArray = json_decode($json);
					//echo '<ul>';
					foreach($feedArray as $feedItem){
	 					//echo '<li>'.$feedItem->fname.'</li>';
	 					echo '<li>
		 						<div class="media">
				                    <a href="single_page.html" class="media-left">
				                      <img alt="img" src="img/user1.png">
				                    </a>
				                    	<div class="media-body">
				                      		<a href="single_page.html" class="catg_title">'.$feedItem->workDescription.' requested by '.$feedItem->fname.' '.$feedItem->lname.'</a>
				                    	</div>
				                 </div>
                  			</li>';
					}
					//echo '</ul>';
				?>

<!--                 <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user7.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Ravi requested for task requested by Ashesh</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user6.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Hariom asked to complete task requested by Abhishek</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user5.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Prabhat confirmed to complete the task raised by Anjali</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user1.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Arvind completed the assigned task</a>                        
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/user.png">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Rubi completed the task </a>                        
                    </div>
                  </div>
                </li> -->
              </ul>
             <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
<!--               <div class="single_post_content_right">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                        
                      </div>
                    </div>
                  </li>
                </ul>
              </div> -->
            </div>
            <!--start 2 style category design -->
           <!--  <div class="fashion_technology_area">
              <div class="fashion">
                <div class="single_post_content">
                  <h2><span>Fashion</span></h2>              
                  <ul class="business_catgnav wow fadeInDown">
                    <li>
                      <figure class="bsbig_fig">
                        <a href="single_page.html" class="featured_img">
                            <img alt="img" src="img/featured_img2.jpg">
                            <span class="overlay"></span>
                        </a>
                        <figcaption>
                          <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                        </figcaption>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                      </figure>
                    </li>
                  </ul>
                  <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                        
                      </div>
                    </div>
                  </li>
                </ul>
                </div>
              </div>
              <div class="technology">
                <div class="single_post_content">
                  <h2><span>Technology</span></h2>              
                  <ul class="business_catgnav">
                    <li>
                      <figure class="bsbig_fig wow fadeInDown">
                        <a href="single_page.html" class="featured_img">
                            <img alt="img" src="img/featured_img3.jpg">
                            <span class="overlay"></span>
                        </a>
                        <figcaption>
                          <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                        </figcaption>
                          <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                      </figure>
                    </li>
                  </ul>
                  <ul class="spost_nav">
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="img/post_img1.jpg">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="img/post_img2.jpg">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="img/post_img1.jpg">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                      
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="img/post_img2.jpg">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
            <!-- End 2 style category design --> -->
            <!-- start photography stye design -->
<!--             <div class="single_post_content">
              <h2><span>Photography</span></h2>
              <ul class="photograph_nav  wow fadeInDown">                
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img2.jpg" title="Photography Ttile 1">
                    <img src="img/photograph_img2.jpg" alt="img06"/></a>  
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img3.jpg" title="Photography Ttile 2">
                      <img src="img/photograph_img3.jpg" alt="img06"/>
                      </a>  
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img4.jpg" title="Photography Ttile 3">
                      <img src="img/photograph_img4.jpg" alt="img06"/>
                      </a>                        
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                       <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img4.jpg" title="Photography Ttile 4">
                        <img src="img/photograph_img4.jpg" alt="img06"/>
                      </a>                           
                    </figure>
                  </div>
                </li>                
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                     <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img2.jpg" title="Photography Ttile 5">
                        <img src="img/photograph_img2.jpg" alt="img06"/>
                      </a>                          
                    </figure>
                  </div>
                </li>
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                       <a class="fancybox-buttons" data-fancybox-group="button" href="img/photograph_img3.jpg" title="Photography Ttile 6">
                        <img src="img/photograph_img3.jpg" alt="img06"/>
                      </a>                           
                    </figure>
                  </div>
                </li>
              </ul>            
            </div> -->
            <!-- End photography stye design -->
            <!-- start games category design -->
 <!--            <div class="single_post_content">
              <h2><span>Games</span></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig  wow fadeInDown">
                      <a class="featured_img" href="single_page.html">
                          <img src="img/featured_img1.jpg" alt="img">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a>
                      </figcaption>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img1.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a>                        
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="single_page.html" class="media-left">
                        <img alt="img" src="img/post_img2.jpg">
                      </a>
                      <div class="media-body">
                        <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a>                       
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- End games category design -->            
          </div>
        </div>
       
      </div>  
    </section>
    <!-- ==================End content body section=============== -->    
    <footer id="footer">       
      <div class="footer_top">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInLeftBig">
              <h2>Flickr Images</h2>
                       
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInDown">
              <h2>Tag</h2>
              <ul class="tag_nav">
                <li><a href="#">Games</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Life & Style</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Photo</a></li>
                <li><a href="#">Slider</a></li>
              </ul>              
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInRightBig">
              <h2>Contact</h2>
              <p>meFavor is a talk allocation application that can be used to allocate the task online to a facebook friend if he or she accepts the task's request
              Contributors: Prajwal HK Reddy,
              Yogesh Jeswani,
              Akash Chaturvedi</p>
              <address>
                7825 mcCallum Blvd., Suite 206, Dallas, TX, United States 
              </address>              
            </div>
          </div>
        </div>
      </div>       
      <div class="footer_bottom">
        <p class="copyright">
          All Rights Reserved <a href="home.html">meFavor</a>
        </p>
        <p class="developer">Developed By <a href="http://wpfreeware.com" rel="nofollow">Wpfreeware</a></p>
      </div>    
    </footer>
  </div> <!-- /.container -->
  

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
  <!-- For content animatin  -->
  <script src="js/wow.min.js"></script>
  <!-- bootstrap js file -->
  <script src="js/bootstrap.min.js"></script> 
  <!-- slick slider js file -->
  <script src="js/slick.min.js"></script> 
  <!-- news ticker jquery file -->
  <script src="js/jquery.li-scroller.1.0.js"></script>
  <!-- for news slider -->
  <script src="js/jquery.newsTicker.min.js"></script>
  <!-- for fancybox slider -->
  <script src="js/jquery.fancybox.pack.js"></script>
  <!-- custom js file include -->    
  <script src="js/custom.js"></script> 
 

  <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->
    
      
  </body>
</html>