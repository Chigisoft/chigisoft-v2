<nav class="navbar navbar-fixed-top nav-container">
<!--
    <div id="top-alert" class="blue-bg">
        Call: 08071799885 Email: <a href="mailto:contact@chigisoft.com">contact@chigisoft.com</a>
    </div>
-->
                <!--<div class="container-fluid">-->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars fa-15x"></span>
            </button>
<!--            <a class="navbar-brand" href="https://www.chigisoft.com">Chigi<span class="bold-span">soft</span></a>-->
            <a class="navbar-brand" href="https://www.chigisoft.com">
                <img alt="CHIGISOFT" src="assets/img/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php if(isset($home)){echo $home;} ?>"><a href="https://www.chigisoft.com">Home</a></li>
                
                <li class="dropdown <?php if(isset($company)){echo $company;} ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="company">About Us</a></li>
                        <li><a href="careers">Careers</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="https://techph.ng/blog" target="_blank">Blog</a></li>
                    </ul>
                </li>

                <li class="<?php if(isset($services)){echo $services;} ?>"><a href="services">Services</a></li>
                
                <li class="<?php if(isset($contact)){echo $contact;} ?>"><a href="contact">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li id="btn-trq">
                    <a href="#request_quote" data-target="#request_quote" data-toggle="modal">Request Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
