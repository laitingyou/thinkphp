<extend name="./Template/Home/Public/base.php" />

<block name="title">
    <title>Home</title>
</block>
<block name="banner">
    <div class="banner" style="background:url(__HOME_IMG__/bg.jpg)no-repeat center 0px;">
        <div class="banner-w3lsinfo">
            <include file="Public/bannerHeader"/>
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
</block>




