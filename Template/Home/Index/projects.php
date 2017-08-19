<extend name="./Template/Home/Public/base.php" />
<block name="title">
    <title>Projects</title>
</block>
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
    <!-- //banner -->
    <!-- projects -->
    <div class="about projects" >
        <div class="container">
            <div class="w3ls-title">
                <h2 class="agileits-title">My Projects</h2>
            </div>
            <div class="w3ls_gallery_grids">
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g1.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g1.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g2.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g2.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g3.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g3.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g4.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g4.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g5.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g5.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g6.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g6.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g7.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g7.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect view view-tenth">
                            <a href="__HOME_IMG__/g8.jpg" class="showcase" data-rel="lightcase:myCollection:slideshow" title="My Projects">
                                <img src="__HOME_IMG__/g8.jpg" alt=" " class="img-responsive" />
                                <div class="mask">
                                    <h3>My projects</h3>
                                    <p>At vero eoset accusamus et iusto odio ducimus.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <script src="__PUBLIC__/statics/js/lightcase.js"></script>
    <script>
        $('.showcase').lightcase();
    </script>
</block>

