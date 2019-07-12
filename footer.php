        <?php $footer = get_field('footer','options'); ?>
        <footer class="main__container" itemscope itemtype="http://schema.org/WPFooter">
           <div class="container">
            <div class="row">
                <div id="footer" class="col-12">
            <?php if(  (!empty($footer['footer_first']) ) || ( is_active_sidebar( 'footer1' )) ) : ?>
                    <div class="footer_section  justify-content-center align-items-center d-flex">
                        <?php if(( empty($footer['footer_first'] ) ) && ( is_active_sidebar( 'footer1' ) )){
                                dynamic_sidebar( 'footer1' );   
                        } ?>
                        <?php if(( !empty($footer['footer_first'] ) ) && ( !(is_active_sidebar( 'footer1' ) ) )){
                                echo $footer['footer_first'];   
                        } ?>
                    </div>
            <?php endif; ?>
            <?php if(  (!empty($footer['footer_second']) ) || ( is_active_sidebar( 'footer1' )) ) : ?>
                    <div class="footer_section  justify-content-center align-items-center d-flex">
                        <?php if(( empty($footer['footer_second'] ) ) && ( is_active_sidebar( 'footer2' ) )){
                                dynamic_sidebar( 'footer2' );   
                        } ?>
                        <?php if(( !empty($footer['footer_second'] ) ) && ( !(is_active_sidebar( 'footer2' ) ) )){
                                echo $footer['footer_second'];   
                        } ?>
                    </div>
            <?php endif; ?>
            <?php if(  (!empty($footer['footer_third']) ) || ( is_active_sidebar( 'footer3' )) ) : ?>
                    <div class="footer_section  justify-content-center align-items-center d-flex">
                        <?php if(( empty($footer['footer_third'] ) ) && ( is_active_sidebar( 'footer3' ) )){
                                dynamic_sidebar( 'footer3' );   
                        } ?>
                        <?php if(( !empty($footer['footer_third'] ) ) && ( !(is_active_sidebar( 'footer3' ) ) )){
                                echo $footer['footer_third'];   
                        } ?>
                    </div>
            <?php endif; ?>
                  </div>
                 </div>
                 <div class="row">
                     <div class="col-12  justify-content-center align-items-center d-flex" itemprop="copyrightYear">
                         &copy; 2018-<?php echo date('Y');?> Усі права захищені. Created by HCC
                     </div>
                 </div>
             </div>
        </footer>
        
          <div id="danke" class="modal fade modal-submit">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="close-span">×</span>
        </button>
         <div class="col-12 align-items-center justify-content-center text-center">
                    <div class="mobile-logo">
                       <?php $header = get_field('group_menu','options'); ?>
                        <img src="<?php echo $header['menu_logo']; ?>" alt="">
                    </div>
         </div>
        </div>
      <div class="modal-body">
                         <h4 class="modal-danke-text align-items-center justify-content-center text-center">
                             <?php echo __('Дякуємо за Ваш лист!'); ?>
                         </h4>
                  </div>
                </div>
              </div>
            </div>
        
        <div class="overlay"></div>
        <div id="youtube-popup"></div>
        <?php wp_footer(); ?>
        </div>
    </body>
</html>