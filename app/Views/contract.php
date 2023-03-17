<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">		 
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/flaticon.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/style1.css">
        <!-- <link rel="stylesheet" href="../assets/css/main.css"> -->
        <link rel="stylesheet" href="../assets/css/responsive1.css">
        <title>GreenData | Digital Tech</title>
        <link rel="icon" type="image/png" href="../assets/img/greenfav.png">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        
         
   </head>
   <style>
@import url('https://fonts.googleapis.com/css2?family=zoho_puvi_regular:wght@100;300;400;500;700&display=swap');

    :root {
  --color-primary: red;
  --color-white: black;
  --color-black: whitesmoke;
  --color-black-1: #212b38;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
  font-family: zoho_puvi_regular;
  font-size: 18px;
    

}



.logo {
  color: var(--color-white);

}

.logo span {
  color: var(--color-primary);
}

.menu-bar {
  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;

  position: relative;
}

.menu-bar ul {
  list-style: none;
  display: flex;
}

.menu-bar ul li {
  /* width: 120px; */
  padding: 10px 30px;
  /* text-align: center; */

  position: relative;
}

.menu-bar ul li a {
  font-size: 18px;
  color: var(--color-white);
  text-decoration: none;

  transition: all 0.3s;
}

.menu-bar ul li a:hover {
  color: var(--color-primary);
}

.fas {
  float: right;
  margin-left: 10px;
  padding-top: 3px;
}

/* dropdown menu style */
.dropdown-menu {
  display: none;
}

.menu-bar ul li:hover .dropdown-menu {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  background-color: var(--color-black);
}

.menu-bar ul li:hover .dropdown-menu ul {
  display: block;
  margin: 10px;
}

.menu-bar ul li:hover .dropdown-menu ul li {
  width: 250px;
  padding: 10px;
}

.dropdown-menu-1 {
  display: none;
}

.dropdown-menu ul li:hover .dropdown-menu-1 {
  display: block;
  position: absolute;
  left: 150px;
  top: 0;
  background-color: var(--color-black);
}
.container ul li a:hover {
  color: var(--color-primary);
}


  </style>
  <body>
    <div class="menu-bar">
      <a href="index" class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250px" height="130px" viewBox="0 0 158 60" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,0%,0%);fill-opacity:1;" d="M 25.046875 22.195312 C 22.921875 22.96875 21.171875 23.605469 21.160156 23.605469 C 21.148438 23.605469 21.144531 24.53125 21.144531 25.65625 C 21.144531 27.910156 21.226562 28.851562 21.535156 30.125 C 22.441406 33.847656 24.992188 37.125 28.324219 38.84375 L 29.011719 39.207031 L 29.632812 38.886719 C 32.96875 37.199219 35.503906 34 36.46875 30.234375 C 36.554688 29.921875 36.636719 29.503906 36.660156 29.304688 L 36.703125 28.945312 L 35.769531 28.617188 C 35.246094 28.4375 33.515625 27.851562 31.921875 27.300781 L 29.023438 26.304688 L 29.035156 27.898438 L 29.054688 29.503906 L 31.074219 30.234375 C 32.1875 30.636719 33.132812 30.984375 33.175781 31.011719 C 33.261719 31.070312 32.910156 31.773438 32.40625 32.535156 C 31.6875 33.628906 30.351562 34.832031 29.289062 35.34375 C 29.027344 35.464844 29.011719 35.464844 28.761719 35.34375 C 27.375 34.679688 25.917969 33.238281 25.171875 31.785156 C 24.492188 30.46875 24.253906 29.296875 24.222656 27.171875 L 24.203125 25.808594 L 26.558594 24.917969 C 27.851562 24.425781 28.980469 24.03125 29.054688 24.03125 C 29.140625 24.03125 30.859375 24.589844 32.882812 25.269531 C 34.910156 25.949219 36.597656 26.511719 36.632812 26.511719 C 36.667969 26.511719 36.679688 25.835938 36.675781 25.015625 L 36.652344 23.511719 L 32.855469 22.144531 C 30.765625 21.390625 29.027344 20.769531 28.984375 20.78125 C 28.953125 20.785156 27.179688 21.421875 25.046875 22.195312 Z M 25.046875 22.195312 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 48.808594 25.90625 C 47.8125 26.128906 46.90625 26.75 46.339844 27.609375 C 45.878906 28.308594 45.6875 28.902344 45.644531 29.816406 C 45.511719 32.40625 47.300781 34.308594 49.839844 34.308594 C 51.035156 34.308594 51.996094 33.914062 52.800781 33.101562 C 53.585938 32.3125 53.925781 31.476562 53.925781 30.328125 L 53.925781 29.628906 L 49.421875 29.628906 L 49.421875 30.910156 L 50.828125 30.910156 C 51.910156 30.910156 52.238281 30.929688 52.238281 30.992188 C 52.238281 31.199219 51.816406 31.953125 51.5625 32.199219 C 51.105469 32.640625 50.6875 32.785156 49.917969 32.78125 C 49.394531 32.78125 49.15625 32.742188 48.847656 32.617188 C 47.832031 32.21875 47.230469 31.082031 47.339844 29.792969 C 47.425781 28.773438 47.910156 27.988281 48.707031 27.59375 C 49.066406 27.421875 49.183594 27.398438 49.820312 27.398438 C 50.464844 27.398438 50.558594 27.421875 50.9375 27.609375 C 51.203125 27.746094 51.425781 27.929688 51.566406 28.121094 L 51.777344 28.421875 L 52.71875 28.421875 C 53.449219 28.425781 53.644531 28.40625 53.644531 28.335938 C 53.644531 28.085938 53.167969 27.304688 52.789062 26.929688 C 51.84375 25.996094 50.269531 25.589844 48.808594 25.90625 Z M 48.808594 25.90625 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 57.84375 25.921875 C 57.816406 25.945312 57.796875 27.828125 57.796875 30.109375 L 57.796875 34.238281 L 59.484375 34.238281 L 59.484375 30.96875 L 59.886719 30.992188 L 60.277344 31.011719 L 62.09375 34.238281 L 63.042969 34.238281 C 63.566406 34.238281 63.988281 34.222656 63.988281 34.210938 C 63.988281 34.195312 63.554688 33.460938 63.039062 32.5625 C 62.519531 31.679688 62.089844 30.929688 62.089844 30.910156 C 62.089844 30.886719 62.257812 30.792969 62.46875 30.703125 C 63.015625 30.472656 63.382812 30.125 63.648438 29.574219 C 63.859375 29.140625 63.878906 29.046875 63.878906 28.425781 C 63.878906 27.828125 63.859375 27.703125 63.683594 27.347656 C 63.316406 26.597656 62.523438 26.085938 61.503906 25.949219 C 60.90625 25.867188 57.917969 25.847656 57.84375 25.921875 Z M 61.65625 27.46875 C 62.066406 27.710938 62.191406 27.953125 62.191406 28.480469 C 62.191406 29.0625 62.035156 29.367188 61.628906 29.582031 C 61.394531 29.699219 61.179688 29.734375 60.417969 29.761719 L 59.484375 29.792969 L 59.484375 27.277344 L 60.457031 27.304688 C 61.265625 27.320312 61.453125 27.347656 61.65625 27.46875 Z M 61.65625 27.46875 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 68.136719 30.054688 L 68.136719 34.238281 L 72.921875 34.238281 L 72.921875 32.890625 L 69.828125 32.890625 L 69.828125 30.695312 L 72.570312 30.695312 L 72.570312 29.347656 L 69.828125 29.347656 L 69.828125 27.289062 L 72.921875 27.289062 L 72.921875 25.875 L 68.136719 25.875 Z M 68.136719 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 77.144531 30.054688 L 77.144531 34.238281 L 81.925781 34.238281 L 81.925781 32.890625 L 78.832031 32.890625 L 78.832031 30.695312 L 81.578125 30.695312 L 81.578125 29.347656 L 78.832031 29.347656 L 78.832031 27.289062 L 81.925781 27.289062 L 81.925781 25.875 L 77.144531 25.875 Z M 77.144531 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 86.148438 30.054688 L 86.148438 34.238281 L 87.835938 34.238281 L 87.851562 31.425781 L 87.871094 28.613281 L 91.574219 34.238281 L 93.25 34.238281 L 93.25 25.875 L 91.5625 25.875 L 91.550781 28.714844 L 91.53125 31.566406 L 89.664062 28.714844 L 87.808594 25.875 L 86.148438 25.875 Z M 86.148438 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 97.601562 25.917969 C 97.566406 25.945312 97.542969 27.828125 97.542969 30.109375 L 97.542969 34.238281 L 99.300781 34.238281 C 101.292969 34.238281 101.820312 34.167969 102.644531 33.789062 C 103.210938 33.523438 103.894531 32.921875 104.230469 32.394531 C 104.613281 31.785156 104.804688 31.054688 104.8125 30.164062 C 104.828125 29.265625 104.730469 28.808594 104.398438 28.09375 C 104.074219 27.40625 103.449219 26.765625 102.742188 26.417969 C 101.886719 25.996094 101.527344 25.9375 99.480469 25.894531 C 98.472656 25.875 97.628906 25.878906 97.601562 25.917969 Z M 100.996094 27.371094 C 101.78125 27.496094 102.355469 27.851562 102.714844 28.425781 C 103.40625 29.53125 103.203125 31.449219 102.3125 32.21875 C 101.816406 32.644531 101.378906 32.769531 100.242188 32.808594 L 99.230469 32.835938 L 99.230469 27.289062 L 99.886719 27.289062 C 100.242188 27.289062 100.738281 27.328125 100.996094 27.371094 Z M 100.996094 27.371094 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 111.203125 26.03125 C 110.894531 26.882812 108.308594 34.164062 108.308594 34.195312 C 108.308594 34.21875 108.695312 34.238281 109.175781 34.238281 L 110.042969 34.238281 L 110.285156 33.472656 L 110.53125 32.714844 L 113.894531 32.714844 L 114.140625 33.472656 L 114.386719 34.238281 L 115.261719 34.238281 C 116.132812 34.238281 116.132812 34.238281 116.09375 34.078125 C 116.070312 33.988281 115.410156 32.117188 114.621094 29.914062 L 113.191406 25.90625 L 112.230469 25.890625 C 111.277344 25.867188 111.261719 25.875 111.203125 26.03125 Z M 112.804688 29.554688 C 113.121094 30.460938 113.375 31.242188 113.375 31.269531 C 113.375 31.304688 112.851562 31.332031 112.214844 31.332031 C 111.574219 31.332031 111.050781 31.3125 111.050781 31.273438 C 111.050781 31.199219 112.191406 27.851562 112.214844 27.871094 C 112.230469 27.886719 112.496094 28.640625 112.804688 29.554688 Z M 112.804688 29.554688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 119.566406 26.582031 L 119.566406 27.289062 L 121.746094 27.289062 L 121.746094 34.238281 L 123.433594 34.238281 L 123.433594 27.289062 L 125.617188 27.289062 L 125.617188 25.875 L 119.566406 25.875 Z M 119.566406 26.582031 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 131.941406 26.066406 C 131.683594 26.722656 129.0625 34.125 129.0625 34.175781 C 129.0625 34.21875 129.421875 34.234375 129.914062 34.222656 L 130.773438 34.203125 L 131.035156 33.460938 L 131.292969 32.714844 L 132.953125 32.695312 L 134.609375 32.679688 L 134.875 33.460938 L 135.148438 34.238281 L 136.003906 34.238281 C 136.488281 34.238281 136.871094 34.21875 136.871094 34.179688 C 136.871094 34.152344 136.210938 32.28125 135.402344 30.023438 L 133.929688 25.90625 L 132.976562 25.890625 L 132.015625 25.867188 Z M 133.550781 29.570312 C 133.867188 30.488281 134.128906 31.261719 134.128906 31.289062 C 134.128906 31.3125 133.605469 31.332031 132.964844 31.332031 C 132.152344 31.332031 131.808594 31.3125 131.808594 31.257812 C 131.808594 31.214844 132.003906 30.609375 132.238281 29.921875 C 132.476562 29.234375 132.726562 28.492188 132.808594 28.261719 C 132.882812 28.035156 132.953125 27.859375 132.964844 27.871094 C 132.976562 27.886719 133.242188 28.644531 133.550781 29.570312 Z M 133.550781 29.570312 "/>
</g>
</svg>
        </a>

        <ul>
        <li><a href="<?=site_url('home');?>">Home</a></li>
        <li><a href="<?=site_url('about');?>">About</a></li>
        <li><a href="#">Services <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                <li class="nav-item"><a href="<?=site_url('mobileapp');?>" class="nav-link">Mobile App Development </a></li>
           <li class="nav-item"><a href="<?=site_url('webapp');?>" class="nav-link">Web App Development </a> </li>                             
           <li class="nav-item"><a href="<?=site_url('softdev');?>" class="nav-link">Software Development </a></li>
           <li class="nav-item"><a href="<?=site_url('softest');?>" class="nav-link">Software Testing </a></li>
           <li class="nav-item"><a href="<?=site_url('softrain');?>" class="nav-link">Software Training </a></li>
           <li class="nav-item"><a href="<?=site_url('contract');?>" class="nav-link">Contract Staffing </a></li>

                  <!-- <li><a href="#">Pricing</a></li>
                  <li><a href="#">Portfolio</a></li>
                   <li>
                    <a href="#">Team <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Team-1</a></li>
                        <li><a href="#">Team-2</a></li>
                        <li><a href="#">Team-3</a></li>
                        <li><a href="#">Team-4</a></li>
                      </ul>
                    </div>
                  </li> 
                  <li><a href="#">FAQ</a></li> -->
                </ul>
              </div>
        </li>
        <li><a href="<?=site_url('products');?>">Products</a>
        </li>
        <li><a href="<?=site_url('contact');?>">Contact</a></li>
      </ul>
    </div>
    <!--  section start -->	
		<div class="cg_Section">
			<div class="cg_Header">
				<div class="container ">
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="cg_titleContainer">
								<h4 class="cg_title"></h4>
								<h1 class="cg_subtitle" style="text-align:center;color:red">Contract Staffing </h1>
								<h3 class="cg_text-center" style="text-align:center"> <i class="fa fa-quote-left" ></i> We Discover the Idea's in Current World <i class="fa fa-quote-right" ></i></h3>
								<span class="cg__symbol">
									<span></span>
								</span>
							</div><!--/.cg__welcome-titleContainer-->
						</div><!--/.col-md-12 col-sm-12-->
					<p class="cg_contact-titleBlock cg_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem</p>
					</div><!--/.row-->
				</div><!--/.container cg_container-->
			</div><!--/.cg_Header-->
		<!-- section end -->

    


    <!--site-main start-->
    <div class="container-fluid" style="background-color:whitesmoke">
    <div class="site-main">


        <div class="cmt-row sidebar cmt-sidebar-right cmt-bgcolor-grey clearfix">
            <div class="container" style="padding: 30px;">
                <!-- row -->
                <div class="row">
                   
                    <div class="col-lg-4 widget-area sidebar-right" >
                       
	                        <aside class="widget widget-nav-menu " style="background-color: #ffffff;">
                          <h3 class="widget-title" style="text-align:center">Services</h3>
                            <ul class="widget-menu" style="background-color: #ffffff;">
                            <li class="learn-more"><a href="<?=site_url('mobileapp');?>" class="nav-link">Mobile App Development </a></li>
           <li class="learn-more"><a href="<?=site_url('webapp');?>" class="nav-link">Web App Development </a> </li>                             
           <li class="learn-more"><a href="<?=site_url('softdev');?>" class="nav-link">Software Development </a></li>
           <li class="learn-more"><a href="<?=site_url('softest');?>" class="nav-link">Software Testing </a></li>
           <li class="learn-more"><a href="<?=site_url('softrain');?>" class="nav-link">Software Training </a></li>
           <li class="learn-more"><a href="<?=site_url('contract');?>" class="nav-link">Contract Staffing </a></li>
 
								
                            </ul>
                        </aside>
                       
                      
                                         
                      
                        <aside class="widget widget_media_image p-0">
                            <a href="#"><img class="img-fluid" src="../assets/img/services/banner.jpg" alt="widget-banner" style="height:430px;width:100%;"></a>
                        </aside>
                    </div>
					 <div class="col-lg-8 ">
                        <!-- post -->
                        <article class="post cmt-blog-single clearfix">
                             <!-- post-featured-wrapper -->
                            <div class="cmt-post-featured-wrapper cmt-featured-wrapper">
                                <div class="cmt-post-featured">
                                    <img class="img-fluid " src="../assets/img/all/contract.jpg" alt="intermodel"  style="max-width:92%">
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- cmt-blog-classic-content -->
                            <div class="col-lg-11 " style="background-color:white">
                            <div class="cmt-blog-single-content">
                                <div class="cmt-post-entry-header">
                                  
                                </div>
                                <div class="entry-content">
                                    <div class="cmt-box-desc-text">
										
                              
                                        <p><h2>Contract Staffing</h2><p>Intermodal means versatility – anticipating and adapting to that extra mile. Intermodal travel takes advantage of the global reach of ships, the speed and efficiency of trains, and the location of trucking.</p>We have fostered strong relationships and formed  partnerships which helps us provide faster and more consistent transit times reducing freight costs.<br>We offer transportation through multiple combination includes air, truck, rail and ocean transport which effectively transit your LTL & TL shipments </p>
									
									<p><h3></h3>
									Over the years, we have perfected the art of combining various modes of transportation to ensure that our customers' cargo reaches its intended destination safely. Our intermediation services combine extensive industry expertise and solid partnerships to streamline and accelerate your operations. Put your mind at ease with our turnkey solutions that include sea and rail transport. We handle all the details involved in importing and exporting your goods.</p>
                                 
                                      
                                        
                                       
                                       
                                    </div>
                                </div>
                            </div><!-- cmt-blog-classic-content end -->
                            </div>
                        </article><!-- post end -->
                        <br><br>
                    </div>

                     
                     <div class="col-md-6 col-sm-6" style="background-color:white">
                                <h2>Expertise Resources</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem</p>
                      </div><!--/.col-md-6 col-sm-6-->
                      <div class="col-md-6 col-sm-6">
                        <div class="cg__imageBox">
                          <div class="cg__imageBox-wrapper">
                            <div class="cg__imageBox-imgWrapper">
                              <img src="../assets/img/all/contract2.jpg" alt=""  style="max-width:88%;height:auto">
                            </div>
                          </div><!--/.cg__imageBox-wrapper-->
                        </div><!--/.cg__imageBox-->
                      </div><!--/.col-md-6 col-sm-6-->
          
          
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
    </div>
    
	





    <style>
	@import url('https://fonts.googleapis.com/css2?family=zoho_puvi_regular:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'zoho_puvi_regular';
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 20%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
.learn-more
{
  text-align: center;
  display: inline-block;
  color: var(--mainColor);
  -webkit-transition: var(--transition);
  transition: var(--transition);
  border-radius: 5px;
  padding: 9px 25px 9px 55px;
  position: relative;
  font-size: 18px;
  font-weight: 700;
}
.learn-more:hover {
  background-color: var(--mainColor);
  color: var(--whiteColor);
  padding-left: 25px;
  padding-right: 55px;
}




</style>


  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
           <div class="footer-col">
           <a href="#" class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="178px" height="95px" viewBox="0 0 158 60" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,0%,0%);fill-opacity:1;" d="M 25.046875 22.195312 C 22.921875 22.96875 21.171875 23.605469 21.160156 23.605469 C 21.148438 23.605469 21.144531 24.53125 21.144531 25.65625 C 21.144531 27.910156 21.226562 28.851562 21.535156 30.125 C 22.441406 33.847656 24.992188 37.125 28.324219 38.84375 L 29.011719 39.207031 L 29.632812 38.886719 C 32.96875 37.199219 35.503906 34 36.46875 30.234375 C 36.554688 29.921875 36.636719 29.503906 36.660156 29.304688 L 36.703125 28.945312 L 35.769531 28.617188 C 35.246094 28.4375 33.515625 27.851562 31.921875 27.300781 L 29.023438 26.304688 L 29.035156 27.898438 L 29.054688 29.503906 L 31.074219 30.234375 C 32.1875 30.636719 33.132812 30.984375 33.175781 31.011719 C 33.261719 31.070312 32.910156 31.773438 32.40625 32.535156 C 31.6875 33.628906 30.351562 34.832031 29.289062 35.34375 C 29.027344 35.464844 29.011719 35.464844 28.761719 35.34375 C 27.375 34.679688 25.917969 33.238281 25.171875 31.785156 C 24.492188 30.46875 24.253906 29.296875 24.222656 27.171875 L 24.203125 25.808594 L 26.558594 24.917969 C 27.851562 24.425781 28.980469 24.03125 29.054688 24.03125 C 29.140625 24.03125 30.859375 24.589844 32.882812 25.269531 C 34.910156 25.949219 36.597656 26.511719 36.632812 26.511719 C 36.667969 26.511719 36.679688 25.835938 36.675781 25.015625 L 36.652344 23.511719 L 32.855469 22.144531 C 30.765625 21.390625 29.027344 20.769531 28.984375 20.78125 C 28.953125 20.785156 27.179688 21.421875 25.046875 22.195312 Z M 25.046875 22.195312 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 48.808594 25.90625 C 47.8125 26.128906 46.90625 26.75 46.339844 27.609375 C 45.878906 28.308594 45.6875 28.902344 45.644531 29.816406 C 45.511719 32.40625 47.300781 34.308594 49.839844 34.308594 C 51.035156 34.308594 51.996094 33.914062 52.800781 33.101562 C 53.585938 32.3125 53.925781 31.476562 53.925781 30.328125 L 53.925781 29.628906 L 49.421875 29.628906 L 49.421875 30.910156 L 50.828125 30.910156 C 51.910156 30.910156 52.238281 30.929688 52.238281 30.992188 C 52.238281 31.199219 51.816406 31.953125 51.5625 32.199219 C 51.105469 32.640625 50.6875 32.785156 49.917969 32.78125 C 49.394531 32.78125 49.15625 32.742188 48.847656 32.617188 C 47.832031 32.21875 47.230469 31.082031 47.339844 29.792969 C 47.425781 28.773438 47.910156 27.988281 48.707031 27.59375 C 49.066406 27.421875 49.183594 27.398438 49.820312 27.398438 C 50.464844 27.398438 50.558594 27.421875 50.9375 27.609375 C 51.203125 27.746094 51.425781 27.929688 51.566406 28.121094 L 51.777344 28.421875 L 52.71875 28.421875 C 53.449219 28.425781 53.644531 28.40625 53.644531 28.335938 C 53.644531 28.085938 53.167969 27.304688 52.789062 26.929688 C 51.84375 25.996094 50.269531 25.589844 48.808594 25.90625 Z M 48.808594 25.90625 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 57.84375 25.921875 C 57.816406 25.945312 57.796875 27.828125 57.796875 30.109375 L 57.796875 34.238281 L 59.484375 34.238281 L 59.484375 30.96875 L 59.886719 30.992188 L 60.277344 31.011719 L 62.09375 34.238281 L 63.042969 34.238281 C 63.566406 34.238281 63.988281 34.222656 63.988281 34.210938 C 63.988281 34.195312 63.554688 33.460938 63.039062 32.5625 C 62.519531 31.679688 62.089844 30.929688 62.089844 30.910156 C 62.089844 30.886719 62.257812 30.792969 62.46875 30.703125 C 63.015625 30.472656 63.382812 30.125 63.648438 29.574219 C 63.859375 29.140625 63.878906 29.046875 63.878906 28.425781 C 63.878906 27.828125 63.859375 27.703125 63.683594 27.347656 C 63.316406 26.597656 62.523438 26.085938 61.503906 25.949219 C 60.90625 25.867188 57.917969 25.847656 57.84375 25.921875 Z M 61.65625 27.46875 C 62.066406 27.710938 62.191406 27.953125 62.191406 28.480469 C 62.191406 29.0625 62.035156 29.367188 61.628906 29.582031 C 61.394531 29.699219 61.179688 29.734375 60.417969 29.761719 L 59.484375 29.792969 L 59.484375 27.277344 L 60.457031 27.304688 C 61.265625 27.320312 61.453125 27.347656 61.65625 27.46875 Z M 61.65625 27.46875 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 68.136719 30.054688 L 68.136719 34.238281 L 72.921875 34.238281 L 72.921875 32.890625 L 69.828125 32.890625 L 69.828125 30.695312 L 72.570312 30.695312 L 72.570312 29.347656 L 69.828125 29.347656 L 69.828125 27.289062 L 72.921875 27.289062 L 72.921875 25.875 L 68.136719 25.875 Z M 68.136719 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 77.144531 30.054688 L 77.144531 34.238281 L 81.925781 34.238281 L 81.925781 32.890625 L 78.832031 32.890625 L 78.832031 30.695312 L 81.578125 30.695312 L 81.578125 29.347656 L 78.832031 29.347656 L 78.832031 27.289062 L 81.925781 27.289062 L 81.925781 25.875 L 77.144531 25.875 Z M 77.144531 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 86.148438 30.054688 L 86.148438 34.238281 L 87.835938 34.238281 L 87.851562 31.425781 L 87.871094 28.613281 L 91.574219 34.238281 L 93.25 34.238281 L 93.25 25.875 L 91.5625 25.875 L 91.550781 28.714844 L 91.53125 31.566406 L 89.664062 28.714844 L 87.808594 25.875 L 86.148438 25.875 Z M 86.148438 30.054688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 97.601562 25.917969 C 97.566406 25.945312 97.542969 27.828125 97.542969 30.109375 L 97.542969 34.238281 L 99.300781 34.238281 C 101.292969 34.238281 101.820312 34.167969 102.644531 33.789062 C 103.210938 33.523438 103.894531 32.921875 104.230469 32.394531 C 104.613281 31.785156 104.804688 31.054688 104.8125 30.164062 C 104.828125 29.265625 104.730469 28.808594 104.398438 28.09375 C 104.074219 27.40625 103.449219 26.765625 102.742188 26.417969 C 101.886719 25.996094 101.527344 25.9375 99.480469 25.894531 C 98.472656 25.875 97.628906 25.878906 97.601562 25.917969 Z M 100.996094 27.371094 C 101.78125 27.496094 102.355469 27.851562 102.714844 28.425781 C 103.40625 29.53125 103.203125 31.449219 102.3125 32.21875 C 101.816406 32.644531 101.378906 32.769531 100.242188 32.808594 L 99.230469 32.835938 L 99.230469 27.289062 L 99.886719 27.289062 C 100.242188 27.289062 100.738281 27.328125 100.996094 27.371094 Z M 100.996094 27.371094 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 111.203125 26.03125 C 110.894531 26.882812 108.308594 34.164062 108.308594 34.195312 C 108.308594 34.21875 108.695312 34.238281 109.175781 34.238281 L 110.042969 34.238281 L 110.285156 33.472656 L 110.53125 32.714844 L 113.894531 32.714844 L 114.140625 33.472656 L 114.386719 34.238281 L 115.261719 34.238281 C 116.132812 34.238281 116.132812 34.238281 116.09375 34.078125 C 116.070312 33.988281 115.410156 32.117188 114.621094 29.914062 L 113.191406 25.90625 L 112.230469 25.890625 C 111.277344 25.867188 111.261719 25.875 111.203125 26.03125 Z M 112.804688 29.554688 C 113.121094 30.460938 113.375 31.242188 113.375 31.269531 C 113.375 31.304688 112.851562 31.332031 112.214844 31.332031 C 111.574219 31.332031 111.050781 31.3125 111.050781 31.273438 C 111.050781 31.199219 112.191406 27.851562 112.214844 27.871094 C 112.230469 27.886719 112.496094 28.640625 112.804688 29.554688 Z M 112.804688 29.554688 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 119.566406 26.582031 L 119.566406 27.289062 L 121.746094 27.289062 L 121.746094 34.238281 L 123.433594 34.238281 L 123.433594 27.289062 L 125.617188 27.289062 L 125.617188 25.875 L 119.566406 25.875 Z M 119.566406 26.582031 "/>
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 131.941406 26.066406 C 131.683594 26.722656 129.0625 34.125 129.0625 34.175781 C 129.0625 34.21875 129.421875 34.234375 129.914062 34.222656 L 130.773438 34.203125 L 131.035156 33.460938 L 131.292969 32.714844 L 132.953125 32.695312 L 134.609375 32.679688 L 134.875 33.460938 L 135.148438 34.238281 L 136.003906 34.238281 C 136.488281 34.238281 136.871094 34.21875 136.871094 34.179688 C 136.871094 34.152344 136.210938 32.28125 135.402344 30.023438 L 133.929688 25.90625 L 132.976562 25.890625 L 132.015625 25.867188 Z M 133.550781 29.570312 C 133.867188 30.488281 134.128906 31.261719 134.128906 31.289062 C 134.128906 31.3125 133.605469 31.332031 132.964844 31.332031 C 132.152344 31.332031 131.808594 31.3125 131.808594 31.257812 C 131.808594 31.214844 132.003906 30.609375 132.238281 29.921875 C 132.476562 29.234375 132.726562 28.492188 132.808594 28.261719 C 132.882812 28.035156 132.953125 27.859375 132.964844 27.871094 C 132.976562 27.886719 133.242188 28.644531 133.550781 29.570312 Z M 133.550781 29.570312 "/>
</g>
</svg>

              </a>
    
  	 			
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Explore</h4>
  	 			<ul>
                     <li><a href="<?=site_url('home');?>">Home</a></li>
                     <li><a href="<?=site_url('about');?>">About</a></li>
                     <li><a href="<?=site_url('mobileapp');?>">Services</a></li>
                     <li><a href="<?=site_url('products');?>">Product</a></li>
                     <li><a href="<?=site_url('contact');?>">Contact</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Resources</h4>
  	 			<ul>
           <li><a href="<?=site_url('mobileapp');?>">Mobile Applications</a></li>
          <li><a href="<?=site_url('webapp');?>">Web Development</a></li>
				  <li><a href="<?=site_url('softdev');?>">Software Development</a></li>
					<li><a href="<?=site_url('softest');?>">Software Testing</a></li>
					<li><a href="<?=site_url('softrain');?>">Software Training</a></li>
					<li><a href="<?=site_url('contract');?>">Contract Staffing</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 			<li><i class="fi fi-rs-phone-call" style="color:red"></i></i><a href="#">+91 96065 18855</a></li>
                                
                <li><i class="fi fi-sr-envelope" style="color:red"></i><a href="mailto:greendatadigital@gmail.com" style=" text-transform: lowercase">greendatadigital@gmail.com</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
               <h4>Address</h4>
  	 			<div class="address">
                  <ul> <li><i class="fi fi-rs-marker" style="color:red"></i><a href="#">48, opp. Hundai Showroom, Kudlu Gate, Krishna Reddy Industrial Area, Hosapalaya,
Muneshwara Nagar, Bengaluru, Karnataka 560068</a></li></ul>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>
