<!DOCTYPE html>
<html lang="en">

<head>
    <block name="title"></block>
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
    <block name="banner">
    </block>
    <block name="body"></block>
    <block name="footer">
        <div class="w3agile-footer">
            <div class="container">
                <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="#">Laitingyou</a></p>
            </div>
        </div>
    </block>

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