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
    <link rel="stylesheet" type="text/css" href="libraries1/bootstrap.min.css">
   <script type="text/javascript" src="libraries1/popper.min.js"></script>
   <script type="text/javascript" src="libraries1/bootstrap.min.js"></script>
   <!-- slick slider -->
   <script type="text/javascript" src="libraries1/jquery.min.js"></script>
   <script type="text/javascript" src="libraries1/jquery-2.2.0.js"></script> 
   <script type="text/javascript" src="libraries1/slick.js"></script> 
  </head>
<body>
    
   <!-------------------- Header start ------------------->

      <?php include "common/headers.php" ?>  

   <!-------------------- Header END ------------------->
   <!-------------------- Banner start ------------------->   
      <div class="slick-slider02">
         <div class="customer-logos">
             <div class="slide"><img src="images/banner.jpg" class="img-fluid" alt="Responsive image"></div>
             <div class="slide"><img src="images/banner2.jpg" class="img-fluid" alt="Responsive image"></div>
         </div>
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
                  },{
                  breakpoint: 520,
                  settings: {
                     slidesToShow: 1
                  }
               }]
            });
         });
      </script>
   </div>

   <!-------------------- Job-Content Start ------------------->
   
   <div class="industry">
      <div class="industry01">
         <div class="container-fluid mb-5"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs justify-content-center" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" style="color:#000066;">Industry</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1" style="color:#000066;">Loctaions</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2" style="color:#000066;">Type</a>
               </li>
            </ul>

            <!-------------------- Industry-content Start ------------------->

            <!-- Tab panes -->
            <div class="tab-content">
               <div id="home" class="container-fluid tab-pane active">
                  <div class="row mt-5">
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#"> Accounting & finance</a><hr>
                           <a href="#"> Call centre & customer service </a> <hr>
                           <a href="#"> Engineering </a><hr>
                           <a href="#"> Healthcare & science </a><hr>
                           <a href="#"> Hospitality & events </a><hr>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#">  Human resources </a><hr>
                           <a href="#">  Industrial & manufacturing </a> <hr>
                           <a href="#"> Information technology </a><hr>
                           <a href="#"> Marketing </a><hr>
                           <a href="#"> Office, clerical & administrative </a><hr>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#"> Professional & executive </a><hr>
                           <a href="#"> Retail & sales </a> <hr>
                           <a href="#">  Skilled trades </a><hr>
                           <a href="#"> Transportation </a><hr>
                           <a href="#"> Warehousing </i></a><hr>
                        </div>
                     </div>
                  </div>
               </div>
               <!-------------------- Industry-content END ------------------->

               <!-------------------- Locations-content Start ------------------->

               <div id="menu1" class="container-fluid tab-pane fade"><br>
                  <div class="row mt-5">
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#"> Accounting & finance </a><hr>
                           <a href="#"> Call centre & customer service </a> <hr>
                           <a href="#"> Engineering </a><hr>
                           <a href="#"> Healthcare & science </a><hr>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#">  Human resources </a><hr>
                           <a href="#">  Industrial & manufacturing </a> <hr>
                           <a href="#"> Information technology </a><hr>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="nav-tag">
                           <a href="#"> Professional & executive </a><hr>
                           <a href="#"> Retail & sales </a> <hr>
                           <a href="#">  Skilled trades </a><hr>
                        </div>
                     </div>
                  </div>
               </div>
                <!-------------------- Locations-content END ------------------->

                 <!-------------------- TYPE-content Start ------------------->

               <div id="menu2" class="container-fluid tab-pane fade"><br>
                  <div class="row mt-5">
                     <div class="col-lg-12">
                        <div class="nav-tag">
                           <a href="#"> Accounting & finance </a><hr>
                           <a href="#"> Call centre & customer service </a> <hr>
                           <a href="#"> Engineering </a><hr>
                        </div>
                     </div>
                  </div>
               </div>
                <!-------------------- TYPE-content END------------------->

            </div>
         </div>
      </div>
   </div>
   <!-------------------- Job-Content END ------------------->
 
   <!-------------------- our-partner Start ------------------->
   

   <div class="partner">
      <div class="partner01">
         <p>Work at these great companies</p>
         <div class="slick-slider02">
            <div class="customer-logoss">
               <div class="slid"><img src="images/celestica.jpg"></div>
               <div class="slid"><img src="images/sci.jpg"></div>
               <div class="slid"><img src="images/radial.jpg"></div>
               <div class="slid"><img src="images/j.png"></div>
               <div class="slid"><img src="images/alkaram.png"></div>
               <div class="slid"><img src="images/cabury.png"></div>
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
    <!-------------------- our-partner END ------------------->
    
   <!-------------------- job-advice Start ------------------->

   <div class="job-advice">
      <div class="job-advice01">
         <div class="container-fluid mt-5">
            <div class="row">
               <div class="col-lg-4 col-md-4 p-2">
                  <div class="job-cards">
                     How to Organize Your Job Search
                     <p>If you’ve ever embarked on a job search, you know things can get really chaotic, really quickly.</p>
                     <i class="far fa-file-alt"></i><span>Artical</span>
                     <a href="#">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 p-2">
                  <div class="job-cards">
                     How to Organize Your Job Search
                     <p>If you’ve ever embarked on a job search, you know things can get really chaotic, really quickly.</p>
                     <i class="far fa-file-alt"></i><span>Artical</span>
                     <a href="#">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>  
               </div>
               <div class="col-lg-4 col-md-4 p-2">
                  <div class="job-cards">
                     How to Organize Your Job Search
                     <p>If you’ve ever embarked on a job search, you know things can get really chaotic, really quickly.</p>
                     <i class="far fa-file-alt"></i><span>Artical</span>
                     <a href="#">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="see-all">
           <a href="#">See all  <i class="fas fa-long-arrow-alt-right"></i></a>
         </div>
      </div>
   </div>
   <!-------------------- job-advice END ------------------->


   <!-------------------- Footer start ------------------->

      <?php include "common/footer.php" ?>  

   <!-------------------- Footer END ------------------->
   
    
</body>
</html>