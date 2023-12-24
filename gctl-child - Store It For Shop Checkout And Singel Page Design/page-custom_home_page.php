<?php
/**
 * 
 * Template Name: Custom Home Page
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gctl
 */

get_header();
?>



    <header class="menu_banner_carousel">

    <!-- Navigation Menu Place Here -->
    <div class="mega_menubar">      
      <?php get_template_part('template-parts/menubar','menubar')?>
    </div>
    




      <!-- <div class="container" id="banner">
        <div class="row banner_heading_and_icon_row">

          <div class="col-md-9 banner_heading_col">
            <h2>TAM-EUROPE</h2>
            <h1>At your service on airports and round around the world</h1>
            <a href="#" class="btn btn-primary custom_btn_primary">READ MORE</a>
          </div> -->

          <!-- <div class="col-md-3 banner_icon_col">
            <div class="banner_icon">
              <ul>
				        <li><a href=""> <img src="<?php //bloginfo('stylesheet_directory'); ?>/assets/img/banner_icon_1.png" alt="Laptop Bag"> </a></li>
                <li><a href=""> <img src="<?php //bloginfo('stylesheet_directory'); ?>/assets/img/banner_icon_2.png" alt="Laptop Bag"> </a></li>
                <li><a href=""> <img src="<?php //bloginfo('stylesheet_directory'); ?>/assets/img/banner_icon_3.png" alt="Laptop Bag"> </a></li>
                <li><a href=""> <img src="<?php //bloginfo('stylesheet_directory'); ?>/assets/img/banner_icon_4.png" alt="Laptop Bag"> </a></li>
              </ul>  
            </div>
          </div> 

        </div>
      </div>-->


      <section id="banner_owl_carousel" class="owl-carousel">
        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner_slider/banner_slider_1.jpg"></div>
        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner_slider/banner_slider_2.jpg"></div>
        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner_slider/banner_slider_3.jpg"></div>
        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner_slider/banner_slider_4.jpg"></div>
        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner_slider/banner_slider_5.jpg"></div>
      </section>

    </header>



    <section>
      <div class="container-fluid">
        <div class="row" id="what_is">
          <div class="col-12">
            <h2>WHAT IS NEW</h2>
            <p class="lead">Read our latest news and visit us on different fairs</p>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="container-fluid" id="after_what_is">
        <div class="row">
          <div class="col-md-6 after_what_is_image">
		        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img_dsc/img_dsc_1.jpg">
          </div>
          <div class="col-md-6 after_what_is_text">
            <div class="heading">
              <h2>TAM-Europe is shaping the future – eVIVAIR2</h2>
              <a href="#" class="btn custom_button">READ MORE</a>
            </div>          
          </div>
        </div>
        

        <div class="row flex-column-reverse flex-md-row">
          <div class="col-md-6 after_what_is_text">
            <div class="heading">
              <h2>TAM-EUROPE visits inter airport China 2018</h2>
              <p class="lorem">A total of 4,314 industry buyers filled the aisles at the latest edition of inter airport China. In what was already a record-breaking edition in terms of exhibition space, the...</p>
              <a href="#" class="btn custom_button">READ MORE</a>
            </div>          
          </div>
          <div class="col-md-6 after_what_is_image">
		        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img_dsc/img_dsc_2.jpg">
          </div>
        </div>


        <div class="row">
          <div class="col-md-6 after_what_is_image">
		        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img_dsc/img_dsc_3.jpg">
          </div>
          <div class="col-md-6 after_what_is_text">
            <div class="heading">
              <h2>New delivery to Basra International Airport in Iraq</h2>
              <p class="lorem">We are very pleased to announce our VIVAIR2 is already on its way to more than 4,000 kilometers remote city of Basra in Iraq. Basra International Airport which is the second...</p>
              <a href="#" class="btn custom_button">READ MORE</a>
            </div>          
          </div>        
        </div>
    
      </div>
    </section>






    <section id="bg_video_and_image">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <video autoplay muted loop id="myVideo">
              <source src="<?php bloginfo('stylesheet_directory'); ?>/assets/video/handmade.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
            <div class="col-md-12 bg_video_and_image_below_image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/after_video_bg_img.jpg">
            </div>
          </div>
        </div>
      </div>      
    </section>





    <section id="shop_now">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1 d-flex justify-content-center"> 
            <h2>SHOP NOW</h2>
          </div>

          <div class="col-md-11">
            <!-- Widget Area for show shop product -->
            <div class="shop_now_product_display">
              <?php if ( is_active_sidebar( 'show_product_1') ) : ?>
                  <?php dynamic_sidebar( 'show_product_1' ); ?>
              <?php endif; ?>
            </div>
          </div>          
        </div>

      </div>
    </section>



    <section>
      <div class="container-fluid">
        <div class="row" id="what_is">
          <div class="col-12">
            <h2>A BUS WITH A PURPOSE</h2>
            <p class="lead">Our strong customer orientation and ongoing technological development enable us to meet every need in the bus industry.</p>
          </div>
        </div>
      </div>
    </section>





    <section class="accordion">
        <ul>
          <li class="accordion_li_one">
            <div class="accordion_li_one_text">
              <a href="">
                <h3>Mehedi</h3>
              </a>
            </div>
          </li>
  
          <li class="accordion_li_two">
              <div class="accordion_li_one_text">
                <a href="">
                  <h3>Mehedi</h3>
                </a>
              </div>
            </li>
  
          <li class="accordion_li_three">
            <div class="accordion_li_one_text">
              <a href="">
                <h3>Mehedi</h3>
              </a>
            </div>
          </li>
  
          <li class="accordion_li_four">
            <div class="accordion_li_one_text">
              <a href="">
                <h3>Mehedi</h3>
              </a>
            </div>
          </li>
  
          <li class="accordion_li_five">
            <div class="accordion_li_one_text">
              <a href="">
                <h3>Mehedi</h3>
              </a>
            </div>
          </li>
  
        </ul>
      </section>



    <section>
      <div class="container-fluid">
        <div class="row" id="button_row">
          <div class="col-12">
            <p class="">Search for a dealer and get in touch or request a callback.</p>
            <a href="#" class="btn custom_button">FIND A DEALER</a>
            <a href="#" class="btn custom_button">REQUEST A CALLBACK</a>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="container-fluid">
        <div class="row" id="what_is">
          <div class="col-12">
            <h2>DEALERS</h2>
            <p class="lead">Search for your nearest dealer and get in touch!</p>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Dhaka%2C%20uttara%2C%20sector%204%2C%20road%2010&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net">wordpress themes blackhat</a></div><style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
    </section>



    <section id="follow_us">
      <h3>FOLLOW US IN SOCIAL MEDIA</h3>
      <span><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/facebook_icon.png"></span>      
      <span><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/linkedin_icon.png"></span>
    </section>



    <footer>
      <div class="container">
        <div class="row">
            <div class="col-md-6">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png">
              <p class="lead">Located in Slovenia (EU, Euro Zone) at the intersection of Central and South Eastern Europe, TAM-Europe is a bus and commercial vehicle manufacturer with strong strategic commitment to product efficiency and environmental sustainability.</p>
            </div>

            <div class="col-md-3">
              <h4>COMPANY</h4>
              <ul>
                <li><a href="">Contact info</a></li>
                <li><a href="">Terms of use & Privacy Policy</a></li>
                <li><a href="">Legal notice</a></li>
                <li><a href="">Cookies</a></li>
              </ul>
            </div>

            <div class="col-md-3">
              <h4>PRODUCT LINES</h4>
              <ul>
                <li><a href="">Airport </a></li>
                <li><a href="">Coaches </a></li>
                <li><a href="">Electric </a></li>
                <li><a href="">Royal VIP </a></li>
              </ul>
            </div>         
        </div>
      </div>


      <div class="sub_footer">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p>© 2016 - 2019 TAM - EUROPE, all rights reserved. </p>
            </div>
          </div>
        </div>
      </div>
	</footer>
	

	<?php

	get_footer();
