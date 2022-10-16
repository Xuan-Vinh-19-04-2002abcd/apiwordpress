<?php
/**
 * Author Portfolio Theme Global Options
 */

Kirki::add_panel( 'author_portfolio_global_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Global Settings', 'author-portfolio' ),
) );

require get_theme_file_path('inc/customizer/themeoptions/header-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/social-links-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/sidebar-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/post-page-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/theme-color-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/blog-and-archive-post-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/copyright-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/footer-settings.php');
require get_theme_file_path('inc/customizer/themeoptions/scroll-top-button-settings.php');


Kirki::add_panel( 'author_portfolio_book_settings_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Books Appearance Settings', 'author-portfolio' ),
) );
require get_theme_file_path('inc/customizer/themeoptions/book-settings.php');