<!-- databse connectin -->

<?php
	include "./connect/connection.php"
?>
<!-- end database connection -->



<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" class="ltr" lang="en">
<!--<![endif]-->

<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact US</title>
<base  />
    

<!-- pagination css-->
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<!-- end pagination -->

<?php include "link.php";?>


</head>
<body class="product-category-24 page-category layout-">

 <div  class="row-offcanvas row-offcanvas-left">
  <div id="page">

<!-- header -->
   <?php
	 include "nav.php";
	 include "header.php";
	?>
<!-- /header -->



<!-- sys-notification -->
    <div id="sys-notification">
     <div class="container">
       <div id="notification"></div>
     </div>
    </div>
    
<!-- /sys-notification -->
    <div class="dj">
     	<ul class="breadcrumb">
      		<li><a href="index.php?route=common/home"><i class="fa fa-home"></i></a></li>
   			<li><a href="contactus.php?route=information/contact" style="color:white">Contact US</a></li>
 		</ul>
   		<div class="row">
      		<section id="sidebar-main" class="col-md-12"><div id="content">
      		 <h1>Contact Us</h1>
     		 <h3>Our Location</h3>
    			
       		 <div class="contact-location hidden-xs">
        	  <div id="contact-map"></div>
      		 </div>


      		 <div class="panel panel-default">
        	  <div class="panel-body">
         	   <div class="row contact-content">
                <div class="col-lg-5 col-md-5 col-sm-12 hidden-xs">
                 <div class="contact-info">
                  <h2>Our Location</h2>
                   <div class="contact-address">
                    <p>Home Furnishing Showroom</p>
                    <?php
	 			$link = mysqli_connect("localhost", "root", "");
	 			mysqli_select_db($link,"furniture");
	 
	 			$res1= mysqli_query($link, "select * from admin_contact");
			   
			   	while($row = mysqli_fetch_array($res1)){
				?>
                     <ul>
                      <li>
                      	<i class="fa fa-map-marker"></i>
                      	<span><b>Address</b><br />
                      <?php echo $row['address'];?></span>
                      </li>
                      <li>
                      	<i class="fa fa-phone"></i><span><b>Mobile</b><br />
                      <?php echo $row['mobile'];?></span>
                      </li>
                      <li>
                      	<i class="fa fa-phone"></i><span><b>Alternate Mobile</b><br />
                      <?php echo $row['phone'];?></span>
                      </li>
				      <li>
                     	<i class="fa fa-envelope-o"></i><span><b>Email</b><br />
                      <?php echo $row['email'];?></span>
                      </li>
					 <ul>
           	    <?php
					}
				?>
            	    </div>
                 <!--   <div class="contact-customhtml">
              		  <div class="content">
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
 non dui at sapien tempor gravida ut vel arcu. Nullam ac eros eros, et 
ullamcorper leo.</p>
           			   <ul>
           			  	<li>
           			  	  <i class="button fa fa-tasks">&nbsp;</i>
           			  	  	<span><strong>Customer Service</strong><br>	info@yourstore.com</span>
           			  	</li>
           			    <li>
           			    	<i class="button fa fa-share">&nbsp;</i>
           			    	<span><strong>Returns and Refunds:</strong><br>	returns@yourstore.com</span>
           			    </li>
           			   </ul>
           			  </div>
            		 </div> -->
            		</div>
           		   </div><!-- end1 -->
           		   <div class="contact-form col-lg-7 col-md-7 col-sm-12 col-xs-12">
      				<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal ">              
              		 <fieldset class="">
                	  <h2>Contact Form</h2>
                		<div class="content">
                			<div class="form-group required">
                  				<label class="col-sm-2 control-label" for="input-name">Your Name</label>
                  				<div class="col-sm-10">
                    				<input type="text" name="name" value="" id="input-name" class="form-control" />
                            	</div>
                			</div>
                			<div class="form-group required">
                  				<label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                  				<div class="col-sm-10">
                    				<input type="text" name="email" value="" id="input-email" class="form-control" />
                                </div>
                			</div>
                			<div class="form-group required">
                  				<label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
                  				<div class="col-sm-10">
                    				<textarea name="enquiry" rows="10" id="input-enquiry" name="msg" class="form-control"></textarea>
                                </div>
                			</div>
               				
                 			<div class="buttons" style="border:none">
                  				<div class="pull-right">
                    				<input class="button" type="submit" name="submit" value="Submit" />
                  				</div>
                			</div>
              			   </div>
                
              			  </fieldset>   
       
      					</form>
      					<?php

				 if(isset($_POST['submit'])){
					 require 'phpmailer/PHPMailerAutoload.php';
					 $mail = new PHPMailer;
					 
					 $mail->isSMTP();
					 $mail->HOST='smtp.gmail.com';
					 $mail->Port=587;
					 $mail->SMTPAuth=true;
					 $mail->SMTPSecure='tls';
					 $mail->Username='sumitsakpal02@gmail.com';
					 $mail->Password='12345';
					 
					 $mail->setFrom($_POST['email']);
					 $mail->addAddress('sumitsakpal02@gmail.com');
					 $mail->addReplyTo($_POST['email']);

					 //$mail->isHTML(true);
					 
					 $mail->Body=$_POST['name']."\n".$_POST['email']."\n".$_POST['msg'];

					 ?>
					<script type="text/javascript">
						alert("Message send successfully. We will contact soon.");
					</script>
				 	<?php
				 	}
					   ?>
   					 </div>
      <!-- end --> 
          		</div><!-- end -->

        	   </div>
      		  </div>
            </div>
   			</section>
     	   </div>
      </div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="catalog/view/javascript/gmap/gmap3.min.js"></script>
    <script type="text/javascript" src="catalog/view/javascript/gmap/gmap3.infobox.js"></script>
    <script type="text/javascript">
        var mapDiv, map, infobox;
        var lat = 40.705423;
        var lon = -74.008616;
        jQuery(document).ready(function($) {
            mapDiv = $("#contact-map");
            mapDiv.height(400).gmap3({
                map:{
                    options:{
                        center:[lat,lon],
                        zoom: 15
                    }
                },
                marker:{
                    values:[
                        {latLng:[lat, lon], data:"79-99 Beaver Street, New York, NY 10005, USA"},
                    ],
                    options:{
                        draggable: false
                    },
                    events:{
                          mouseover: function(marker, event, context){
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                infowindow:{
                                    anchor:marker, 
                                    options:{content: context.data}
                                }
                              });
                            }
                        },
                        mouseout: function(){
                            var infowindow = $(this).gmap3({get:{name:"infowindow"}});
                            if (infowindow){
                                infowindow.close();
                            }
                        }
                    }
                }
            });
        });
    </script>
 
		
 	
    <?php
	 	include "footer.php";
	 ?>
	</div>
</body>
<!-- Mirrored from demopavothemes.com/pav_furniture/index.php?route=product/category&path=24&sort=rating&order=ASC by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Aug 2018 10:07:56 GMT -->
</html>