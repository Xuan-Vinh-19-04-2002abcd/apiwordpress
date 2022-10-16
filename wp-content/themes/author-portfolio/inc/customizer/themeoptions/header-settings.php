<?php
Kirki::add_section( 'author_portfolio_theme_header_settings', array(
    'title'          => esc_html__( 'Header Settings', 'author-portfolio' ),
    'panel'          => 'author_portfolio_global_panel',
) );

Kirki::add_field( 'author_portfolio_config', array(
    'type'        => 'custom',
    'settings'    => 'unlock_header_style_field',
    'label'       => '',
    'section'     => 'author_portfolio_theme_header_settings',
    'default'     => '<a target="_blank" href="'.esc_url( 'https://rswpthemes.com/author-portfolio-pro-wordpress-theme/' ).'">'.esc_html__('Upgrade To Pro To Unlock All Features', 'author-portfolio').'</a>',
) );
