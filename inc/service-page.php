<?php
/**
 * Template Name: Service page
 *
 */
get_header(); ?>
<div id="content_container" class="main__container">
   <?php if( have_rows('group_first') ): ?> 
    <section id="slider-full" class="servise__slider">
        <div id="slider">
          <?php while ( have_rows('group_first') ) : the_row(); ?>
           <div class="slider_item design_slide">
             <img src="<?php the_sub_field('slider_im'); ?>" alt="design slide" style="width:100%;" data-lazy="<?php the_sub_field('slider_im'); ?>">
             <div class="slider_topic_section design_slide_topic justify-content-center align-items-center d-flex">
                <div class="container justify-content-center align-items-center d-flex">
                    <div class="slider_topic">
                    <div class="justify-content-center align-items-center d-flex"><h5><span><?php the_sub_field('slider_title'); ?></span></h5></div>
                    <div class="justify-content-center align-items-center d-flex"><span itemprop="description"><?php the_sub_field('slider_text'); ?></span></div>
                  </div>
                </div>
             </div>
           </div>
          <?php endwhile; ?>
        </div>
    </section>
    <div id="anchor" class="service__anchor">
        <div id="anchor__wrapper">
            <a id="rectangle__anchor" href="#content">
               <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzJweCIgdmVyc2lvbj0iMS4xIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNjQgNjQiPgogIDxnPgogICAgPHBhdGggZmlsbD0iIzQ3NzM1OCIgZD0ibTMwLjcxMSw2My4zMDZjMC4zOTMsMC4zOTMgMC45MDcsMC41ODkgMS40MjIsMC41ODkgMC41MTQsMCAxLjAyOC0wLjE5NiAxLjQyMi0wLjU4OWwyMS4yMzctMjEuMjM5YzAuNzg1LTAuNzg2IDAuNzg1LTIuMDU5IDAtMi44NDQtMC43ODYtMC43ODUtMi4wNTktMC43ODUtMi44NDQsMGwtMTcuODA0LDE3LjgwNnYtNTQuNzgxYzAtMS4xMS0wLjg5OS0yLjAxMS0yLjAxMS0yLjAxMXMtMi4wMTEsMC45LTIuMDExLDIuMDExdjU0Ljc4MWwtMTcuODA4LTE3LjgwNmMtMC43ODUtMC43ODUtMi4wNTgtMC43ODUtMi44NDMsMC0wLjc4NiwwLjc4NS0wLjc4NiwyLjA1OCAwLDIuODQ0bDIxLjI0LDIxLjIzOXoiLz4KICA8L2c+Cjwvc3ZnPgo=" />
            </a>
            <style type="text/css">div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzJweCIgdmVyc2lvbj0iMS4xIiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNjQgNjQiPgogIDxnPgogICAgPHBhdGggZmlsbD0iIzQ3NzM1OCIgZD0ibTMwLjcxMSw2My4zMDZjMC4zOTMsMC4zOTMgMC45MDcsMC41ODkgMS40MjIsMC41ODkgMC41MTQsMCAxLjAyOC0wLjE5NiAxLjQyMi0wLjU4OWwyMS4yMzctMjEuMjM5YzAuNzg1LTAuNzg2IDAuNzg1LTIuMDU5IDAtMi44NDQtMC43ODYtMC43ODUtMi4wNTktMC43ODUtMi44NDQsMGwtMTcuODA0LDE3LjgwNnYtNTQuNzgxYzAtMS4xMS0wLjg5OS0yLjAxMS0yLjAxMS0yLjAxMXMtMi4wMTEsMC45LTIuMDExLDIuMDExdjU0Ljc4MWwtMTcuODA4LTE3LjgwNmMtMC43ODUtMC43ODUtMi4wNTgtMC43ODUtMi44NDMsMC0wLjc4NiwwLjc4NS0wLjc4NiwyLjA1OCAwLDIuODQ0bDIxLjI0LDIxLjIzOXoiLz4KICA8L2c+Cjwvc3ZnPgo=)}</style>
        </div>
    </div>
    <?php endif; ?>
    <div id="content" itemscope itemtype="http://schema.org/Article">
       <div id="homePage" class="active">
          <?php if( have_rows('group_second_cycle') ) : ?>  
          <section>
                <div class="container-fluid pageBlock">
                    <div class="row">
                        <div class="pageBlockHeader col-12">
                           <div class="row">
                            <h1 class="col-12 justify-content-center align-items-center d-flex">
                                <span class="justify-content-center align-items-center d-flex">
                                    <?php the_title(); ?>
                                </span>
                            </h1>
                           </div>
                            <div class="headerBorder"></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <?php if( have_rows('group_third') ): ?> 
            <section>
               <div class="container-fluid pageBlock">
                    <div class="row pageBlockItems">
                <?php while ( have_rows('group_third') ) : the_row(); ?>
                   <?php $count = 0; ?>
                    <?php if( get_row_layout() == 'image' ): ?>
                        <div class="col-12 col-md-6 pageBlockSection section__image revealator-slideup revealator-once">
                            <div class="backImage">
                                <a href="<?php the_sub_field('third_image'); ?>" data-fancybox="design-<?php echo $count; ?>">
                                    <img itemscope="" itemtype="https://schema.org/ImageObject" src="<?php the_sub_field('third_image'); ?>" alt="дизайн">
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'text' ): ?>
                        <div class="col-12 col-md-6 pageBlockSection revealator-slideup revealator-once">
                            <div class="blockText">
                                       <div class="pageBlockHeader">
                                <div class="row">
                                    <h4 class="col-12 justify-content-center align-items-center d-flex"><span><?php the_sub_field('third_title'); ?></span></h4>
                                </div>
                                <div class="headerBorder"></div>
                            </div>
                                    <p><?php the_sub_field('third_text'); ?></p>  
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'accordion' ): ?>
                        <div class="col-12 col-md-6 pageBlockSection revealator-slideup revealator-once">
                            <div class="pageBlockHeader">
                                <div class="row">
                                    <h4 class="col-12 justify-content-center align-items-center d-flex"><span><?php the_sub_field('third_a_title'); ?></span></h4>
                                </div>
                                <div class="headerBorder"></div>
                            </div>
                            <?php if( have_rows('third_a_cycle') ):
                            $counter = 1; ?>
                            <div id="accordion">
                            <?php while ( have_rows('third_a_cycle') ) : the_row(); ?>
                               <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
                                    <h3 class="accordeonPanelHead"><?php the_sub_field('third_a_header'); ?></h3>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEZSURBVGhD7Y/LCcJQEEWz041agY25TAEWYCn24s4uxI0bm5DEE3gXAhI1/wncA0OSyXsz92TGGGOMMca0pizLdVEUq/QZDvLt0ut3kHhQN2qfWmEgU069qFNqNcOhC9YlzzsVRoYslYQ4pHYzHNpS10gyZKhLHFP7NxwOI8PubhKCS7PLsLOfhODybDLsGkZCMGRyGXYMKyEYNpkMs8eREAwdXYaZ40oIho8mw6xpJARLBpdhxrQSgmWDyXB3HgnB0t4y3JlXQrC8swxnY0gIQrSW4UwsCUGYDfWXDP9iSghC/ZShF1tCEK5RhvdlSAhCfshQy5IQhK3LPKv0ieVICELXZSqWJyEIX8mcqTy1jDHGGGOMMT3JsjdbLZiy9vhGbAAAAABJRU5ErkJggg==">
                                </button>
                                <?php if( have_rows('cycle_cycle') ): ?>
                                <div id="collapse<?php echo $counter; ?>" class="collapse accordeonBody" aria-labelledby="heading<?php echo $counter; ?>" data-parent="#accordion">
                                <ul class="accordeonPanelSlideList">
                                    <?php while ( have_rows('cycle_cycle') ) : the_row(); ?>
                                        <li><?php the_sub_field('third_a_cycle_one'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                                </div>
                               <?php endif; ?>
                               <?php $counter++; ?>
                            <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( get_row_layout() == 'birds' ): ?>
                     <div class="col-12 col-md-6 pageBlockSection">
                            <div class="pageBlockHeader">
                                <div class="row">
                                    <h4 class="col-12 justify-content-center align-items-center d-flex"><span><?php the_sub_field('third_b_title'); ?></span></h4>
                                </div>
                                <div class="headerBorder"></div>
                            </div>
                            <?php if( have_rows('third_b_cycle') ): ?>
                                <ul class="BirdsList">
                                <?php while ( have_rows('third_b_cycle') ) : the_row(); ?>
                                        <li><?php the_sub_field('third_b_text'); ?></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                     <?php endif; ?>
                     <?php if( get_row_layout() == 'birds_full' ): ?>
                     <div class="col-12 col-md-12 pageBlockSection">
                           <div class="row">
                               <div class="pageBlockHeader">
                                <div class="row">
                                    <h4 class="col-12 justify-content-center align-items-center d-flex"><span><?php the_sub_field('third_b_title'); ?></span></h4>
                                </div>
                                <div class="headerBorder"></div>
                            </div>
                           </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <?php if( have_rows('third_b_cycle') ): ?>
                                        <ul class="BirdsList">
                                        <?php while ( have_rows('third_b_cycle') ) : the_row(); ?>
                                                <li><?php the_sub_field('third_b_text'); ?></li>
                                        <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-md-6">
                                    <?php if( have_rows('third_b_cycle_second') ): ?>
                                        <ul class="BirdsList">
                                        <?php while ( have_rows('third_b_cycle_second') ) : the_row(); ?>
                                                <li><?php the_sub_field('third_b_text'); ?></li>
                                        <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                     <?php endif; ?>
                      <?php if( get_row_layout() == 'service' ): ?>
                         <div class="pageBlockHeader col-12">
                           <div class="row">
                            <h1 class="col-12 justify-content-center align-items-center d-flex">
                                <span class="justify-content-center align-items-center d-flex">
                                    <?php the_field('group_second_title'); ?>
                                </span>
                            </h1>
                           </div>
                            <div class="headerBorder"></div>
                        </div>
                        <div class="pageBlockItems col-12">
                          <div class="row">
                           <?php while ( have_rows('group_second_cycle') ) : the_row(); ?>
                                <a itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" href="<?php the_sub_field('cycle_link'); ?>" class="itemBlock col-12 col-md-6 col-lg-4">
                                  <img src="<?php the_sub_field('cycle_image'); ?>" alt="Перелік послуг" />
                                  <h2><?php the_sub_field('cycle_title'); ?></h2>
                                  <p>
                                       <?php the_sub_field('cycle_text'); ?>
                                  </p>
                                </a>
                            <?php endwhile; ?>
                            </div>
                        </div>
                     <?php endif; ?>
                     <?php if( get_row_layout() == 'video' ): ?>
                         <div class="col-12 col-md-6 pageBlockSection section__image">
                            <div class="backImage">
                               <a href="#" data-link="<?php the_sub_field('video_link'); ?>" tabindex="0" class="youtube-pop">
                                    <?php $img = get_sub_field('third_video_image'); ?>
                                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/yotube-min.png" alt="Play" class="youtube-icon">
                               </a>
                            </div>
                        </div>
                     <?php endif; ?> 
                <?php endwhile; ?>
                   </div>
                </div>
                <?php $count++; ?>
            </section>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>