<?php
/**
 * Template Name: Contacts page
 *
 */
get_header(); ?>
<main>
    <div id="contacts" class="active main__container">
        <div class="container-fluid">
            <div class="row pageBlock">
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
            </div>
            <div class="row">
              <div class="col-12">
               <section>
                <div class="col-12">
                    <div class="row">
                   <?php $first = get_field('left');
                    if( !empty($first)) : ?>
                    <div class="pageBlockSection col-12 col-md-6 col-lg-6 col-xl-5">
                        <div class="contactInfo contact__list" itemscope itemtype="https://schema.org/Organization">
                         <div class="col-12">
                          <?php $cycle = $first['phone_cycle']; ?>
                          <?php if(!empty( $cycle )) : 
                            foreach( $cycle as $cycl ) : ?>
                              <p>
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUGSURBVGhD7VlpaFxVFM64L6i44r6L4gbqD0XUiMnMe21CwPJm7p1EKRStiIZm3pvpQpH5p38ERcG9KFarCFbrj6rUFq0i+aGowQ1X6ta6ELUxWrep37n3e0mezIuJyczcQD54vOQ75713vnvPPXeZtnnMcWR4n5PI5EK9BNeHXqRrXqjeWlDqPY+2uYGeSs9BuUg/BQG7J17gvupa2Xso3dzGwnL+aGl9E3iohrORDtqri/fLReplinmYru7CL6vTEOjnVoR+r2Og91SajA0Cf2HvdJF2D/7yvuO9UH9GEVvrpRDsNxkhofrayRTz+/sORuoMMcjNQSnYn6Z/I+N0iqGl77fBqaHOFflDSNfFxBTLRmoBaTeA1t2FwGpTLa8Qssz0XqS/kApHuvVAdfpbApPqRGpSVKvVPdB7r8ozuN9HuvWIB3lnpXgGqf+EVwnORM/8hudqKNFXkW4tvEg9I0L8qKBJTQlogOXyHO4vkmot4rI63Urkh8XLzHOheodUa5GNglM4TkamM3jRk3fZHlEPkGo9JD3YujeSmhS5UnA6Js7f0Yt/eQP6HNKtB1p3kRWiP7lo6dK9SacCgtcbf5eqlkBKKgJ7m8HdTLou/FKxnX4/Z6NrjiLtDmSmlgDROzvSxooVrN6gkBWk3QMC3GLF6HtIJdBZ0cdy/tjtl/XVpN1DLiyehQH8KwKt+aHqIJ0AxlG/ERuqHzBWTiDtHhBgaAPV21JSLAOf5yhmsLvafQB5t5DP5/dE/pu1FMQ8TjoBWSXDxyz9cd8gz9DkFmSegIif2Ooh6QQWRr0nIQ2/Mz6RWgPKzdMWBNglM76Z9MqFTtIJeJXCheOC9d2gHBUTqluYPt9P3MNPBMReigIwyt67nbRzkPOtpylmqDssHkE+AekxWbJQzB2g3OsZe841tqcfTJssZUJl6RbRsnRxT4zfHxyJAD+mmM1pu0kM+ivRMzspZm2+mt+HprqQlXc2KlyBpc6BpBoPmfxwfckgN7RX2/eiKQHsGC+G37D10y/VO9DwS4VLUBxeMQ0jfvBHAyyBqTm9KFvcsZKLOSZt/pCDDNi32UDVB2j1c4WHqBPRCOvA16wAPYr/37V+poFeEB/zkkbDD/UFYyU30k+mpQ+PXwfjgPH3I/EYwjWCXlgdrwrkaBb2b40vVtW5sr4edON7R1IjTh+I2pi2TDHnxqG6l8FLCmEnqtZ4A33H0GUMUhEh+IlxX73JW6ZOprlxkPTBx7bzo1snO9yTlTJ8npXeJJUK8YXYHXzvToiXXWtje8dseccPvt+crY0W3nsY3vmYvJfXFqlwNDcG5gA80u/bD6pP0aLn0zRjIG17MGa+kXdLkWm4GJvf6nW23giuAk0zhpz8o4GeN2JCdSvpxsHv9/dF6z1IMTX5qGyNaZ4R8L5V5r12+dMcyOBEC/5hW1BvkuU+Tf8Lsr3Ge0xRafovAF5FXR5/XOYFLyxeB3ralUfmKIyT12xv6I2km4uOldceDjHj8wJmbT8KzqZ5KsjgOVO5pDJKJSPfGiDNFsWzNlr1T4h7qKsUHEdzGiDCHskiVYed+WncVLVI3wkRZs+Cv3ehh9ZJCsKcSDk56YTfo1aEHpVFKE3uQOYBBIh0scWAwW6HqLW4V71S8YZ4fQafH2WJz0fdhK1EajWC/igWlLiwcp7NibUpkIUh0mcxBNwGAfLD7Krp/Lwxj3nMOtra/gHsIMGLBdO9yQAAAABJRU5ErkJggg==">
                                    <a href="tel:<?php echo $cycl['phone_second']; ?>"  itemprop="telephone"><?php echo $cycl['phone_first']; ?></a>
                              </p>
                           <?php endforeach; endif; ?>
                           <?php $cycle = $first['email_cycle']; ?>
                           <?php if(!empty( $cycle )) : 
                            foreach( $cycle as $cycl ) : ?>
                              <p>
                                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANNSURBVGhD7ZhfiA1RHMfv+h/yXynyIhGJSOLBTfbOzNoltjv3nNnFUuyD2uw9Z5aVh3nBC0/+lrwLD6RE4Wkj5UlCkn+1RZSI2MLy/c3eu427Z3fvn7lr7u386tNtzvmec37fmXPOnLkxHTp06KisqO9sml7pNHgNE2Om5H+qgLPVY8SQvEdRUWngibjOWpjpVlRWBMj9udnOl/oLfpNrzzEk61IJo4wh+DWrrXmKbyIhnc30u6q1dawp+ClVg6iBp/ALv4eQdg3lXnvQnk+LvRfOvGyhkU7tNAX7EWwYJTBzPppuqpZypZuP69MoD+xagl2Hs6kkMDtSKw3B3vTXRQb20L/7iPp0ci7K7mXq/t1+aeFYMrmEhA3CmYXrO8H6/wlmzYW41zKBckvI1HpcvwvUK98jX+G8kRrYtj0a18dBb6B+RMHN7DGFs4fyoTBc3o61/DNHN+gLsRcdHCUjfmPBGMpgUKktH4K/tWRqNeUQ32dPxlO4qNQNYSQDu2mkkzOoo7p00zKUvRioKQ9I+jZNbxq7tsNZCFOPVboMwxkh2EvsZMupw/j+lmnYJW6odaGBXZQdy84GGNgCPit0QfIxAgT7hkfMqWPP80ah7AgIfd3gJn2xXL6Nxsmsz3zHydNIFsFOxL34GBrIEM5WGlipKwJMpSdmR3IR9b2xc8dM9H1LpRuEAo0Qgt212pKzM2YWY+o9U+oKAFPpEi1m6tN/h0n+WqUbgiKMENhNaEAamM46MHNVqRsObKNIWqKbvlOFTO0u8lRRpBECA9JxhhJA1OCuHga/lVol7L2VduLU2GqzxqPtObUuL0owkgUHTTrzUEIJyeqQ0CelLgA09+mI4Zs40DwPN+WBSlcAIRgBWJhd9CngJ+ayBUj0kUpHoO6M7dnjSIsnugFT64NKVyDhGCGQUHdC8jWUYEJun5T7Fkb995yp6NIaCWpKIDwjBJLtwVlobyZZ+oyWfrKCv0q4TSuojHYnTKUrqvYlEK6RfgQ7TwvYNyPYuuwxp2+75k8H6EunTEYILODsgqbALtUY5gs0hzIaAf43g2C7YOIkrsv5KVBeIyOINhI1tJGooY1EDW0kalSREZxQL1c6wX8idejQoUPHCEYs9hd1mvPVdAc18gAAAABJRU5ErkJggg==">
                                 <a href="mailto:<?php echo $cycl['email']; ?>"  itemprop="mail"><?php echo $cycl['email']; ?></a>   
                              </p>
                           <?php endforeach; endif; ?>
                           <?php $cycle = $first['address_cycle']; ?>
                           <?php if(!empty( $cycle )) : 
                            foreach( $cycle as $cycl ) : ?>
                              <p>
                                 <img src="data:image/png;base64,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">
                                 <span class="marks" itemprop="addressLocality"><?php echo $cycl['address']; ?></span>
                              </p>
                           <?php endforeach; endif; ?>
                           </div>
                        </div>
                      </div>
                      <?php endif; ?>
                      <?php $second = get_field('right'); ?>
                      <div class="pageBlockSection col-12 col-md-6 col-lg-6 col-xl-7">
                       <?php $time = get_field('work_time'); ?>
                       <div class="row">
                           <div class="contactInfo col-12 col-md-8 col-lg-6  time__work">
                               <h3 class="d-md-none schedule"><?php echo __('ГРАФІК РОБОТИ'); ?></h3>
                               <p class="days" itemprop="days"><?php echo $time['days_work']; ?></p>
                               <p class="time" itemprop="time"><?php echo $time['time']; ?></p>
                               <p class="days" itemprop="days"><?php echo $time['lazy_days']; ?></p>
                               <p class="time" itemprop="time"><?php echo $time['lazy_time']; ?></p>
                           </div>
                           <div class="d-none d-md-block col-md-4 col-lg-6">
                              <img class="clock" src="data:image/png;base64,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">
                           </div>    
                          </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="pageBlockSection section__form col-12">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                   <?php if(!empty( $first['image'] )) : ?>
                                    <div class="contact__image col-12">
                                       <img src="<?php echo $first['image']; ?>" alt="callcenter">
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-md-6 col-lg-8">
                                   <?php if( !empty($second)) : ?>
                                                               <div class="contactFeild pageBlock">
                        <div class="pageBlockHeader">
                            <h3><span>Напишіть нам</span></h3>
                        </div>
                          <form  method="post">
                           <div class="form-group form-row">
                                <div class="col-12 col-md-3">
                                    <label for="name"><?php echo $second['form_1']; ?></label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="text" name="name">
                                </div>
                           </div>
                            <div class="form-group form-row">
                               <div class="col-12 col-md-3">
                                    <label for="e-mail"><?php echo $second['form_2']; ?></label>
                               </div>
                               <div class="col-12 col-md-9">
                                    <input class="form-control" type="email" name="e-mail">
                               </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col-12 col-md-3">
                                    <label for="header"><?php echo $second['form_3']; ?></label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" type="text" name="header">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label for="textQuestion"><?php echo $second['form_4']; ?></label>
                                <textarea class="form-control" name="textQuestion" cols="40" rows="5"></textarea>
                                <input class="btn" type="submit" name="submit" value="<?php echo $second['send']; ?>">
                            </div>
                          </form>
                        </div>
                                   <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                </section>
            </div>
            </div>
            <div class="row map__wrapper">
                <div class="col-12 map__wrapper">
                    <section class="map">
                    <?php $google_group = get_field('map');?>
                       <?php if( !empty($google_group['html_iframe']) ) : ?>
                         <div id="map" class="map_first">
                             <?php echo $google_group['html_iframe']; ?>
                         </div>
                       <?php elseif( !empty($google_group['google_map']) ) : ?>
                           <div class="acf-map" id="acf-map">	
                                <div class="marker" style="width: 100%; height: 350px;" data-lat="<?php echo $google_group['js_map']['lat']; ?>" data-lng="<?php echo $google_group['js_map']['lng']; ?>"></div>
                            </div>
                       <?php else : ?>           
                              <div id="map" class="map_first"></div>
                              <script src="../js/custom-map.js"></script>
                       <?php endif; ?>      
                </section>
                </div>
            </div>
        </div>        
    </div>
</main>
<?php $key = get_field('api'); ?>
<?php if( !empty($key) ) : ?>
    <script src="<?php echo $key; ?>"></script>
<?php else : ?>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
<?php endif; ?> 
<?php get_footer(); ?>