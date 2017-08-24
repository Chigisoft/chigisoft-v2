<!--Action Section-->
<section id="action-background">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8">
                <h3>Get immediate access to <strong>the best digital solutions</strong> for your business.</h3>
            </div>
            <div class="col-md-4">
                <a href="#request_quote" data-target="#request_quote" data-toggle="modal" class="btn btn-default btn-lg cgs-action-btn">
                    Get <strong>it</strong> now!
                </a>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<section class="section-background-inv">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12" style="margin-bottom: 25px;">
                <img class="img-responsive" src="assets/img/chigisoft.png">
                <div id="social-links">                                
                    <ul class="footer-social-list">
                        <li class="social-facebook"><a href="http://facebook.com/chigisoft" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="http://twitter.com/chigisoft" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-linkedin"><a href="http://linkedin.com/company/chigisoft" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3 col-xs-12" style="margin-bottom: 25px;">
                <h5>ABOUT US</h5>
                <p class="about-cgs">
                Chigisoft is an innovative ICT establishment that provides cutting edge and state-of-the-art ICT solutions that are cost-effective, scalable, secure and ingenious to improve your business and enable you achieve your goals.
                </p>
                <h5>RC: 1370719</h5>
            </div>

            <div class="col-sm-2 col-xs-12" style="margin-bottom: 25px;">
                <h5>OUR LOCATION</h5>
                <p class="about-cgs">Registered Address: Suite 10 Wokems Estate 4, Choba. Port Harcourt. Nigeria.</p>
                <p class="about-cgs">246 Obi-Wali Road, Thompson Estate, Port Harcourt. Nigeria.</p>
            </div>

            <div class="col-sm-2 col-xs-12" style="margin-bottom: 25px;">
                <h5>REACH US</h5>
                <ul class="contact-list">
                    <li class="about-cgs">
                        <i class="fa fa-calendar-o"></i>
                        &nbsp;&nbsp;Mon-Fr. 8am - 5pm
                    </li><br>
                    <li class="about-cgs">
                        <i class="fa fa-phone"></i>
                        &nbsp;&nbsp;<a href="tel:+2348071799885" style="color:#656565;">+234 807 179 9885</a>
                    </li><br>

                    <li class="about-cgs">
                        <i class="fa fa-envelope-o"></i>
                        &nbsp;&nbsp;<a href="mailto:contact@chigisoft.com" style="color:#656565;">contact@chigisoft.com</a>
                    </li><br>
                </ul>
            </div>

            <div class="col-sm-2 col-xs-12" style="margin-bottom: 25px;">
                <h5>ABOUT</h5>
                <p><a href="company">Company</a></p>
                <p><a href="careers">Careers</a></p>
                <p><a href="https://techph.ng/blog" target="_blank">Blog</a></p>
                <p><a href="services">Services</a></p>
            </div>
        </div>
    </div>
</section>

<!--Sub-Footer-->
<section id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                &copy; 2017 CHIGISOFT LTD | All rights reserved. 
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.bubble.text.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/cgs-script.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
        $("#fade").fadeIn(3000);
    });
    
    function sendMessage()
    {
        var name = $('input#fullname').val().trim();
        if (name == "" || name.indexOf(" ") < 0) {
		$('#successmessage').hide();
            $('#errormessage').html("Please provide your full name");
            $('#errormessage').show(500);
            //$('input#fullname').focus();
            return;
        }

        var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
        var email = $('input#email').val().trim().toLowerCase(); // get the value of the input field
        if (email == "" || !emailCompare.test(email)) {
		$('#successmessage').hide();
            $('#errormessage').html("Please provide a working email address");
            $('#errormessage').show(500);
            //$('input#fullname').focus();
            return;
        }

        var msg = $('#message').val(); // get the value of the input field
        if (msg == "" || msg == " ") {
		$('#successmessage').hide();
            $('#errormessage').html("Please enter your message");
            $('#errormessage').show(500);
            //$('input#fullname').focus();
            return;
        }
		
		var subject = $('#subject').val(); // get the value of the input field
        if (subject == "") {
		$('#successmessage').hide();
            $('#errormessage').html("Please enter the subject of the message");
            $('#errormessage').show(500);
            //$('input#fullname').focus();
            return;
        }

        $.ajax({
                type: "POST",
                url: 'mail.php',
                data: {name: name, email: email, message: msg, subject: subject},
                timeout: 6000,
                error: function (request, error) {

                },
                success: function (response) {
                      $('#errormessage').hide();
                        $('#successmessage').html(response);
                        $('#successmessage').show(500);
           

                }
            });
    }
    
    function sendQuote()
    {
        var company = $('#company').val();
        var fullname = $('#fullname').val(); // get the value of the input field
        if (fullname == "" || fullname == " ") {
		eModal.alert("Please Enter Your fullname <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>","reply") ;
            return;
        };
		
		 var email = $('#email').val(); // get the value of the input field
        if (email == "" || email == " ") {
		eModal.alert("Please Enter Your e-mail <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>","reply") ;
            return;
        };
		
		 var describe = $('#describe').val(); // get the value of the input field
        if (describe == "" || describe == " ") {
		eModal.alert("Please Enter Your Description <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>","reply") ;
            return;
        };
		
		 spin = '<span class="fa fa-circle-o-notch fa-spin fa-3x text-primary"></span><span class="h4">Loading</span>';
			eModal.alert(spin,"reply");

            var d = {fullname: fullname, email: email, company: company, describe: describe};
            console.log(d);

		 $.ajax({
			type: "POST",
            url: "process_quote.php", //process to mail
            data: d,
            error: function (request, error) {
                alert("error");
            },
            success: function(msg){
                eModal.alert(msg,"reply") ;
            },
        });
        
		    console.log("fire");
		  
		  }
</script>

		<!-- Modal -->
<div id="request_quote" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="contact" id="quote" action='process_quote.php' method='POST' style='color:black;'>
    <!-- Modal content-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Request Quote</h4>
                </div>
                
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" >
                            <label class='control-label col-md-2'>Full Name *
                            </label>
                            <div  class='col-md-10'>
                                <input class="form-control" type='text'  placeholder="Enter Full Name"name='fullname' id='fullname' required/>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">	
                        <div   class="form-group" >
                            <label class='control-label col-md-2'>E-Mail *
                            </label>
                            <div  class='col-md-10'>
                                <input class="form-control" type='email'  placeholder="Enter E-Mail Address"name='email' id='email'required/>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div   class="form-group" >
                            <label class='control-label col-md-2'>Company Name
                            </label>
                            <div  class='col-md-10'>
                                <input class="form-control" type='text'  placeholder="enter company name"name='company'id='company'required/>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="form-group" >
                            <label class='control-label col-md-2'>Project Type *
                            </label>
                            <div  class='col-md-10'>
                                <select class="form-control" name="type" id='type'>
                                    <option>Website</option> 
                                    <option>Web App</option>
                                    <option>Software/App</option> 	
                                    <option>I.T. Infrastructure</option> 	
                                    <option>Security System</option> 
                                    <option>Other</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-md-12" for="contents">Describe The Project *</label>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="10" col='20' id="describe" wrap='hard' name="describe" required> </textarea>
                            </div>
                        </div> 
                    </div>
                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick='sendQuote()' class="btn btn-success"  >Send!</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>