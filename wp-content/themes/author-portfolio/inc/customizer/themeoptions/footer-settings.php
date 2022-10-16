<?php
Kirki::add_section( 'footer_section', array(
    'title'          => esc_html__( 'Footer Section', 'author-portfolio' ),
    'panel'          => 'author_portfolio_global_panel',
) );

Kirki::add_field( 'author_portfolio_config', [
	'type'        => 'select',
	'settings'    => 'footer_layout',
	'label'       => esc_html__( 'Footer Layout', 'author-portfolio' ),
	'section'     => 'footer_section',
	'default'    => 'two',
	'choices' => [
			'one' => __( 'Footer Layout One', 'author-portfolio' ),
			'two' => __( 'Footer Layout Two', 'author-portfolio' ),
		],
] );