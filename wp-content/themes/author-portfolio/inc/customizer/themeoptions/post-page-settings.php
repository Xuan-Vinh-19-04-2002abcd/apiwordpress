<?php
/**
 * Blog single content customization
 */
Kirki::add_section( 'post_page_section', array(
    'title'          => esc_html__( 'Post Page Settings', 'author-portfolio' ),
    'description'    => esc_html__( 'Customize The Looks of Post Page', 'author-portfolio' ),
    'panel'          => 'author_portfolio_global_panel',
) );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_category',
    'label'       => esc_html__( 'Show Post Category', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_author',
    'label'       => esc_html__( 'Show Post Author', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_thumbnail',
    'label'       => esc_html__( 'Show Post Thumbnail', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_title',
    'label'       => esc_html__( 'Show Post Title', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_date',
    'label'       => esc_html__( 'Show Post Date', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_comments',
    'label'       => esc_html__( 'Show Post Comments', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_single_post_tags',
    'label'       => esc_html__( 'Show Post Tags', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',

] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author_box',
    'label'       => esc_html__( 'Show Post Author Box', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_recommend_posts',
    'label'       => esc_html__( 'Show Recommend Posts', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_navigation',
    'label'       => esc_html__( 'Show Post Navigation', 'author-portfolio' ),
    'section'     => 'post_page_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'custom',
    'settings'    => 'single_post_title_typography_sep',
    'section'     => 'post_page_section',
    'default'         => '<h3 style="padding:10px 10px; background:#fff; margin:0;">' . __( 'Post Title typography', 'author-portfolio' ) . '</h3>',
] );