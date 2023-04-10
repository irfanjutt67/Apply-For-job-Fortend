<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <meta charset="UTF-8">
   <link rel="icon" href="images/logo1.png" type="image/icon tye">
   <title>How Apply</title>
   <link rel="stylesheet" type="text/css" href="css/aply.css"> 
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

        <!-------------------- Banner start ------------------->

        <div class="banner-text">
            Here's How To Apply
        </div>
        <div class="banner-text01">
            <p>Answer a few questions, click a few buttons and pretty soon you'll be applying for jobs all over this place.</p>
        </div>
    </div>
    <!-------------------- Banner END ------------------->

    <!-------------------- apply-form start ------------------->


    <!-------------------- name + grnder start ------------------->

    <div class="main-form">
        <div class="form-heading"> 
            Registration Form.
            <p>Please, fill the form in the following information in ALL CAPS (Capital letters)</p>
        </div>
        <form>
            
            <!-------------------- name + grnder STart ------------------->
            <div class="row">
                <div class="col-md-6">
                            <label for="fname">* What is your name?</label>
                            <input placeholder="e.g JHON DOE" type="text" tabindex="2" required>
                            <label class="bottom-lab" for="fname">Please, type in your full name.</label>
                </div>
                <div class="col-md-6">
                    <div class="select-category">
                        <label for="select">What is your gender?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Category</option>
                            <option value="usa">MAN</option>
                            <option value="usa">WOMAN</option>
                            <option value="usa">NON-BINARY</option>
                        </select>
                        <p style="color:teal">We need to know your gender to make our services more convenient for you.</p>
                    </div>
                </div>
            </div>
            <!-------------------- name + grnder END ------------------->

            <!-------------------- mobile + whatsno start ------------------->
            <div class="row">
                <div class="col-md-6">
                    <label for="fname">* What is your phone number?</label>
                    <input placeholder="e.g 0300-1234567" type="text" tabindex="2" required>
                </div>
                <div class="col-md-6">
                    <label for="fname">* What is your WhatsApp Number?</label>
                    <input placeholder="e.g 0300-1234567" type="text" tabindex="2" required>
                    <label class="bottom-lab1" for="fname">Please, fill this only if your WhatsApp number is different from your Canadian number.
                    Most of our job postings are communicated through WhatsApp. </label>
                </div>
            </div>
            <!-------------------- mobile + whatsno END ------------------->

            <!-------------------- birth + address start ------------------->

                <div class="row">
                    <div class="col-md-6">
                        <label for="birthday">* What is your date of birth?</label>
                    <input type="date" id="birthday" name="birthday"> 
                    </div>
                    <div class="col-md-6">
                        <label >* What is your address?</label>
                        <input type="text"  placeholder="UNIT NO.,STREET"> 
                    </div>
                </div>
            <!-------------------- birth + address start ------------------->

            <!-------------------- city + instruction start ------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="fname">* What city do you live in?</label>
                        <input type="text"  placeholder="e.g. LAHORE"> 
                    </div>
                    <div class="col-md-6">
                        <label for="fname">* What is the major intersection?</label>
                        <input type="text"  placeholder="STEEL AND MAVIS"> 
                        <label class="bottom-lab" for="fname">*This information will help us find you a job near you.</label>
                    </div>
                </div>
            <!-------------------- city + instruction End ------------------->
            
            <!-------------------- province + zipcode start ------------------->
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname">* Province</label>
                        <input type="text"  placeholder="e.g. PUNJAB"> 
                    </div>
                    <div class="col-md-6">
                        <label for="fname">* Zip Code</label>
                        <input type="text"  placeholder="e.g. 4200"> 
                    </div>
                </div>
            <!-------------------- province + zipcode END ------------------->

            <!-------------------- jobs Check-box start ------------------->
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="kind">
                            <p>What kind of jobs are you looking for?</p>
                        </div>
                        <ul class="ks-cboxtags">
                            <div class="custom-control custom-checkbox">
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxOne" value="Cotton Candy">
                                <label for="checkboxOne">GENERAL LABOURER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxTwo" value="Cotton Candy">
                                <label for="checkboxTwo">FORKLIFT OPERATOR</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxThree" value="Cotton Candy">
                                <label for="checkboxThree">G DRIVER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxFour" value="Cotton Candy">
                                <label for="checkboxFour">AZ DRIVER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxFive" value="Cotton Candy">
                                <label for="checkboxFive">DZ DRIVER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxSix" value="Cotton Candy">
                                <label for="checkboxSix">BATCH MIXER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxSeven" value="Cotton Candy">
                                <label for="checkboxSeven">MACHINE OPERATOR</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxEight" value="Cotton Candy">
                                <label for="checkboxEight">WELDER</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxNine" value="Cotton Candy">
                                <label for="checkboxNine">ACCOUNTANT</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkboxTen" value="Cotton Candy">
                                <label for="checkboxTen">OFFICE ADMIN</label></li>
                            </div>
                        </ul>
                        <div class="general">
                            *This will help us determine the kind of job positions your are looking for. You select multiple categories if applicable. 
                            P.S. Selecting the GENERAL LABOURER category opens up the most number of job opportunities. 
                        </div> 
                    </div>
                </div>
            <!-------------------- Check-box END ------------------->

            <!-------------------- time + shift start ------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="select">* Are you available</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Category</option>
                            <option value="usa">PART-TIME</option>
                            <option value="usa">FULL-TIME</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="select">* Are you available</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">shift</option>
                            <option value="usa">Morning Shift</option>
                            <option value="usa">Afternoon Shift</option>
                            <option value="usa">Night Shift</option>
                            <option value="ca">MORNING & AFTERNOON SHIFTS</option>
                            <option value="usa">MORNING & NIGHT SHIFTS</option>
                            <option value="usa">AFTERNOON & NIGHTSHIFTS</option>
                            <option value="usa">MORNING, AFTERNOON & NIGHT SHIFTS</option>
                        </select>
                    </div>
                </div>
            <!-------------------- time + shift END ------------------->
            
            <!-------------------- car start ------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="select">* Do you have a car?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Select</option>
                            <option value="usa">YES</option>
                            <option value="usa">NO</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="select">If YES, then you provide 'RIDES' to your co-workers in exchange for extra bonus?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Select</option>
                            <option value="ca">Yes</option>
                            <option value="usa">NO</option>
                        </select>
                        <label class="bottom-lab" for="fname">We provide extra incentive to people who are willing to give commute to their colleagues.</label>
                    </div>
                </div>
            <!-------------------- car END ------------------->

            
            <!-------------------- people-fit-in-car + Days start ------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="select">How many people can typcally fit in your car including you?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Select</option>
                            <option value="usa">4</option>
                            <option value="usa">5</option>
                            <option value="usa">6</option>
                            <option value="usa">7</option>
                            <option value="usa">7 Plus</option>
                        </select>
                        <label class="bottom-lab" for="fname">  This will help us determine how many people we can send with you to work.
                        More people you take, more the daily bonus will be.</label>
                    </div>
                    <div class="col-md-6">
                        <ul class="ks-cboxtags">
                            <div class="custom-control custom-checkbox">
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox1" value="Cotton Candy">
                                <label for="checkbox1">MONDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox2" value="Cotton Candy">
                                <label for="checkbox2">TUESDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox3" value="Cotton Candy">
                                <label for="checkbox3">WEDNESDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox4" value="Cotton Candy">
                                <label for="checkbox4">THURSDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox5" value="Cotton Candy">
                                <label for="checkbox5">FRIDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox6" value="Cotton Candy">
                                <label for="checkbox6">SATURDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox7" value="Cotton Candy">
                                <label for="checkbox7">SUNDAY</label></li>
                                <li><input  type="checkbox" class="custom-control-input"  id="checkbox8" value="Cotton Candy">
                                <label for="checkbox8">WHOLE WEEK</label></li>
                                <label class="bottom-lab" for="fname">Choose the days you are available to work. Choose the last option (WHOLE WEEK) if you are available to work every day of the week.</label>
                            </div>
                        </ul>
                    </div>
                </div>
            <!-------------------- people-fit-in-car + Days END ------------------->

            <!-------------------- status + months start ------------------->
            <div class="row">
                <div class="col-md-6">
                    <label for="select">* What is your status in Canada?</label>
                    <select id="country" class="from-control" name="country">
                        <option value="ca">Select</option>
                        <option value="usa">INTERNATIONAL STUDENT</option>
                        <option value="usa">WORK PERMIT HOLDER</option>
                        <option value="usa">VISITOR</option>
                        <option value="usa">WORK PERMIT HOLDER</option>
                        <option value="usa">PERMANENT RESIDENT</option>
                        <option value="usa">REFUGEE</option>
                        <option value="usa">CITIZEN</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="select">How many months are you available to work?</label>
                    <select id="country" class="from-control" name="country">
                        <option value="ca">Select</option>
                        <option value="ca">1 TO 2 MONTHS</option>
                        <option value="usa">2 TO 3 MONTHS</option>
                        <option value="ca">3 TO 4 MONTHS</option>
                        <option value="ca">5 TO 6 MONTHS</option>
                        <option value="ca">6 TO 12 MONTHS</option>
                    </select>
                </div>
            </div>
            
            <!-------------------- status + months END ------------------->
            
            <!-------------------- semester + semester-brake Start------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="select">Are you on a semester break?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Select</option>
                            <option value="usa">YES</option>
                            <option value="usa">NO</option>
                        </select>
                        <label class="bottom-lab" for="fname">* This question is for International Students only. </label>
                    </div>
                    <div class="col-md-6">
                        <label for="birthday"> If YES, When did your semester break start?</label>
                        <input type="date" id="birthday" name="birthday"> 
                        <label class="bottom-lab" for="fname">*This question is for International Students only. </label>
                    </div>
                </div>

            <!-------------------- semester + semester-brake END------------------->
            
            <!-------------------- SIN + emergency Start------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="fname">* Please, type 1st initial of your First and Last Name, Birth Month and Birth Day (2 digits), and last 4 digits of your SIN or any
                        other government ID (for example Passport or Driver's License).</label>
                        <input placeholder="e.g AB-12-12-1234" type="text" tabindex="2" required>
                        <label class="bottom-lab1" for="fname"> *This will help us to create a unique candidate ID for you in our database and will prevent any confusion between 
                        applicants who have common names.</label>  
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="fname">Who should we contact in case of an emergency?</label>
                        <input placeholder="e.g JHON DOE" type="text" tabindex="2" required>
                        <label class="bottom-lab1" for="fname">Please, fill in the full name of the person we should contact in case of any emergency. </label>
                    </div>
                </div>
            <!-------------------- SIN + emergency END------------------->
            
            <!-------------------- Relation Start------------------->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="select">What is your relationship with the emergency contact person?</label>
                        <select id="country" class="from-control" name="country">
                            <option value="ca">Select</option>
                            <option value="ca">FRIEND</option>
                            <option value="usa">PARENT</option>
                            <option value="ca">ROOMMATE</option>
                            <option value="ca">PARTNER</option>
                            <option value="ca">SPOUSE</option>
                            <option value="ca">SIBLING</option>
                            <option value="ca">RELATIVE</option>
                        </select>
                    </div>
                </div>
            <!-------------------- Relation END------------------->
            <div class="row mt-2">
                <div class="col-md-12">
                    <p>Thank you for filling up this form, we will soon assign you a job according to your requirements. Please, tell your friends & family about us as we are always searching for responsible,
                    reliable and dedicated employees. Thank you! Western Staffing Services.</p>
                    <button class="btn btn4">Submit</button>
                </div>
            </div>
        </form>
     
        <!-------------------- apply-form END ------------------->

    </div>


    <!-------------------- Footer start ------------------->

      <?php include "common/footer.php" ?>  

     <!-------------------- Footer END ------------------->
     
  </body>
  </html>