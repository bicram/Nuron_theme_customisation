<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'neuron-theme-optios',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by bikram sarker</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------


// logo add kora section

$options[]      = array(
  'name'        => 'global',
  'title'       => 'global options page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

                // begin: a field
                array(
                  'id'      => 'logos',
                  'type'    => 'gallery',
                  'title'   => 'company logooe',
                  'desc'   => 'upload logoes here',
                ),

    ), // end: fields
);


// header er upor blue part user controle deoar jonno ei section
$options[]      = array(
  'name'        => 'headertop',
  'title'       => 'header top blue section',
  'icon'        => 'fa fa-car',

  // begin: fields
  'fields'      => array(

            // begin: a field
           array(
              'id'      => 'geader_top_area_switcher',
              'type'    => 'switcher',
              'title'   => 'enable header top area',
              'desc'   => 'if you wanna header top area ,selesect yes',
              'default'   => true,
              
            ),
           array(
                    'id'              => 'header_links',
                    'type'            => 'group',
                    'title'           => 'header left links',
                    'button_title'    => 'Add New ',
                    'accordion_title' => 'Add New  link',
                    'fields'          => array(
                      array(
                        'id'    => 'linktext',
                        'type'  => 'text',
                        'title' => 'link text titile',
                      ),
                      array(
                        'id'    => 'icon',
                        'type'  => 'icon',
                        'title' => 'Add new icon for this section',
                      ),
                      array(
                        'id'    => 'link',
                        'type'  => 'text',
                        'title' => 'link',
                      ),
                      array(
                        'id'    => 'link_target',
                        'type'  => 'select',
                        'title' => 'link target',
                        'options'=> array(
                          '_self' =>'open in same tab',
                          '_blank'=>'open in new tab'
                           )

                      )
                    ),
                    'dependency' => array( 'geader_top_area_switcher', '==', 'true' ) 


                  ),

              ),
              

);
// user controle secton ends here
$options[]      = array(
  'name'        => 'social_links_section',
  'title'       => 'social options',
  'icon'        => 'fa fa-twitter',
    'fields'      => array(

                array(
                    'id'              => 'socials',
                    'type'            => 'group',
                    'title'           => 'sodial links',
                    'button_title'    => 'Add New ',
                    'accordion_title' => 'Add New  link',
                    'fields'          => array(
                     
                      array(
                        'id'    => 'icon',
                        'type'  => 'icon',
                        'title' => 'Add new icon for this section',
                      ),
                      array(
                        'id'    => 'link',
                        'type'  => 'text',
                        'title' => 'link',
                      ),
                      array(
                        'id'    => 'link_target',
                        'type'  => 'select',
                        'title' => 'link target',
                        'default' => '_blank',
                        'options'=> array(
                          '_self' =>'open in same tab',
                          '_blank'=>'open in new tab'
                           )

                      )
                    ),

                  ),

              ),

);


// homepage option ta ke niche dilam...........before it was in up
$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Homepage',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

            // begin: a field
           array(
              'id'      => 'enable_homepage_promoarea',
              'type'    => 'switcher',
              'title'   => 'enable promo area title',
              'desc'   => 'if you wanna enable promo area ,selesect yes',
              'default'   => true,
              
            ),
           
           array(
              'id'      => 'promo_title',
              'type'    => 'text',
              'title'   => 'Promo area title',
              'desc'   => 'Promo area title here pleasee',
              'default'   => 'Welcome to the Neuron Finance',
              'dependency' => array( 'enable_homepage_promoarea', '==', 'true' ) 
               
            ),
            array(
              'id'      => 'promo_coontent',
              'type'    => 'textarea',
              'title'   => 'Promo area coontent',
              'desc'   => 'Promo area coontent here pleasee',
              'default'   => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
              'dependency' => array( 'enable_homepage_promoarea', '==', 'true' ) 

            ),

              array(
              'id'      => 'homepage_beautiful_enable',
              'type'    => 'switcher',
              'title'   => 'enable promo area title',
              'desc'   => 'if you wanna hompage promo area ,selesect yes',
              'default'   => true,
              
            ),
            array(
              'id'      => 'homepage_beautiful_title',
              'type'    => 'text',
              'title'   => 'homepage_beautiful_agency title',
              'desc'   => 'homepage_beautiful_agency title here pleasee',
              'default'   => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
              'dependency' => array( 'homepage_beautiful_enable', '==', 'true' ) 


            ),
             array(
              'id'      => 'homepage_beautiful_content',
              'type'    => 'textarea',
              'title'   => 'homepage_beautiful_agency content',
              'desc'   => 'homepage_beautiful_agency content here pleasee',
              'dependency' => array( 'homepage_beautiful_enable', '==', 'true' ) 


            ),
            
             array(
              'id'      => 'homepage_beautiful_image',
              'type'    => 'image',
              'title'   => 'homepage_beautiful_agency image',
              'desc'   => 'homepage_beautiful_agency image here pleasee',
              'dependency' => array( 'homepage_beautiful_enable', '==', 'true' ) 


            ),
), );
// homepage option shesh


$options[]      = array(
  'name'        => 'service',
  'title'       => 'services',
  'icon'        => 'fa fa-car',

  // begin: fields
  'fields'      => array(

                // begin: a field
                array(
                  'id'      => 'service',
                  'type'    => 'text',
                  'title'   => 'service area title',
                  'desc'   => 'services title here pleasee',
                ),
                
// we used swither here,on/offf switch perpose ,make dependency on it ,now if we use on or offf still not hiding options ,in order to make work in this section we need to intregete with some conditional tags
                

              ), // end: fields
);

$options[]      = array(
  'name'        => 'about_us_pag_er_content_show',
  'title'       => 'about us content section',
  'icon'        => 'fa fa-facebook',

  // begin: fields
// template about.php er code is going here
  'fields'      => array(

                // begin: a field
                array(
                  'id'      => 'finance_agency_switcher',
                  'type'    => 'switcher',
                  'title'   => 'finance agency switcher',
                  'desc'   => 'if you wanna show finance section 1 ,selesect yes',
                  'default'   => true,
                ),
                array(
                  'id'      => 'finance_agency_switcher_promo_area',
                  'type'    => 'switcher',
                  'title'   => 'finance_agency_switcher_promo_area',
                  'desc'   => 'if you wanna show finance_agency_switcher_promo_area ,selesect yes',
                  'default'   => true,
                ),

            // for accordion section 
                 array(
                    'id'              => 'faqs',
                    'type'            => 'group',
                    'title'           => 'faqs',
                    'button_title'    => 'Add New ',
                    'accordion_title' => 'Add New Field for the accordion',
                    'fields'          => array(
                      array(
                        'id'    => 'title',
                        'type'  => 'text',
                        'title' => 'FAQ titile',
                      ),
                      array(
                        'id'    => 'content',
                        'type'  => 'textarea',
                        'title' => 'Add new content',
                      ),
                    ),
                  ),

              ), // end: fields
);




CSFramework::instance( $settings, $options );
