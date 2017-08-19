<extend name="./Template/Home/Public/base.php" />
<block name="title">
    <title>Contact</title>
</block>
<block name="banner">
    <div class="banner about-w3banner" style="background:url(__HOME_IMG__/bg.jpg)no-repeat center 0px;">
        <div class="banner-w3lsinfo">
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
        <!-- //banner -->
        <!-- contact -->
        <div class="about contact">
            <div class="container">
                <div class="w3ls-title">
                    <h2 class="agileits-title">Contact Me</h2>
                </div>
                <div class="contact-agileinfo">
                    <div class="col-md-7 w3agile-contact-grids">
                        <div class="ctact-w3left">
                            <form action="#" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="Name" placeholder="" required="">
							</span>
                                <span>
								<i>Email</i>
								<input type="email" name="Email" placeholder="" required="">
							</span>
                                <span>
								<i>Subject</i>
								<input type="text" name="Subject" placeholder="" required="">
							</span>
                                <span>
								<i>Message</i>
								<textarea name="Message" placeholder="" required=""></textarea>
							</span>
                                <div class="w3_submit">
                                    <input type="submit" value="Submit Now">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 w3agile-contact-grids">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit vivamus sed accumsan quam a mollis magna.</p>
                        <div class="profile-grids">
                            <h5>Contact Info</h5>
                            <ul>
                                <li>
                                    <b>PHONE</b> : +01 111 222 3333
                                </li>
                                <li>
                                    <b>FAX</b> :  +15 555 5678
                                </li>
                                <li>
                                    <b>ADDRESS</b> : 756 gb Place,NS Canada
                                </li>
                            </ul>
                        </div>
                        <div class="profile-grids">
                            <h5>Social Media Info</h5>
                            <ul>
                                <li>
                                    <b>E-MAIL</b> : <a href="mailto:example@mail.com"> mail@example.com</a>
                                </li>
                                <li>
                                    <b>WEBSITE</b> : <a href="#">www.myresume.com</a>
                                </li>
                                <li>
                                    <b>TWITTER</b> : <a href="#">example@twitter</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </block>

