<?php 

function _placeholder_customizer( $wp_customize){

    $wp_customize->add_panel('_placeholder_panel_menu',array(
        'title'=>esc_html__(ucfirst('_placeholder ') .'Options','_placeholder'),
        'description'=>esc_html__(ucfirst('_placeholder ') .'general options setting','_placeholder'),
        
        )
    );
    /** ################## announcements option ################ */
    $wp_customize->add_section('_placeholder_section_announcements', array(
        'title'       => esc_html__( 'Announcements Settings', '_placeholder' ),
        'description' => esc_html__( 'You set the topbar announcements here.', '_placeholder' ),
        'panel' => '_placeholder_panel_menu'
    ));
         // Announcement Text
         $wp_customize->add_setting(
            '_placeholder_settings_announcements',
            array(
                'type'              => 'theme_mod', 
                'default'           => '',
                'sanitize_callback' => 'sanitize_textarea_field'
            )
        );

        $wp_customize->add_control(
            '_placeholder_settings_announcements',
            array(
                'label'       => esc_html__('Annoucement text','_placeholder'),
                'description' => esc_html__('Please, type the announcements here','_placeholder'),
                'section'     => '_placeholder_section_announcements',
                'type'        => 'textarea'
            )
        );

        // Button Text
        $wp_customize->add_setting(
            '_placeholder_settings_announcements_button_text',
            array(
                'type'              => 'theme_mod',
                'default'           => esc_html__('Learn More','_placeholder'),
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            '_placeholder_settings_announcements_button_text',
            array(
                'label'       => esc_html__('Learn more button text','_placeholder'),
                'description' => esc_html__('Please, type button text here','_placeholder'),
                'section'     => '_placeholder_section_announcements',
                'type'        => 'text'
            )
        );

        // Button link
      $wp_customize->add_setting(
          '_placeholder_settings_announcments_link_url',
          array(
              'type'              => 'theme_mod',
              'default'           => '#',
              'sanitize_callback' => 'esc_url_raw'
          )
      );

      $wp_customize->add_control(
          '_placeholder_settings_announcments_link_url',
          array(
              'label'       => esc_html__('CTA button link','_placeholder'),
              'description' => esc_html__('Please, type your cta button link here','_placeholder'),
              'section'     => '_placeholder_section_announcements',
              'type'        => 'url'
          )
      );

    /** ################## header quick links option ################ */
    $wp_customize->add_section('_placeholder_section_quick_links', array(
        'title'       => esc_html__( 'Quick Links Settings', '_placeholder' ),
        'description' => esc_html__( 'You set the topbar announcements here.', '_placeholder' ),
        'panel' => '_placeholder_panel_menu'
    ));

    // Phone Label
    $wp_customize->add_setting(
        '_placeholder_settings_phone_label',
        array(
            'type'              => 'theme_mod',
            'default'           => esc_html__('Call us','_placeholder'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        '_placeholder_settings_phone_label',
        array(
            'label'       => esc_html__('Label for the Phone','_placeholder'),
            'description' => esc_html__('Please, type button text here','_placeholder'),
            'section'     => '_placeholder_section_quick_links',
            'type'        => 'text'
        )
    );

    // Phone number
    $wp_customize->add_setting(
        '_placeholder_settings_phone_number',
        array(
            'type'              => 'theme_mod',
            'default'           => esc_html__('1234567890','_placeholder'),
            'sanitize_callback' => '_placeholder_sanitize_phone_number'
        )
    );

    $wp_customize->add_control(
        '_placeholder_settings_phone_number',
        array(
            'label'       => esc_html__('Phone Number','_placeholder'),
            'description' => esc_html__('Please phone number','_placeholder'),
            'section'     => '_placeholder_section_quick_links',
            'type'        => 'text'
        )
    );
     /** ################## header online requests option ################ */
    
     $wp_customize->add_section('_placeholder_section_online_requests', array(
        'title'       => esc_html__( 'Online Requests Settings', '_placeholder' ),
        'description' => esc_html__( 'You set the online requests CTA\'s here.', '_placeholder' ),
        'panel' => '_placeholder_panel_menu'
    ));
                // Online Pharmacy Label
                $wp_customize->add_setting(
                    '_placeholder_section_online_requests_label',
                    array(
                        'type'              => 'theme_mod',
                        'default'           => esc_html__('Online Pharmacy','_placeholder'),
                        'sanitize_callback' => 'sanitize_text_field'
                    )
                );
            
                $wp_customize->add_control(
                    '_placeholder_section_online_requests_label',
                    array(
                        'label'       => esc_html__('Online Pharmacy CTA Label','_placeholder'),
                        'description' => esc_html__('Please, type label here','_placeholder'),
                        'section'     => '_placeholder_section_online_requests',
                        'type'        => 'text'
                    )
                );

                // Online Pharmacy Link
            $wp_customize->add_setting(
                '_placeholder_section_online_requests_link_url',
                array(
                    'type'              => 'theme_mod',
                    'default'           => '#',
                    'sanitize_callback' => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                '_placeholder_section_online_requests_link_url',
                array(
                    'label'       => esc_html__('Online Pharmacy CTA url','_placeholder'),
                    'description' => esc_html__('Please, type your Online Pharmacy CTA url here','_placeholder'),
                    'section'     => '_placeholder_section_online_requests',
                    'type'        => 'url'
                )
            );

            // Online Appointment Label
                    $wp_customize->add_setting(
                        '_placeholder_section_appointment_requests_label',
                        array(
                            'type'              => 'theme_mod',
                            'default'           => esc_html__('Request an Appointment','_placeholder'),
                            'sanitize_callback' => 'sanitize_text_field'
                        )
                    );

                    $wp_customize->add_control(
                        '_placeholder_section_appointment_requests_label',
                        array(
                            'label'       => esc_html__('Request an Appointment CTA Label','_placeholder'),
                            'description' => esc_html__('Please, type label here','_placeholder'),
                            'section'     => '_placeholder_section_online_requests',
                            'type'        => 'text'
                        )
                    );

                    // Online Requests Link
                $wp_customize->add_setting(
                    '_placeholder_section_appointment_requests_link_url',
                    array(
                        'type'              => 'theme_mod',
                        'default'           => '#',
                        'sanitize_callback' => 'esc_url_raw'
                    )
                );

                $wp_customize->add_control(
                    '_placeholder_section_appointment_requests_link_url',
                    array(
                        'label'       => esc_html__('Online Appointment CTA url','_placeholder'),
                        'description' => esc_html__('Please, type your Online Appointment CTA url here','_placeholder'),
                        'section'     => '_placeholder_section_online_requests',
                        'type'        => 'url'
                    )
                );



}
add_action( 'customize_register', '_placeholder_customizer');

function _placeholder_sanitize_site_announcement_text( $input ) {
    $allowed = array('a' => array(
        'href' => array(),
        'title' => array()
    ));
    return wp_kses($input, $allowed);
}

function _placeholder_sanitize_phone_number($input){
    return preg_replace('/[^0-9\-]/', '', $input);
}