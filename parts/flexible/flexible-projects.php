<section class="projects"> 
        <div class="container center">
            <div>
                <?php if($title = get_sub_field('title')): ?> 
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="projects__img">

            <?php if($projects_img = get_sub_field('projects_img')): ?>
                <img src="<?php echo $projects_img['url']; ?>" alt="<?php echo $projects_img['alt']; ?>"> 
            <?php endif; ?>   

        </div>
        <div class="container projects__link center">

            <?php if($link = get_sub_field('link')): ?>
                <a class="link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?>
                </a>
            <?php endif; ?>    

        </div>



    
</section>