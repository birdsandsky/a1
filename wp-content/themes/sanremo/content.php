<?php
/**
 *
 * The template used for displaying content single
 *
 * @package Sanremo
 */
?>
					<article  id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>

							
							<div class="blog-post-image">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php echo get_the_post_thumbnail( get_the_ID(), 'sanremo-thumbnail' ); ?>
									</a>
								<?php endif; ?>
							</div>
						<div class="blog-post-body">
							<div class="post-cats"><?php the_category( ' ' ); ?></div>
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

							<!-- <div class="post-date"><span>Posted by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></span></div>-->

							<?php if ( is_search() ) : // Only display Excerpts for Search
								the_excerpt();
								else :

								if ( get_the_excerpt() != "" ) :
									the_excerpt();
								else :
									the_content();
								endif;
							endif; // endif is_search
							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sanremo' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sanremo' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
							?>

							<?php if( ! is_single() ) : ?>
								<div class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading', 'sanremo' ); ?></a></div>
							<?php endif; ?>
							<div class="post-meta">
								<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
									<span><?php comments_popup_link( esc_html__( 'Leave a comment', 'sanremo' ), esc_html__( '1 Comment', 'sanremo' ), esc_html__( '% Comments', 'sanremo' ) ); ?></span>
								<?php else: ?>
									<span class="post-comments-off"><?php esc_html_e( 'Comments Off', 'sanremo' ); ?></span>
								<?php endif; ?>
								<span><?php echo get_the_date(); ?></span>
							</div>
						</div>
					</article>
