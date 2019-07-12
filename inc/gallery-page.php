<?php
/**
 * Template Name: Gallery page
 *
 */
get_header(); ?>
<main>
<div id="galery" class="active main__container">
    <div class="container-fluid">
                <div class="galeryBlock row">              
                    <div class="pageBlockHeader galeryHead col-12">
                           <div class="row">
                            <h1 class="col-12 justify-content-center align-items-center d-flex">
                                <span class="justify-content-center align-items-center d-flex">
                                    <?php the_title(); ?>
                                </span>
                            </h1>
                           </div>
                            <div class="headerBorder"></div>
                        </div>
                    <?php if( have_rows('gallery') ): ?>
                    <div class="galeryBody col-12 card-deck" itemscope itemtype="http://schema.org/Article">
                        <div class="row">
                           <?php 
                                if( get_query_var('page') ) {
                                  $page = get_query_var( 'page' );
                                } else {
                                  $page = 1;
                                }
                                $row              = 0;
                                $images_per_page  = 8; // How many images to display on each page
                                $images           = get_field( 'gallery' );
                                $total            = count( $images );
                                $pages            = ceil( $total / $images_per_page );
                                $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
                                $max              = ( $min + $images_per_page ) - 1; 
                           ?>
                           <?php while ( have_rows('gallery') ) : the_row();
                            $image = get_sub_field('image'); 
                            $row++; 
                            // Ignore this image if $row is lower than $min
                            if($row < $min) { continue; }

                            // Stop loop completely if $row is higher than $max
                            if($row > $max) { break; } ?>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 galeryWrapper">
                                <div class="galeryItem card">
                                   <?php if( !empty($image) ): ?>
                                        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                            <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                    <?php endif; ?>
                                    <div class="card-body">
                                         <h4><?php the_sub_field('header'); ?></h4>  
                                         <p><?php the_sub_field('text'); ?></p> 
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php echo paginate_links( array(
                                'base' => get_permalink() . '%#%' . '/',
                                'format' => '?page=%#%',
                                'current' => $page,
                                'total' => $pages,
                                'end_size' => 1,
                                'prev_next' => true,
                                'type' => 'list'
                              ) );
                              ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>    
    </div> 
</div>     
</main>             
<?php get_footer(); ?>