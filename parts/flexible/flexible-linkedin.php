<section class="linkedin"> 

    <div class="container">
        <div class="linkedin__wrapp"> 
            <div>
                <?php if($text = get_sub_field('text')): ?> 
                    <h3><?php echo $text; ?></h3> 
                <?php endif; ?>

                <?php if($logo = get_sub_field('logo')): ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"> 
                <?php endif; ?>  
            </div>
            
            
            <?php if($link = get_sub_field('link')): ?>
                <a class="button white-btn" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?>
                </a>
            <?php endif; ?> 
        </div>
    </div>


</section>