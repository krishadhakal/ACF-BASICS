<div class="testimonials-section">
    <?php
    $testimonials_group = get_field('testimonials_group');
    if ($testimonials_group && !empty($testimonials_group['testimonials'])): ?>

        <div class="swiper">
            <div class="swiper-wrapper">

                <!-- fetching the data -->
                <?php foreach ($testimonials_group['testimonials'] as $testimonial):
                    $name = $testimonial['name'];
                    $position = $testimonial['position'];
                    $testimonial_content = $testimonial['testimonials_content'];
                    $image = $testimonial['profile_image'];
                ?>

                    <div class="swiper-slide">
                       <div class="testimonials-item">
                       <?php if ($image): ?>
                            <img src="<?php echo $image['url']; ?>" class="profile-img" alt="<?php echo $name; ?>">
                        <?php endif; ?>

                        <!-- quote icons -->
                        <i class="bi bi-quote quote-icon"></i>
                        <i class="bi bi-quote quote-icon1"></i> 

                        <div class="testimonial-content">
                            <blockquote><?php echo $testimonial_content; ?></blockquote>
                            <h2 class="testimonial-name"><?php echo $name; ?></h2>
                            <div class="testimonial-info d-flex justify-content-between">
                                <p class="position"><?php echo $position; ?></p>

                                <!-- icons for rating -->
                                <div class="rating d-flex">
                                    <i class="bi bi-star-fill star"></i>
                                    <i class="bi bi-star-fill star"></i>
                                    <i class="bi bi-star-fill star"></i>
                                    <i class="bi bi-star-half star"></i>
                                    <i class="bi bi-star star"></i>
                                    </div>
                            </div>

                        </div>
                       </div>
                    </div>

                    
                <?php endforeach; ?>
                
            </div>
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    <?php endif; ?>
</div>
