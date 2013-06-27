<?php
get_header();
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/

	if( is_home() || is_archive() ) {

?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/

	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

                        <div class="social-button-container clearfix">

                            <div class="SocialCustomMenu">
                            <span class="share_top_text">Partagez ce contenu sur </span><a class="scmTwitter" href="http://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?> via @vjousse "title="Tweet this!">Twitter</a>
                            <a class="scmFacebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?> - <?php echo wp_get_shortlink();?> "title="Share on Facebook!">Facebook</a>
                            <a class="scmGoogleplus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"onclick="javascript:window.open(this.href,
                            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false; "title="Share on Google +!">Google +</a>
                            <a class="scmPinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?> - <?php echo wp_get_shortlink();?> "title="Share on Pinterest!">Pinterest</a></a>
                            </div>
                        </div>

                        <p style="padding-top: 15px"><strong>Abonnez-vous à la Newsletter</strong> pour être automatiquement tenu au courant des nouveautés !</p>
                        <?php $widgetNL = new WYSIJA_NL_Widget(true);
                        echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>

						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/

	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>

						<div class="the-content">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

<?php get_footer(); ?>
