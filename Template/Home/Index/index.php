<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <!-- Custom Theme files -->
    <link href="__PUBLIC__/statics/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="__HOME_CSS__/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="__PUBLIC__/statics/css/font-awesome.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="__PUBLIC__/statics/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner" style="background:url(__HOME_IMG__/bg.jpg)no-repeat center 0px;">
        <div class="banner-w3lsinfo">
            <!-- header -->
            <div class="header">
                <div class="container">
                    <div class="logo">
                        <h1><a href="index.html">Trendy CV</a></h1>
                    </div>
                    <div class="menu">
                        <a href="#" class="navicon"></a>
                        <div class="toggle effect-3">
                            <ul class="toggle-menu">
                                <li><a href="index.html" class="active"> Home</a></li>
                                <li><a href="about.html"> About</a></li>
                                <li><a href="skills.html"> Skills</a></li>
                                <li><a href="experience.html">Experience</a></li>
                                <li><a href="education.html">Education</a></li>
                                <li><a href="projects.html"> My Projects</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="social-w3licon">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //header -->
            <!-- banner-text -->
            <div class="banner-text">
                <div class="container">
                    <div class="banner-w3lstext">
                        <h2>WIKOLIA<span>Iam a Web Designer</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //banner-text -->
            <div class="w3agile-address">
                <div class="container">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, New York</li>
                        <li><i class="fa fa-phone" aria-hidden="true"> </i> +01 111 222 3333</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- footer -->
    <div class="w3agile-footer">
        <div class="container">
            <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
    </div>
    <!-- //footer -->
    <!-- menu-js -->
    <script>
        $('.navicon').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('navicon--active');
            $('.toggle').toggleClass('toggle--active');
        });
    </script>
    <!-- //menu-js -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="__PUBLIC__/statics/js/bootstrap.js"></script>
</body>

</html>