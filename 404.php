<?php
/**
 * Template Name: 404 page template file
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
                        <h1 itemprop="headline"><span><?php echo __('Помилка 404'); ?></span></h1>
                    </center>
                    <div class="headerBorder"></div>
                </div>
                <div class="col-12 pageBlockItems">
                    <div class="row">
                        <div class="col-12">
                           <?php if( is_active_sidebar( 'column' ) ){
                                $i = 8;}
                            else{
                                $i =12;  
                            } ?>
                            <div class="col-12 col-md-<?php echo $i; ?>">
                                <article itemscope itemtype="http://schema.org/Article">
                                    <center>
                                        <?php echo __('На жаль, такої сторінки не існує'); ?>
                                    </center>
                                </article>
                            </div>  
                        <?php if( is_active_sidebar( 'column' ) ) : ?>
                               <div class="col-12 col-md-4">
                                   <?php dynamic_sidebar( 'column' );  ?> 
                               </div>
                        <?php endif; ?> 
                        </div>
                    </div>
                </div>
<!--                End of post-->
            </div>
        </div>
    </section>
</main>
</div>
<?php get_footer(); ?>