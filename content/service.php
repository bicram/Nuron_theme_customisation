<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding <?php if(is_page( 11 )) :?><?php else: ?> darker-bg <h1>no name</h1> <?php endif;?>">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range fuck of Servicesend</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<!-- single service -->
                    
                    <?php
					global $post;
					$args = array( 'posts_per_page' => 6, 'post_type'=> 'service', 'orderby' => 'menu_order', 'order' => 'ASC' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) : setup_postdata($post); ?>
		

				
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							
							<?php the_post_thumbnail( 'thumbnail', array('class'=>'hvr-buzz-out'
							) );?>

							<h3><a href="<?php echo get_post_meta( $post->ID, 'link', true );?>"><?php the_title();?></a></h3>
							<?php the_content();?>
						</div>
					</div>
			        <?php endforeach; wp_reset_query(); ?>


				
				</div>
			</div>
		</section><!-- end services section -->