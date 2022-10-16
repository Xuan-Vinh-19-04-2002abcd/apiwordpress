<?php
/**
 * Getting Started Help Notic
 **/
function author_portfolio_general_admin_notice(){

      $pro_msg = esc_html__('Upgrade To Pro', 'author-portfolio');
       $msg = sprintf('<div data-dismissible="disable-done-notice-forever" class="notice notice-info" >
              <h3>%1$s</h3>
              <p>%2$s</p><p>
              <a class="author-portfolio-btn-get-started button button-primary button-hero author-portfolio-button-padding" href="#" data-name="" data-slug="">%3$s</a>
              <a href="%6$s" class="button">%7$s</a>
              <a href="%4$s" target="new" class="button button-highlight" style="background-color: #d9ff78; color: #000; border-color: #d9ff78;">%5$s</a>
              <a href="?author_portfolio_notice_dismissed" style="text-decoration: none; float: right;" >%8$s</a>
              </p></div>',
              esc_html__('Get Most out of the theme','author-portfolio'),
              esc_html__('Congratulations! You have successfully activated Author Portfolio theme. Go to Appearance->Customize->Global Settings. you will find all options in one panel.','author-portfolio'),
              esc_html__('Getting Started with Demos...', 'author-portfolio'),
              esc_url('https://rswpthemes.com/author-portfolio-pro-wordpress-theme/'),
              $pro_msg,
              esc_url(admin_url()."customize.php"),
              esc_html__('Go to Customizer', 'author-portfolio'),
              esc_html__('Dismiss Notice', 'author-portfolio'));
       echo wp_kses_post($msg);
}

if ( isset( $_GET['author_portfolio_notice_dismissed'] ) ){
          //set notice value false
          update_option('author_portfolio_help_notice', 'notice_author_portfolio_dismissed');
}

$author_portfolio_help_notice = get_option('author_portfolio_help_notice', '');

if (($author_portfolio_help_notice != 'notice_author_portfolio_dismissed' || $author_portfolio_help_notice === '') ){
          add_action('admin_notices', 'author_portfolio_general_admin_notice');
}