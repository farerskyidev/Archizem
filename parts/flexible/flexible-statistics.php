<section class="statistics white-smoke"> 
        <div class="container center">
            <div>
                <?php if($title = get_sub_field('title')): ?> 
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="statistics__wrapper">
            <div class="statistics__img">
                <?php if($statistics_img = get_sub_field('statistics_img')): ?>
                    <img src="<?php echo $statistics_img['url']; ?>" alt="<?php echo $statistics_img['alt']; ?>">
                <?php endif; ?>   
            </div>  
            <div class="statistics__items-wrap">
                <div class="statistics__items">
                    <?php $statistics = get_sub_field('statistics'); ?>
                    <?php foreach ($statistics as $area):?>
                        <div class="large-6 medium-12 small-12">
                            <div class="statistics__item">
                                <div>
                                    <p class="statistics__title"><?php echo $area['title'] ?></p> 
                                    <div class="statistics__subtitle"><span><?php echo $area['subtitle'] ?></span></div>
                                </div>
                                
                                
                                <p><?php echo $area['text'] ?></p> 
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="link-cont">
                    <?php if($link = get_sub_field('link')): ?>
                        <a class="link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?> 
                            <span></span>
                        </a>
                    <?php endif; ?> 
                </div>
            </div>
        </div>



    
</section>