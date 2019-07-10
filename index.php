    <?php get_header(); ?>
    
    <!-- Main page content -->
    <div class="container-fluid">
        <!-- hero row -->
        <div class="row">
            <div id="hero-div" class="text-center">
                <img src="http://u.cubeupload.com/kgorham05/logoflasktransparent.png" width=65 id="hero-flask-logo" />
                <h1 id="hero-title">CLEAN CUT</h1>
                <h2 id="hero-tag-line">Easily adjust extract viscosity to function preperly in your chosen hardware</h2>
                <a id="hero-btn" href="https://aftermathlab.com/shop/">SHOP NOW</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div id="lab-div" class="text-center">
                    <form action="https://aftermathlab.com/product-category/lab-supply/">
                        <button class="module cat-btn" id="lab-btn" type="submit">
                            <div class="module__top">
                                <div class="top__content">
                                    <img src="http://u.cubeupload.com/kgorham05/planticonwhitetransp.png"
                                        height="20" width="20">
                                </div>
                            </div>
                            <div class="module__contents">LAB SUPPLY</div>
                        </button>
                    </form>

                </div>
            </div>
            <div class="col-md-7">
                <div id="cart-div" class="text-center">
                    <form action="https://aftermathlab.com/product-category/cartridges/">
                        <button class="module cat-btn" id="cart-btn" type="submit">
                            <div class="module__top">
                                <div class="top__content">
                                    <img src="http://u.cubeupload.com/kgorham05/planticonwhitetransp.png"
                                        height="20" width="20">
                                </div>
                            </div>
                            <div class="module__contents">CARTRIDGES</div>
                        </button>
                    </form>
                </div>
                <div id="terp-div" class="text-center">
                    <form action="https://aftermathlab.com/product-category/terpenes/">
                        <button class="module cat-btn" id="terp-btn" type="submit">
                            <div class="module__top">
                                <div class="top__content">
                                    <img src="http://u.cubeupload.com/kgorham05/planticonwhitetransp.png"
                                        height="20" width="20">
                                </div>
                            </div>
                            <div class="module__contents">TERPENES</div>
                        </button>
                    </form>
                </div>
                <div id="equip-div" class="text-center">
                    <form action="https://aftermathlab.com/product-category/equipment/">
                        <button class="module cat-btn" id="equip-btn" type="submit">
                            <div class="module__top">
                                <div class="top__content">
                                    <img src="http://u.cubeupload.com/kgorham05/planticonwhitetransp.png"
                                        height="20" width="20">
                                </div>
                            </div>
                            <div class="module__contents">EQUIPMENT</div>
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <!-- Blog posts -->
    <div class="container">
        <div class="row" id="post-row">
            <div class="col-md-6 padding-back text-center">
                <!-- This img is hardcoded - switch to have it pull from most recent blog -->
                <a class="blog-link" href="https://aftermathlab.com/blog">
                    <div id="first-blog-img"></div>
                    <img class="gold-plant-icon" src="http://u.cubeupload.com/kgorham05/planticongoldwhitebg.jpg"
                        height="25" width="25">
                    <!-- Switch this to pull most recent post title -->
                    <h2 class="post-title">Buy Quality</h2>
                 </a>    
                    <!-- Switch to pull most recent post summary -->
                <p class="post-text">Despite cannabis users having more options for consumption than ever before,
                    smoking still reigns supreme as the most common. However vaporizers continue to become more and
                    more ubiquitous. It is easy to see why. Instead of having to roll one up or deal with resiny
                    paraphernalia and pungent smoke, you can enjoy a discreet puff at the click of a button.
                </p>
            </div>
            <div class="col-md-6 padding-back text-center">
                <a class="blog-link" href="https://aftermathlab.com/blog">
                    <div id="second-blog-img"></div>
                    <img class="gold-plant-icon" src="http://u.cubeupload.com/kgorham05/planticongoldwhitebg.jpg"
                        height="25" width="25">
                    <h2 class="post-title">From Plant to Pen: The Process</h2>
                </a>    
                    <p class="post-text">Vape pens are everywhere these days. It’s easy to understand why: they’re
                        convenient, discreet, enjoyable, and effective. But if you’re like me, you’re probably wondering
                        <strong>how do they actually make that stuff?</strong> Well look no further, you’re about to
                        learn the basics of the entire process, from plant to pen.
                    </p>
            </div>
        </div>

        <!-- Social Media Row --> 
        <div class="row" id="social-media-row">
            <div class="col-md-12">
                <a href="https://www.instagram.com/aftermath_lab/" target="_blank">
                    <div class="marg-right text-center" id="social-1-div">
                        <img class="img-fluid" id="social-1-img"
                            src="http://u.cubeupload.com/kgorham05/sm1opt.jpg">
                        <img src="http://u.cubeupload.com/kgorham05/Group32x.png" alt="Ig logo"
                            id="ig-logo">
                        <p id="ig-tag">@Aftermath_lab</p>
                    </div>
                </a>

                <div id="social-2">
                    <img src="http://u.cubeupload.com/kgorham05/lemonsopt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-3">
                    <img src="http://u.cubeupload.com/kgorham05/morelopt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-4">
                    <img src="http://u.cubeupload.com/kgorham05/honeyopt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-5">
                    <img src="http://u.cubeupload.com/kgorham05/orangesopt.jpg" height="214"
                        width="214">
                </div>


            </div>

        </div>



    </div>
 

<?php get_footer(); ?>