<?php
/*Blog Page Settings*/

Kirki::add_section( 'blog_and_archive_post_section', array(
    'title'          => esc_html__( 'Blog & Archive Post Settings', 'author-portfolio' ),
    'panel'          => 'author_portfolio_global_panel',
) );

Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'switch',
    'settings'    => 'active_masonry_layout',
    'label'       => esc_html__( 'Activate Masonry Layout', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
    'choices' => [
        'on'  => esc_html__( 'Activate', 'author-portfolio' ),
        'off' => esc_html__( 'Deactivate', 'author-portfolio' )
    ]
] );

Kirki::add_field( 'rs_personal_blog_config', array(
    'type'        => 'custom',
    'settings'    => 'sep_after_post_column',
    'label'       => '',
    'section'     => 'blog_and_archive_post_section',
    'default'     => '<hr>',
) );

Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_category',
    'label'       => esc_html__( 'Show Post Category', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_title',
    'label'       => esc_html__( 'Show Post Title', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_author',
    'label'       => esc_html__( 'Show Post Author', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );

Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_thumbnail',
    'label'       => esc_html__( 'Thumbnail  On//Off', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_excerpt',
    'label'       => esc_html__( 'Show Post Excerpt', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'number',
    'settings'    => 'post_loop_excerpt_limit',
    'label'       => esc_html__( 'Post Excerpt Limit', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => 42,
    'choices'     => [
        'min'  => 0,
        'max'  => 400,
        'step' => 1,
    ],
    'active_callback' => [
        [
            'setting'  => 'show_post_excerpt',
            'operator' => '==',
            'value'    => '1',
        ],
    ],
] );
Kirki::add_field( 'author_portfolio_config', [
    'type'        => 'toggle',
    'settings'    => 'show_post_date',
    'label'       => esc_html__( 'Show Post Date', 'author-portfolio' ),
    'section'     => 'blog_and_archive_post_section',
    'default'     => '1',
] );
