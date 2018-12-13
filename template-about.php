<?php
/**
 * Template Name: About us
 *
 */





// i donno what the fuck these code does but I know it fuckin works.......
// so am afraid of delete these part..........
// copied from the homepage -----home template date:12/12/18


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











$finance_agency_switcher=cs_get_option('finance_agency_switcher');
$finance_agency_switcher_promo_area=cs_get_option('finance_agency_switcher_promo_area');



 get_header();?>
      <?php while(have_posts()):the_post();?>
       <section  <?php if(has_post_thumbnail()): ?> style="background-image: url(<?php the_post_thumbnail_url('large');?>);" <?php endif; ?> class="page-title" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title();?></h2>
							<p><a href="<?php echo site_url();?>">Home</a> / <a href=""><?php the_title();?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
      <?php endwhile;?>


	<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
	<!-- <?php if($finance_agency_switcher==1):?>
		<section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- block text -->
						<div class="block-text">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
    <?php endif;?> -->


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



<!-- content show hobe ki hobena eijonno -->
		<?php if($finance_agency_switcher_promo_area==true){
			get_template_part( 'content/promo' );    
	       }?>

	<!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
		<section class="accordian-section section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="accorian-item">

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<!-- accordion item-1 -->
                              
                             <!--  <pre> <?php echo var_dump(cs_get_option('faqs'))?></pre> -->

                             <?php 
                             $faqs=cs_get_option('faqs');
                             $faq_no=0;
                             foreach ($faqs as $faq):                                  	
                             $faq_no++;
 

                             if ($faq_no==1) {
                             	$ariaexpanded ='true';
                             	$inclass='in';
                             }
                             else{
                             	$ariaexpanded='false';
                             	$inclass='';
                             }
                             ?>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading-<?php echo $faq_no; ?>">
										<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no;?>" aria-expanded="<?php echo $ariaexpanded;?>" aria-controls="collaps-<?php echo $faq_no;?>">
										<?php echo $faq['title'];?>
										</a>
										</h4>
									</div>
									<div id="collapse-<?php echo $faq_no;?>" class="panel-collapse collapse <?php echo $inclass; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no;?>">
										<div class="panel-body">
											<?php echo wpautop($faq['content']);?>
										</div>
									</div>
								</div>
								
								<?php endforeach;?>
							
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<!-- accordian right text block -->
						<div class="accordian-right-content">
							<h2>Know More About Us</h2>
							<p>Intrinsicly synergism end-to-end results after robust models. Enthusiastically initiate wireless solutions via leading-edge users. Phosfluorescently repurpose world-class networks whereas bleeding-edge communities. Intrinsicly generate just in time infomediaries with resource maximizing deliverables. Credibly disintermediate collaborative ideas through visionary methods of empowerment.</p>
							<p>Globally reintermediate team building best practices with mission-critical "outside the box" thinking. Efficiently mesh synergistic manufactured products rather than turnkey e-commerce. Globally drive.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end accordian section -->
<?php get_footer();?>


