<?php get_header();?>

<?php 
     while(have_posts()):the_post();
       $work_meta= get_post_meta(get_the_ID(),'neuron_work_meta',true);

       // work meta condition validation 
       if (get_post_meta(get_the_ID(),'neuron_work_meta',true)) {
       	 $work_meta= get_post_meta(get_the_ID(),'neuron_work_meta',true);
       }else{
       	$work_meta=array();
       }


       
       if(array_key_exists('subtitle', $work_meta)){
       	$sub_title=$work_meta['subtitle'];
        }
	   else{
	   	$sub_title='';
	   }
	   
	   if(array_key_exists('big_preview', $work_meta)){
       	$big_preview=$work_meta['big_preview'];
        }
	   else{
	   	$big_preview='';
	   }
	   
	   if(array_key_exists('link_text', $work_meta)){
       	$link_text=$work_meta['link_text'];
        }
	   else{
	   	$link_text='Visit Website';
	   }
	   
	   if(array_key_exists('link', $work_meta)){
       	$link=$work_meta['link'];
        }
	   else{
	   	$link='';
	   }
	   
	   if(array_key_exists('informations', $work_meta)){
       	$informations=$work_meta['informations'];
        }
	   else{
	   	$informations='';
	   }
?>

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

		<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">

                       <?php 
                        
                       $big_psortfolio_img=wp_get_attachment_image_src( $big_preview, 'large' );
                       ?>
                       <?php if(!empty(	$big_preview)):?>
                       	<!-- image na thakle jate error na dekhay atleast thummbnail -pay ei jonnoo condition validation korlam -->
                       <img class="img-responsive" src="<?php echo $big_psortfolio_img[0];?>" alt="">
                       <?php else:?>
                       	<?php the_post_thumbnail('large');?>
                       <?php endif;?>
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
             
			     			<a href=""><?php echo $sub_title; ?></a>
						</header>
						<div class="portfolio-details-panel">
							<?php the_content( ); ?>
							
							<ul class="portfolio-meta">
							    <?php
							     
							    if (!empty($informations)): 
							    	// here we added conditons through if/else because if there is no data given it may causes error.
							    foreach($informations as $information) :?>
                                   <li><span> <?php echo $information['title'];?> </span><?php echo $information['value'];?></li>
							    <?php endforeach; endif;?>
								<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<?php if(!empty($link)): ?>
						<a class="btn btn-primary" href="<?php echo $link;?>"><?php echo $link_text;?></a>
					     <?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php endwhile;?>
<?php get_footer();?>


