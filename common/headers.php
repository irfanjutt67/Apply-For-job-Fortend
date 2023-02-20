<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="common/headers.css">
  </hrad>
  <body>

    <!------------------ Nav Start ------------------>
      <nav>
        <div class="navbar">
          <i class="fas fa-bars"></i>
          <div class="logo"><a href="index.php"><img src="images/logo1.png" class="img-fluid" alt="Responsive image"></a></div>
          <div class="nav-links">
            <div class="sidebar-logo">
              <i class="fas fa-times"></i>
            </div>
           <!-------------------- Nav tags Start ------------------>

        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="aply.php">How to apply</a></li>
          <li><a href="viewjob.php">View all job</a></li>
          <li><a href="contact.php">Contact us</a></li>
        </ul>
          </div>
        </div>
      </nav>
      
    <script>

      // sidebar open close js code
      let navLinks = document.querySelector(".nav-links");
      let menuOpenBtn = document.querySelector(".navbar .fa-bars");
      let menuCloseBtn = document.querySelector(".nav-links .fa-times");
      menuOpenBtn.onclick = function() {
      navLinks.style.left = "0";
      }
      menuCloseBtn.onclick = function() {
      navLinks.style.left = "-100%";
      }


    </script>

</body>
</html>
    
