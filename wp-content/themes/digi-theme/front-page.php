<?php
/* Template Name: Home */
get_header();
?>
<section class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="posts-block">
					<div class="row">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 10,
							'paged'          => $paged,
							'orderby'        => 'date',
							'order'          => 'DESC',
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post(); ?>
								<div class="col-md-6">
									<div class="post">
										<div class="post-top">
											<?php if (has_post_thumbnail()) : ?>
												<div class="post-thumbnail">
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('full'); // You can change 'thumbnail' to other sizes like 'medium', 'large', or custom size ?>
													</a>
												</div>
											<?php endif; ?>
											<div class="post-categories">
												<?php
												$categories = get_the_category();
												foreach ($categories as $category) {
													echo '<a class="post-cat" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
												}
												?>
											</div>
											<div class="post-content">
												<h2 class="list-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
											<div class="post-ex">
												<?php echo excerpt(15); ?>
											</div>
										</div>
										<div class="button-container">
											<a href="<?php the_permalink(); ?>" class="bordered-button">Continue Reading</a>
										</div>
									</div>
								</div>
								<?php
							}
							// Pagination
							echo '<div class="pagination">';
							echo paginate_links(array(
								'total'     => $query->max_num_pages,
								'current'   => max(1, get_query_var('paged')),
								'prev_text' => '&laquo; Previous',
								'next_text' => 'Next &raquo;',
							));
							echo '</div>';

							wp_reset_postdata();  // Reset post data to the main loop
						} else {
							echo 'No posts found.';
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">

			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>