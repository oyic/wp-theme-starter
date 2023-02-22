<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="u-skip-link" href="#content"><?php esc_attr_e('Skip to content','_themename'); ?></a>
    <?php if($announce_text = get_theme_mod('_theme_settings_announcements','')):?>
        <div class="covid-message">
            <div class="container">
                <div class="covid-text">
                    <?php echo _placeholder_sanitize_site_announcement_text($announce_text);?>
                </div>
                <div class="covid-link">
                    <a class="learn-more" href="<?= get_theme_mod('_theme_settings_announcments_link_url','#');?>" title='Announcements'> <?= get_theme_mod('_theme_settings_announcements_button_text','Learn More');?> <span class="icon-arrow-right"></span></a>
                </div>
                <a href="javascript:void(0);" class="icon-close removeit"></a>
            </div>
        </div>
        
    <?php endif;?>
    <header role="banner" class="header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-logo">
                <?php 
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else{
                            ?>
                                <a href="<?php echo home_url( '/' ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                            <?php
                        }
                        ?>
				</div>
				<div class="header-right">
					<div class="header-content">
                       
						<div class="call-us"><span><?= get_theme_mod('_theme_settings_phone_label','Call us today') ;?></span>
                     
                        <a href="tel:<?=str_replace('-','',get_theme_mod('_theme_settings_phone_number',''));?>"><?= get_theme_mod('_theme_settings_phone_number','');?></a>
                    </div>
						<div class="online-request">
							<a href="<?= get_theme_mod('_theme_section_online_requests_link_url','#');?>" class="btn btn-secondary"><?= get_theme_mod('_theme_section_online_requests_label','');?></a>
							<a href="<?= get_theme_mod('_theme_section_appointment_requests_link_url','#');?>" class="btn btn-primary"><?= get_theme_mod('_theme_section_appointment_requests_label','');?></a>
						</div>
					</div>
					<div class="header-bottom">
						<nav class="navbar navbar-expand-lg navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="menu-text">Menu</span>
							</button>
                            <?php wp_nav_menu( array( 
                                'theme_location' => '_theme_main_menu',
                                'depth' => 3,
                                'container' => 'div',
                                'container_class'      => 'collapse navbar-collapse',
		                        'container_id'         => 'navbarSupportedContent',
                                'menu_class'=>'navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker(),
                                 )); ?>
						</nav>
						<div class="header-search">
							<a href="javascript:void(0);" class="icon-search"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="searchbar">
			<div class="container">
				<div class="searchbar-inner">
					<input type="text" class="form-control" placeholder="Search here..." />
					<button type="submit" class="btn search-btn icon-search"></button>
				</div>
			</div>
		</div>

		<div class="mobile-bottom-header">
			<div class="call-us">
				<span><?= get_theme_mod('_theme_settings_phone_label','Call us today') ;?></span>

				<a href="tel:<?=str_replace('-','',get_theme_mod('_theme_settings_phone_number',''));?>">
                <?= get_theme_mod('_theme_settings_phone_number','');?></a>
			</div>
		</div>
	</header>
   
