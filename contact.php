
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="UTF-8">
   <link rel="icon" href="images/logo1.png" type="image/icon tye">
   <title>Contact Us</title>
   <link rel="stylesheet" type="text/css" href="css/contact.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="fontswesome/css/all.css">
   
   <!------------- Bootstarp Links ---------------> 
    <link rel="stylesheet" type="text/css" href="libraries1/bootstrap.min.css">
   <script type="text/javascript" src="libraries1/popper.min.js"></script>
   <script type="text/javascript" src="libraries1/bootstrap.min.js"></script>
  
  </head>
<body>
    
    <div class="back-image">
            
		<!-------------------- Header start ------------------->
	
			<?php include "common/headers.php" ?>  
	
		<!-------------------- Header END ------------------->

	    <!-------------------- banner start ------------------->

		<div class="banner-text">
			Contact Us
		</div>
		<div class="banner-text01">
			<p>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
		</div>
	</div>
	<!-------------------- banner end ------------------->

	<!-------------------- Contact-form start ------------------->

    <form class="my-form" action=" " id="myForm" method="post" autocomplete="off">
		<div class="container mt-5">
			<h1>Get in touch!</h1>
			<ul>
				<li>
					<div class="grid grid-2">
						<input type="text" name="contact_username" placeholder="Full Name" id="name" class="name" required>  
						<input type="email" name="contact_email" placeholder="Email" id="email" class="email" required>
					</div>
				</li>
				<li>
					<div class="grid grid-2"> 
						<input type="tel" name="contact_phone" placeholder="Phone" id="subject" class="phone">
						<input type="tel" name="contact_whatsapp" placeholder="Whatsapp No" id="whatsapp" class="whatsapp">
					</div>
				</li>    
				<li>
					<textarea name="contact_msg" placeholder="Message" id="body" class="message"></textarea>
				</li> 
				<li>
					<div class="grid grid-3">
						<button class="btn-grid bttn" type="submit" name="submit" onclick="sendEmail()" value="Send An Email"/>
							<span class="back">
							<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
							</span>
							<span class="front">SUBMIT</span>
						</button>
						<h5 class="sent-notification" style="color:black;"></h5>
					</div>
				</li>    
			</ul>
		</div>
	</form>
	<!-------------------- Contact-form END ------------------->

    <!-------------------- Footer start ------------------->

    <?php include "common/footer.php" ?>  

    <!-------------------- Footer END ------------------->

</body>
</html>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");

    if (isNotEmpty(name) && isNotEmpty(email)) {
      $.ajax({
        url: 'sendEmail.php',
        method: 'POST',
        dataType: 'json',
        data: {
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          body: body.val()
        }, 
        success: function (response) {
          $('#myForm')[0].reset();
            $('.sent-notification').text("Message Sent Successfully.");
        }
      });
    }
  }

  function isNotEmpty(caller) {
    if (caller.val() == "") {
      caller.css('border', '1px solid red');
      return false;
    } else
      caller.css('border', '');
      return true;
    }
</script>

<script>
  $(document).ready(function () {
 
    $('.bttn').click(function (e) {
      e.preventDefault();

      var username = $('.name').val();
      var useremail = $('.email').val();
      var userphone = $('.phone').val();
	  var userwhatsapp = $('.whatsapp').val();
      var usermsg = $('.message').val();

      if(username != '' & useremail !='')
      {
        $.ajax({
          type: "POST",
          data: {
            'checking_add':true,
                                
            'contact_username': username,
            'contact_email': useremail,
            'contact_phone': userphone,
			'contact_whatsapp': userwhatsapp,
            'contact_msg': usermsg,
          },
          success: function (response) {
          }
        });
      }
    });
  }); 
</script>
