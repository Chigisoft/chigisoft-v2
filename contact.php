<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="description" content="Chigisoft is an innovative ICT establishment that provides cutting edge and state-of-the-art ICT solutions that are cost-effective, scalable, secure and ingenious to improve your business and enable you achieve your goals."/>
        <meta name="keywords" content="website, it, ict, ict companies in nigeria, it companies in nigeria, international it company, chigisoft, software, mobile app, biometric access control"/>
        <meta name="author" content="Chigisoft LTD."/>
        <title>Contact Chigisoft | The Company</title>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">         
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/cgs-style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	    <link rel="icon" type="image/jpg" href="assets/img/chi.jpg">
    </head>
    
    <body>
        <?php 
        $contact ="active";
        ?>
        <?php include('pagelayout/header.php');?>
        <!--Slider Body-->
        <section id="page-slider-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-holder">
                            <h1 class="page-title">Contact <strong>Us</strong>
                            </h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </section>
        
        <div id='contact'>
            <div class="container">
                
                <div class="row">
                    <br><br><br><br>
                    <div class="header-section text-center">    
                        <div class="text-border2">
                            <h2 class="section-head-dark">Let's talk</h2>
                            <span class="top-span"></span>
                        </div>	
                        <br>
                        <p>What can we do for you?</p>	
                        <br><br>

                    </div>
                    
                    <form role="form" >
                        <div class="col-md-6 col-sm-6 col-xs-12 left">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form" id="fullname" placeholder="Your Name" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 right">
                            <div class="form-group">
                                <textarea class="form-control" type="text" name="message" id="message" rows="6"  placeholder="Message" required></textarea>
                            </div>
                        </div>
                        
                        <div id='response'>
                        </div>
                        <div class="alert alert-danger col-md-12" align='center' id="errormessage" style='display: none; background-color:white; color:red;'>
                            <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                        </div>
                        <div class=" col-md-12" align='center' id="successmessage" style='display: none;'>
                            <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                        </div>
                        
                        <div class="col-xs-12">
                        <!-- Button -->
                            
                            <button type="button" id="btnsendmessage" onclick="sendMessage();"  class="btn btn-default btn-lg cgs-action-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
        <?php include('pagelayout/footer.php');?>
    </body>
</html>