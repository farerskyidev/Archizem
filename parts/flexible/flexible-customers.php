<section class="customers white-smoke">    
    <div class="container">           
        <div class="flex"> 
            <div class="large-6 medium-12 small-12">
                <div class="customers__img"> 
                    <?php if($customers_img = get_sub_field('customers_img')): ?>
                        <img src="<?php echo $customers_img['url']; ?>" alt="<?php echo $customers_img['alt']; ?>">
                    <?php endif; ?>   
                </div>  
            </div> 
            <div class="large-6 medium-12 small-12"> 
                <div class="customers__wrapper"> 
                    
                    <div class="customers__text"> 
                        <?php if($title = get_sub_field('title')): ?> 
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if($text = get_sub_field('text')): ?> 
                            <h6><?php echo $text; ?></h6>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper"> 
                            <?php $customers = get_sub_field('customers'); ?>
                            <?php $chunks = array_chunk($customers, 12); ?>
                            <?php foreach ($chunks as $chunk):?>
                                <div class="swiper-slide">
                                    <div class="customers__items">
                                        <?php foreach ($chunk as $area):?>
                                            <div class="large-4"> 
                                                <div class="customers__item">
                                                    <img src="<?php echo $area['brand']['url'];?>" alt="<?php echo $area['brand']['alt'];?>">
                                                </div>
                                            </div>
                                        <?php endforeach; ?> 
                                    </div> 
                                </div>  
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</section>