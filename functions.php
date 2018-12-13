<?php


function nuron_theme_files(){
   wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css',array(), '1.0','all'); 
   wp_enqueue_style( 'fontawosome', get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css',array(), '1.0','all');
   wp_enqueue_style( 'owlcarousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(), '1.0','all');
   wp_enqueue_style( 'bootsnav', get_template_directory_uri().'/assets/css/bootsnav.css',array(), '1.0','all');
   wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',array(), '1.0','all');

    wp_enqueue_style( 'main_Stylesheet', get_stylesheet_uri() );



   wp_enqueue_script('jquery');

   // wp_enqueue_script('jquery', get_template_directory_uri().'assets/bootstrap/js/bootstrap.min.js'); 

   wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootsnav', get_template_directory_uri().'/assets/js/bootsnav.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owlcarousel_js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wowmin', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '1.0', true); 
   
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true);


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'nuron_theme_files' );

add_filter( 'widget_text' , 'do_shortcode' );


function neuron_theme_Supports(){
	// loadinf theme textdomain
	load_textdomain( 'language_setup', get_template_directory_uri().'/language' );
	// generate feed links
	add_theme_support( 'automatic-feed-links' );
    // adding title tags
    add_theme_support( 'title_tag' );
    // post thumbnail support
    add_theme_support( 'post-thumbnails' );
     // menu register
    register_nav_menus( array(
         'menu-1'=>esc_html__( 'primary', 'language_setup' ) 
    ) );


    // custom image size enabling for my theme
    // for retina support we doubled all element here ,as we know retina display does it make double as allways

    add_image_size( 'nuron_blog_thumbnail', 740, 520, true );

    // html support perpose
    add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
    // Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}

add_action( 'after_setup_theme', 'neuron_theme_Supports' );


function nuron_custom_post_register(){
	
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'slides' ),
				'singular_name' => __( 'slide' )
			),
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail' , 'page-attributes'),
			'public' => false,
			'show_ui'=> true
		)
	);
	register_post_type( 'feature',
		array(
			'labels' => array(
				'name' => __( 'features' ),
				'singular_name' => __( 'featurer' )
			),
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail' , 'page-attributes'),
			'public' => false,
			'show_ui'=> true
		)
	);
	register_post_type( 'service',
		array(
			'labels' => array(
				'name' => __( 'services' ),
				'singular_name' => __( 'service' )
			),
			'supports' => array('title', 'editor', 'thumbnail' , 'page-attributes' ,'custom-fields',),
			'public' => false,
			'show_ui'=> true
		)
	);
	register_post_type( 'work',
		array(
			'labels' => array(
				'name' => __( 'works' ),
				'singular_name' => __( 'work' )
			),
			'supports' => array('title', 'editor', 'thumbnail' , 'page-attributes' ,),
			'public' => true,
		)
	);
}
	
add_action( 'init', 'nuron_custom_post_register' );


// matbory kore nije widget register 
function neurom_widget_register() {

	register_sidebar(array(
		  		'name' => 'Footer one',
		  		'description' => 'first footer widget here',
		  		'id' => 'footer1',
		  		'before_widget' => '<div id="%1$s" class="widget  %2$s">  ',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				
				));
		register_sidebar(array(
		  		'name' => 'Footer two',
		  		'description' => 'second footer widget here',
		  		'id' => 'footer2',
		  		'before_widget' => '<div id="%1$s" class="widget  %2$s">  ',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				
				));
		register_sidebar(array(
		  		'name' => 'Footer three',
		  		'description' => 'second footer three widget here',
		  		'id' => 'footer3',
		  		'before_widget' => '<div id="%1$s" class="widget  %2$s">  ',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				
				));
		register_sidebar(array(
		  		'name' => 'Footer four',
		  		'description' => 'four footer three widget here',
		  		'id' => 'footer4',
		  		'before_widget' => '<div id="%1$s" class="widget  %2$s">  ',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
				
				));
	}

add_action('widgets_init', 'neurom_widget_register');



function read_more($limit) {
	$post_content = explode(" ", get_the_content() );
	$less_content = array_slice($post_content, 0, $limit);
	echo implode(' ', $less_content);
	}
add_filter( 'excerpt_length', 'read_more', 999 );




// registe shortcode_
function thumb_posts_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();

        $list .= '
        <li>
			'.get_the_post_thumbnail($idd ,'thumbnail').'
			<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
			<span>'.get_the_date('d F Y', $idd).'</span>
			
		</li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_posts', 'thumb_posts_list_shortcode');  

// including csframeworks
require get_template_directory().'/includes/csFramework/cs-framework.php';









// code from twenteenseventeen theme post we used it and modified for our own instances

function nuron_categorized_blog() {
	$category_count = get_transient( 'nuron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'nuron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}




if ( ! function_exists( 'nuron_entry_footer' ) ) :


function nuron_entry_footer() {

	/* translators: used between list items, there is a space after the comma */
	$separate_meta = __( ', ', 'nuron' );

	// Get Categories for posts.
	$categories_list = get_the_category_list( $separate_meta );
	$tag_list = get_the_category_list('', $separate_meta );



	// We don't want to output .entry-footer if it will be empty, so make sure its not.
	if ( (  nuron_categorized_blog() && $categories_list )  || get_edit_post_link() ) {

		echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if  ( $categories_list && nuron_categorized_blog() )  {
					echo '<span class="cat-tags-links">';

						// Make sure there's more than one category before displaying.
						if ( $categories_list && nuron_categorized_blog() ) {
							echo '<span class="cat-links"><span class="screen-reader-text">' . __( 'Categories', 'nuron' ) . '</span>' . $categories_list . '</span>';
						}

					

					echo '</span>';
				}
			}


		echo '</footer> <!-- .entry-footer -->';
	}
}
endif;




