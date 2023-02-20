<?php

    include('s_connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr"> 
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/logo.png" type="image/icon type">
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="css/index.css"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="fontswesome/css/all.css">
        
        <!------------- Bootstarp Links ---------------> 
        
        <!-- jQuery library -->
        <link rel="stylesheet" type="text/css" href="libraries/bootstrap.min.css">
        <script type="text/javascript" src="libraries/popper.min.js"></script>
        <script type="text/javascript" src="libraries/bootstrap.min.js"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="libraries/jquery.min.js"></script>
        <script type="text/javascript" src="libraries/jquery-2.2.0.js"></script> 
        <script type="text/javascript" src="libraries/slick.js"></script> 
    </head>
    
    <body>
    
        <!-------------------- Header start ------------------->

            <?php include "common/headers.php" ?>  

        <!-------------------- Header END ------------------->
        <div class="main" style="background-color: #FFEFEC;">
        <!-------------------- Banner start ------------------->
        <div class="sliderss" style="width: 100%;">
            <section class="customer-logos slider">
                <div class="slide"><img src="images/banner.jpg" class="img-fluid" alt="Responsive image"></div>
                <div class="slide"><img src="images/banner2.jpg" class="img-fluid" alt="Responsive image"></div>
            </section>
            <script>
                $(document).ready(function(){
                    $('.customer-logos').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        speed: 1700,
                        autoplaySpeed: 2000,
                        arrows: false,
                        dots: false,
                            pauseOnHover: false,
                            responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }, {
                            breakpoint: 520,
                            settings: {
                                slidesToShow: 1
                            }
                        }]
                    });
                });
            </script>
        </div>

        <!-------------------- introduction Start ------------------->
        <div class="introduction">
            <div class="intro">
            <h1>About Us</h1>
            "Becoming isn’t about arriving somewhere or achieving a certain aim. I see it instead as forward motion, a means of evolving, a way to reach continuously toward a better self. The journey doesn’t end.”
            </div>
        </div>
       <!-------------------- Introduction END ------------------->

        <!-------------------- our-partner Start ------------------->

            <div class="our-partners">
                <div class="partner">
                    <h2>Work at these great companies</h2>
                    <div class="slick-slider02">
                        <div class="customer-logoss mt-2">
                            <div class="slid"><img src="images/alkaram - Copy.png"></div>
                            <div class="slid"><img src="images/cabury.png"></div>
                            <div class="slid"><img src="images/saje.png"></div>
                            <div class="slid"><img src="images/Honda.png"></div>
                            <div class="slid"><img src="images/Honda.png"></div>
                        </div>

                        <script>
                            $(document).ready(function(){   
                    			$('.customer-logoss').slick({
				                    slidesToShow: 4,
				                    slidesToScroll: 1,
			  	                    autoplay: true,
			  	                    autoplaySpeed: 1000,
				                    arrows: false,
				                    dots: false,
					                pauseOnHover: false,
					                responsive: [{
				  	                    breakpoint: 768,
					                    settings: {
						                    slidesToShow: 3
					                    }
				                        },{
					                        breakpoint: 520,
					                        settings: {
						                        slidesToShow: 2
				  	                        }
				                    }]
			                    });
		                    });
                        </script>
                    </div>
                </div>
            </div>
            <div class="jobs-gallery">
                <div class="job-content">
                    <div class="Industry text-center">
                        <h2 class="mt-4">Industry</h2>
                        <div class="ser-t">
                            <b></b>
                            <span><i></i></span>
                            <b class="line"></b>
                        </div>
                        <div class="job-content-grid mt-5">
                            <?php
                                $query = "SELECT * FROM pos_industry";
                                $query_run = mysqli_query($con,$query);
                                $home = mysqli_num_rows($query_run) > 0;
                                
                                if($home){
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        ?>
                                            <div class="box">
                                                <a href="#"><article>
                                                    <img src="job_admin/upload/<?php echo $row['industry_image']?>" alt="test" class="img-responsive">
                                                    <div class="text">
                                                        <h6><?php echo $row['industry_name'] ?></h6>
                                                    </div>
                                                </article></a>
                                            </div>
                                        <?php

                                    }
                                }
                                else{
                                    echo "Nothing Found";
                                }

                            ?>
                            
                        </div>
                    
                    </div>

                    <div class="location mt-5 text-center">
                        <h2 class="mt-4">Location</h2>
                        <div class="ser-t">
                            <b></b>
                            <span><i></i></span>
                            <b class="line"></b>
                        </div>
                        
                        <div class="job-content-grid mt-5">
                            <?php
                                $query = "SELECT * FROM pos_location";
                                $query_run = mysqli_query($con,$query);
                                $home = mysqli_num_rows($query_run) > 0;
                                
                                if($home){
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        ?>
                                            <div class="box">
                                                <a href="#"><article>
                                                    <img src="job_admin/upload/<?php echo $row['location_image']?>" alt="test" class="img-responsive">
                                                    <div class="text">
                                                        <h6><?php echo $row['location_name'] ?></h6>
                                                    </div>
                                                </article></a>
                                            </div>
                                        <?php

                                    }
                                }
                                else{
                                    echo "Nothing Found";
                                }

                            ?>
                           
                        </div>
                    </div>

                    <div class="type mt-5 text-center">
                        <h2 class="mt-4">Type</h2>
                        <div class="ser-t">
                            <b></b>
                            <span><i></i></span>
                            <b class="line"></b>
                        </div>
                        <div class="job-content-grid mt-5">

                            <?php
                                $query = "SELECT * FROM pos_type";
                                $query_run = mysqli_query($con,$query);
                                $home = mysqli_num_rows($query_run) > 0;
                                
                                if($home){
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        ?>
                                            <div class="box">
                                                <a href="#"><article>
                                                    <img src="job_admin/upload/<?php echo $row['types_image']?>" alt="test" class="img-responsive">
                                                    <div class="text">
                                                        <h6><?php echo $row['types_name'] ?></h6>
                                                    </div>
                                                </article></a>
                                            </div>
                                        <?php

                                    }
                                }
                                else{
                                    echo "Nothing Found";
                                }

                            ?>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <!-------------------- Job-Content END ------------------->
        
       

        <!-------------------- Footer start ------------------->

            <?php include "common/footer.php" ?>  

        <!-------------------- Footer END ------------------->
        
        
    </body>
</html>