<?php
if (!class_exists('Rswpbs')) {
    return;
}
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Author Portfolio
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="single-book-wrapper">
			<div class="container">
				<?php
				while(have_posts()) :
					the_post();
					get_template_part('template-parts/books-showcase/book', 'single');
				endwhile;
				?>
				<div class="rswpthemes-book-review-section">
					<div class="row">
						<div class="col-md-12">
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
<?php

get_footer();
?>