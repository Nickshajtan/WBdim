<?php
/**
 * Template Name: Header     template file
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <div id="wrapper" class="global__wrapper">
      <?php $header = get_field('group_menu','options'); ?>
       <div class="overlay"></div>
		<div class="burger-block">
			<div class="burger-button">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?php if( !empty( $header['menu_logo'] ) ) : ?>
			<div class="mobile-logo">
				<img src="<?php echo $header['menu_logo']; ?>" alt="Ваш Білий Дім" itemprop="logo">
			</div>
			<?php endif; ?>
			
		</div>
        <header class="desktop" itemscope itemtype="http://schema.org/WPHeader">
            <div class="left_side">
                 <?php if( !empty( $header['menu_logo'] ) ) : ?>
                  <a href="<?php echo home_url(); ?>/" class="logo">
                      <img src="<?php echo $header['menu_logo']; ?>" alt="Ваш Білий Дім" itemprop="logo">
                  </a>
                  <?php endif; ?>
                  <div class="header__contact">
                      <?php $cycle = $header['phone_cycle']; ?>
                      <?php if(!empty($cycle)) : ?>
                      <?php foreach ( $cycle as $cycl ) : ?>
                        <a class="icon tel" href="tel:<?php echo $cycl['phone_hidden']; ?>" itemprop="telephone">
                                <?php echo $cycl['number']; ?>
                        </a>
                      <?php endforeach; ?>
                      <?php endif; ?>
                      <a class="icon tel" href="mailto:<?php echo $header['email']; ?>" itemprop="mail">
                        <?php echo $header['email']; ?>
                      </a>
                  </div>
                 <?php if( has_nav_menu('primary' ) ) : ?>     
                <nav itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <?php 
                            wp_nav_menu( array(
	                           'theme_location'  => 'primary',
	                           'container'       => 'div', 
	                           'container_class' => 'menu', 
	                           'container_id'    => '',
	                           'menu_class'      => 'menu', 
	                           'menu_id'         => '',
	                           'echo'            => true,
	                           'before'          => '',
                               'after'           => '',
                               'link_before'     => '',
                               'link_after'      => '',
	                           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                           'depth'           => 2,
                                ) ); ?>

			    </nav>
                <?php endif; ?>
                <div class="other">
                    <div class="social_links">
                         <?php $cycle = $header['soc_cycle']; ?>
                         <?php if(!empty($cycle)) : ?>
                         <?php foreach ( $cycle as $cycl ) : ?>
                          <a class="social_icon fb" href="<?php echo $cycl['link']; ?>" target="_blank">
                              <img src="<?php echo $cycl['icon']; ?>" alt="" />
                          </a>
                          <?php endforeach; ?> 
                          <?php endif; ?>   
                    </div>
                    <div class="also">
                        <?php if( !empty($header['also']) ){
                                 echo $header['also'];
                        }
                        if( (empty($header['also']) ) && ( is_active_sidebar( 'header' ) )){
                                dynamic_sidebar( 'header' );   
                        } ?>
                    </div>
                </div>
              </div>
        </header>