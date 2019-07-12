<?php
/**
 * Template Name: Main template file
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
                    <center><h1><span><?php echo __('Записи'); ?></span></h1></center>
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
                       <?php while ( have_posts() ) : the_post(); ?>
                        <article itemscope itemtype="http://schema.org/Article">
                            <div class="col-12">
                           <?php if ( has_post_thumbnail()) : ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                   <?php 
                                    $default_attr = array(
                                        'src' => $src,
                                        'class' => "attachment-$size attachment-post-standard",
                                        'alt' => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
                                    );
                                    the_post_thumbnail('blog-thumb', $default_attr); ?>
                            </div>
                            <?php endif; ?>
                            
                            <div class="col-12 col-md-6 col-lg-8">
                                <h4 class="post-title" itemprop="headline"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink() ?>" class="readmore">Читати Далі</a>
                            </div>    
                        </div>
                        </article>
                        <?php endwhile; ?>
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