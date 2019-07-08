    <?php get_header(); ?>
    
    <!-- Main page content -->
    <div class="container-fluid">
        <!-- hero row -->
        <div class="row">
            <div id="hero-div" class="text-center">
                <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/logo-flask-transparent-opt-hero.png"
                    width=65 id="hero-flask-logo">
                <h1 id="hero-title">CLEAN CUT</h1>
                <h2 id="hero-tag-line">Born from obsession of achieving the perfect balance of aroma and flavor</h2>
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
                                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-white-transparent2-1.png"
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
                                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-white-transparent2-1.png"
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
                                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-white-transparent2-1.png"
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
                                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-white-transparent2-1.png"
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
                <div id="terpology-img"></div>
                <img class="gold-plant-icon"
                    src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-gold-transparent.png"
                    height="25" width="25">
                <h2 class="post-title">Terpology 101</h2>
                <p class="post-text">Terpenes are a large and diverse class of organic compounds produced by a variety
                    of plants. Terpenes are what give each flower, herb and fruit its own unique scent and flavor. Every
                    day, everywhere you go, you encounter terpenes. Stop and smell the roses? More like stop and smell
                    the terpenes.
                </p>
            </div>
            <div class="col-md-6 padding-back text-center">
                <div id="team-img"></div>
                <img class="gold-plant-icon"
                    src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/plant-icon-gold-transparent.png"
                    height="25" width="25">
                <h2 class="post-title">The Aftermath Team</h2>
                <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, libero incidunt
                    reiciendis exercitationem tempore quia id odit provident sit at consequuntur? Incidunt dolore, amet
                    voluptas tempore cumque voluptate vitae inventore.</p>
            </div>
        </div>

        <div class="row" id="social-media-row">
            <div class="col-md-12">
                <a href="https://www.instagram.com/aftermath_lab/" target="_blank">
                    <div class="marg-right text-center" id="social-1-div">
                        <img class="img-fluid" id="social-1-img"
                            src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/sm1-opt.jpg">
                        <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/Group-3@2x.png" alt="Ig logo"
                            id="ig-logo">
                        <p id="ig-tag">@Aftermath_lab</p>
                    </div>
                </a>

                <div id="social-2">
                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/lemons-opt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-3">
                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/morel-opt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-4">
                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/honey-opt.jpg" class="marg-right"
                        height="214" width="214">
                </div>
                <div id="social-5">
                    <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/07/oranges-opt.jpg" height="214"
                        width="214">
                </div>


            </div>

        </div>



    </div>

        <?php if ( have_posts() ) :
              while ( have_posts() ) : the_post(); 
        ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>