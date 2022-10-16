<?php
Kirki::add_section( 'books_slider_settings', array(
    'title'          => esc_html__( 'Books Slider Settings', 'author-portfolio' ),
    'description'          => esc_html__( 'This slider will appear on the blog page below of header.', 'author-portfolio' ),
    'panel'          => 'author_portfolio_book_settings_panel',
) );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'switch',
    'settings'    => 'books_slider_on_off',
    'label'       => esc_html__( 'Books Slider Slider Show Hide', 'author-portfolio' ),
    'section'     => 'books_slider_settings',
    'default'     => '0',
    'choices'     => [
        'on'  => esc_html__( 'Show', 'author-portfolio' ),
        'off' => esc_html__( 'Hide', 'author-portfolio' ),
    ],
] );
Kirki::add_field( 'author_portfolio_config', [
	'type'        => 'number',
	'settings'    => 'books_per_page',
	'label'       => esc_html__( 'Post Per Page', 'author-portfolio' ),
	'section'     => 'books_slider_settings',
	'default'    => 5,
] );
Kirki::add_field( 'author_portfolio_config', [
	'type'        => 'number',
	'settings'    => 'slide_to_show',
	'label'       => esc_html__( 'Slide To Show', 'author-portfolio' ),
	'section'     => 'books_slider_settings',
	'default'    => 4,
] );
