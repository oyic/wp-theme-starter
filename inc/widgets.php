<?php
function _placeholder_sidebar_widgets(){ 
$columns = [3,3,3,3];
foreach ($columns as $i => $column) {
    register_sidebar( array(
        'id' => 'footer-widget-' . ($i + 1),
        'name' => sprintf(esc_html__( 'Footer Widgets Column %s', '_placeholder' ), $i +1),
        'description' => esc_html__( 'Footer widgets', '_placeholder' ),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ) );
}
}

add_action('widgets_init', '_placeholder_sidebar_widgets');