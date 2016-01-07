<!DOCTYPE html>
<html>
    <head>
        <title>Armin's Webpage</title>
        <meta charset="utf-8">
        <!---------------------favicon---------------------->
        <link rel="icon" href="img/atlogo-favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="img/atlogo-favicon.ico" type="image/x-icon"/>
        <!---------------Viewport scaling-------------------->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!------------ bootstrap and custom style sheets --------------->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!----------- Bootstrap javascript and jquery ---------->
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <!------Page container for bootstrap ------>
        <div class="container">
            <!---Fixed navbar for page navigation --->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <!---Hamburger menu toggle for when on mobile devices ---->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collpase-1" aria-exanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                            
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/atlogo.png" alt="Armin Toussi logo" /></a>
                    </div>
                    <!-----creates links and dropdowns on nav bar -----> 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!---creates aboutme drop down ---->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">About Me<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="aboutme.html">About Me</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="resume.html">Resume</a></li>
                                    <li role="separator" class="divider"></li>
                                </ul>
                            </li>
                            <!---- creates another dropdown list for Blogs ---->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Blogs<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="projectblog.html">Project Blog</a></li>
                                    <li><a href="CSTblog.html">CST Blog</a></li>
                                </ul>
                            </li>
                            <!------- standard navbar links --------->
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="contactme.html">Contact Me</a></li>
                        </ul>
                        <!----- icons for social media links and the like ----->
                        <p class="navbar-text navbar-right">
                            <a href="https://ca.linkedin.com/in/armin-toussi-904482111">
                            <img src="img/linkedin29px.png" alt="linkedin logo"></a></p>
                        <p class="navbar-text navbar-right"><a href="https://www.facebook.com/armin.toussi">
                            <img src="img/FB-f-Logo__blue_29.png" alt="fb logo"></a></p>
                        <p class="navbar-text navbar-right"><a href="https://github.com/watley">
                            <img src="img/GitHub-Mark-Light-64px.png" alt="github logo"></a></p>
                    </div>   
                </div>
            </nav>
            <!------------ navigation bar ends here ------------>
        </div>
        <!--------------------Main content starts here ----------------------->
        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title resume-header">Thank you</h1>
                <hr />
                <p class="lead">
                    A message has been sent to my email on your behalf. I appreciate 
                    you stopping by today and hopefully you found something you liked.
                </p>
                <hr />
                <a href="index.html"><button type="button" class="btn btn-lg btn-success back">Main Page</button></a>
            </div>
        </div>
        <!----------------------------end of content------------------------------>
         <!---------------------Footer Starts here--------------------->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <p class="lead" id="footerText">Thank you for visiting my personal Site!</p>
                    <hr class="footer-hr"/>
                    <!---------- Footer Navigation ------------>
                    <h3 class="text-center resume-header">Site Map</h3>
                    <ul class="list-inline" id="footer-list">
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="index.html" class="links">Main</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="aboutme.html" class="links">About Me</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="resume.html" class="links">Resume</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="CSTblog.html" class="links">CST Blog</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="projectblog.html" class="links">Project Blog</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="projects.html" class="links">Projects</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                        <li><strong><a href="contactme.html" class="links">Contact Me</a></strong></li>
                        <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></li>
                    </ul>
                    <!--------------Footer Social Media Links----------->
                    <ul class="list-inline text-center">
                        <li><a href="https://www.facebook.com/armin.toussi">
                            <img src="img/facebookTrans.png" alt="Facebook Armin" /></a></li>
                        <li><a href="https://github.com/watley">
                            <img src="img/gitTrans.png" alt="Armin Git" /></a></li>
                        <li><a href="https://ca.linkedin.com/in/armin-toussi-904482111">
                                <img src="img/LinkedinTrans.png" alt="Armin Linkedin"/></a></li>
                    </ul>
                    <hr class="footer-hr"/>
                    <p class="text-center" id="copyright">Copyright 2016 &copy; All rights reserved</p>
                    <p class="text-center" id="credit">Credit to Gorgo for header image and PlanningForums for project image</p>
                </div>
            </div>
        </footer>
        <!-------------------Footer Ends ----------------->
    </body>
</html>
        
        
