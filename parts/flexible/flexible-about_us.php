<section class="about_us">
    <div class="container">
        <div class="flex"> 
            <div class="large-5 medium-6 small-12 image-col">
                <div class="about_us-col"> 
                    <div class="about_us-col-img"> 
                        <?php if($image = get_sub_field('image')): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="about_us-col-img"> 
                        <?php if($image_2 = get_sub_field('image_2')): ?>
                            <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="large-7 medium-6 small-12">
                <div class="about_us-col">
                    <div>
                        <?php if($title = get_sub_field('title')): ?> 
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>

                        <?php if($text = get_sub_field('text')): ?>
                            <h6><?php echo $text; ?></h6> 
                        <?php endif; ?>
                        <div class="link-cont">
                            <?php if($link = get_sub_field('link')): ?>
                                <a class="link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?>
                                    <span></span>
                                </a>
                            <?php endif; ?> 
                        </div>
                        

                    </div>
                    <div class="about_us-col-img-three">
                        
                        <?php if($image_3 = get_sub_field('image_3')): ?>
                            <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>