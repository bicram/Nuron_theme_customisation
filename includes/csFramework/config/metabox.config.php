<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_work_meta',
  'title'     => 'work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_mata_section_one',
      'fields' => array(
 
        array(
          'id'    => 'subtitle',
          'type'  => 'text',
          'title' => 'sub title',
           'default'=>'fuck',
          'desc'  =>'add subtitle/catagory here' ,
        ),array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => 'big preview image',
          'desc'  =>'upload big preview image' ,
        ),
        array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'link text',
          'default'=>'Visit Website',
          'desc'   =>'For your fucking Understanding I added a defaiult value to this field you can change it ,if you like'
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
        array(
          'id'              => 'informations',
          'type'            => 'group',
          'title'           => 'work informations',
          'button_title'    => 'Add New ',
          'accordion_title' => 'Add New informations ',
          'fields'          => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'information title',
            ),
            array(
              'id'    => 'value',
              'type'  => 'text',
              'title' => 'information Value',
            ),
            
          ),
        ),

        

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
