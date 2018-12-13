<?php
/*
Template Name:Homepage  template
*/

$enable_homepage_promoarea=cs_get_option('enable_homepage_promoarea');
$homepage_beautiful_enable=cs_get_option('homepage_beautiful_enable');
$homepage_beautiful_image=cs_get_option('homepage_beautiful_image');
$homepage_beautiful_image_array=wp_get_attachment_image_src( cs_get_option('homepage_beautiful_image'),'large' );

if(!empty($homepage_beautiful_image)){
$homepage_beautiful_image=$homepage_beautiful_image_array[0];
}
else{
   $homepage_beautiful_image=''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
}



 get_header();?>
	<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
			<section class="slider-area">


<!-- it should be noted that dont echo any $varible(); like this,do it <?php echo $variable;?>  -->


			<?php
			global $post;
			$args = array( 'posts_per_page' =>5, 'post_type'=> 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				 
				<?php 
				   $btn_text= get_post_meta($post->ID, 'btn_text', true); 
				   $btn_link= get_post_meta($post->ID, 'btn_link', true); 
				?>
				 	<div style="background-image: url(<?php the_post_thumbnail_url(); ?>);" class="homepage-slider">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="container">
											<div class="row">
												<div class="col-sm-7">
													<div class="slider-content">
														<h1><?php the_title(); ?></h1>
														<p><?php the_content(); ?></p>
													
														<a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
				    
				<?php endforeach; wp_reset_query(); ?>
		
		
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<!-- templating kore ei jaygar code nai giyechi -->
	<!-- if promo area becomes true then show it otherwise plz dont -->
	<?php if ($enable_homepage_promoarea ==true) {
		 get_template_part('content/promo');
	}?>
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<?php if($homepage_beautiful_enable==1):?>

		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo cs_get_option('homepage_beautiful_title');?></h2>
							<?php echo wpautop(cs_get_option('homepage_beautiful_content'));?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $homepage_beautiful_image;  ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	<?php endif;?>
	
		<?php get_template_part('content/service')?>
		
<?php get_footer();?>