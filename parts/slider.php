<?php if(have_rows('slides')):?>
    <div class="home-slider owl-carousel owl-theme">
        <?php while(have_rows('slides')): the_row();?>
            <div class="item">
                <div class="slide-image">
                   
                    <?php echo wp_get_attachment_image( get_sub_field('image'),'full', false, ['alt'=>'Slide Image: '.esc_html__(get_sub_field('large_header'),'_placeholder')] );?>
                </div>
                <div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4"><?php the_sub_field('small_header');?></h4>
					<h3><?php the_sub_field('large_header');?></h3>
					<a href="<?php the_sub_field('cta_link');?>" class="btn btn-primary"><?php the_sub_field('cta_label');?></a>
				</div>
			</div>
            </div>
        <?php endwhile;?>
    </div>
<?php endif;?>
  <!-- Home Slider Start -->
	<!-- <div class="home-slider owl-carousel owl-theme">
		<div class="item">
			<div class="slide-image">
				<img src="assets/images/slider-img1.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">Top Level</h4>
					<h3>Compassionate Care that you can trust</h3>
					<a href="#" class="btn btn-primary">Meet our Team</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="assets/images/slider-img2.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">We are</h4>
					<h3>accepting new patients</h3>
					<a href="#" class="btn btn-primary">New Client Special</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="assets/images/slider-img3.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">Early detection to</h4>
					<h3>help your pet live a longer & happier life</h3>
					<a href="#" class="btn btn-primary">See Our Wellness Plans</a>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="slide-image">
				<img src="assets/images/slider-img4.jpg" alt="Slide" />
			</div>
			<div class="container">
				<div class="slide-content">
					<h4 class="optinal-h4">veterinary</h4>
					<h3>care for your exotic pet</h3>
					<a href="#" class="btn btn-primary">View Types of Animals We Treat</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Home Slider End -->