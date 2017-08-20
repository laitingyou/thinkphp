<extend name="./Template/Home/Public/base.php" />

    <block name="title"><title>About</title></block>
    <block name="banner">
        <div class="banner about-w3banner" style="background:url(__HOME_IMG__/bg.jpg)no-repeat center 0px;">
            <div class="banner-w3lsinfo">
                <!-- header -->
                <include file="Public/bannerHeader"/>
                <!-- //header -->
                <div class="w3agile-address">
                    <div class="container">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, New York</li>
                            <li><i class="fa fa-phone" aria-hidden="true"> </i>  +01 111 222 3333</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </block>
    <block name="body">
        <div class="about">
            <div class="container">
                <div class="w3ls-title">
                    <h2 class="agileits-title">About Me</h2>
                </div>
                <div class="about-agileinfo">
                    <div class="col-md-4 col-sm-4 about-left ">
                        <img src="__HOME_IMG__/img1.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-8 col-sm-8 about-right wthree">
                        <h3>Hi, i'm <span>{$info['name']}</span></h3>
                        <h4>Web Designer & Developer </h4>
                        <ul class="address">
                            <li>
                                <ul class="agileits-address-text ">
                                    <li><b>D.O.B :</b></li>
                                    <li>{$info['birthday']}</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="agileits-address-text">
                                    <li><b>PHONE : </b></li>
                                    <li>{$info['phone']}</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="agileits-address-text">
                                    <li><b>ADDRESS :</b></li>
                                    <li>{$info['address']}</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="agileits-address-text">
                                    <li><b>E-MAIL :</b></li>
                                    <li><a href="mailto:example@mail.com"> {$info['email']}</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="agileits-address-text">
                                    <li><b>WEBSITE :</b></li>
                                    <li><a href="http://w3layouts.com">{$info['website']}</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="social-wthree-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                                <li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="hire-w3lgrids">
                            <a href="#" class="wthree-more nina" data-text="DOWNLOAD CV">
                                <span>D</span><span>o</span><span>w</span><span>n</span><span>l</span><span>o</span><span>a</span><span>d</span> <span>c</span><span>v</span>
                            </a>
                            <a href="#" class="wthree-more w3more1 nina" data-text="hire me">
                                <span>h</span><span>i</span><span>r</span><span>e</span> <span>m</span><span>e</span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="about-text agileits-w3layouts">
                        <p> {$info['article']}</p>
                    </div>
                </div>
            </div>
        </div>
    </block>
