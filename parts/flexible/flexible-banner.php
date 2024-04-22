<section class="banner"> 
    <?php if($background = get_sub_field('background')): ?>
        <div class="banner__inner" style="background-image: url('<?php echo $background['url']; ?>')">
            <div class="container">
                <div class="banner__inner-wrapper">
                    <?php if($text = get_sub_field('text')): ?>
                        <h1><?php echo $text; ?></h1>
                    <?php endif; ?>
                    <div class="button-cont"> 
                        <?php if($banner_button = get_sub_field('banner_button')): ?> 
                            <a class="button" href="<?php echo $banner_button['url'] ?>"><?php echo $banner_button['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>     
        </div>
    <?php endif; ?>
</section>
