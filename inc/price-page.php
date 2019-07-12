<?php
/**
 * Template Name: Price page
 *
 */
get_header(); ?>
<main>
    <div id="prices" class="active main__container">
        <div class="container-fluid">
            <div class="row pageBlock">
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
               <?php if( have_rows('price') ) : ?>
                <div id="tab__wrapper" class="price-tabs col-12" itemscope itemtype="http://schema.org/Article">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <?php $i = 1; ?>
                      <?php while ( have_rows('price') ) : the_row(); ?>
                      <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home<?php echo $i; ?>" role="tab" aria-controls="home<?php echo $i; ?>" aria-selected="true"><?php the_sub_field('work'); ?></a>
                      </li>
                      <?php $i++;
                        endwhile; ?>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <?php $i = 1; ?>
                      <?php while ( have_rows('price') ) : the_row(); ?>
                      <div class="tab-pane fade <?php echo ( $i == 1)? 'show active' : ''; ?>" id="home<?php echo $i; ?>" role="tabpanel" aria-labelledby="home-tab">
                                  <?php $count = 1;
                                            $row = get_sub_field('work_child'); ?>
                                   <?php if(!empty($row)) :?>
                                    <table class="table table-hover">
                                          <thead class="thead-light">
                                            <tr>
                                              <th scope="col"><?php echo __('Послуга'); ?></th>
                                              <th scope="col" class="text-center"><?php echo __('Од. виміру'); ?></th>
                                              <th scope="col" class="text-center"><?php echo __('Вартість'); ?></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php foreach( $row as $rows ) : ?>
                                            <tr>
                                              <td><?php echo $rows['cycle_one']; ?></td>
                                              <td class="text-center"><?php echo $rows['cycle_two']; ?></td>
                                              <td class="text-center"><?php echo $rows['cycle_three']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                          </tbody>
                                        </table>   
                                        <?php endif; ?>                        
                      </div>
                      <?php $i++;
                        endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>