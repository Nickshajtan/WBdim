<?php
/**
 * Template Name: Single page template file
 *
 */
?>
<?php get_header(); ?>
<div id="content_container" class="main__container">
<main>
    <section>
        <div class="container pageBlock">
            <div class="row">
<!--               One post-->
                <div class="col-12 pageBlockHeader">
                    <center>
                        <h1 itemprop="headline"><span><?php the_title(); ?></span></h1>
                    </center>
                    <div class="headerBorder"></div>
                </div>
                <?php if ( have_posts() ) : ?>
                <?php if( is_active_sidebar( 'column' ) ){
                                $i = 8;}
                            else{
                                $i =12;  
                            } ?>
                <div class="col-12 col-md-<?php echo $i; ?> pageBlockItems">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 col-md-6 col-lg-8">
                                <article itemscope itemtype="http://schema.org/Article">
                                    <?php the_content(); ?>
                                </article>
                            </div>    
                        </div>
                    </div>
                </div>
                <?php if( is_active_sidebar( 'column' ) ) : ?>
                               <div class="col-12 col-md-4" itemscope itemtype="http://schema.org/WPSideBar">
                                   <?php dynamic_sidebar( 'column' );  ?> 
                               </div>
                        <?php endif; ?> 
                <?php else: ?>
                    <p><?php echo __('Вибачте, нічого не знайдено...') ?></p>
                <?php endif; ?>
<!--                End of post-->
            </div>
        </div>
    </section>
</main>
</div>
<?php get_footer(); ?>