<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'ieee-theme-options',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'IEEE Theme Options <small>by Said Llamas</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
//                General  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => 'General',
  'icon'        => 'fa fa-cog',

  // begin: fields
  'fields'      => array(

    // beging a field: favicon
    array(
      'id'      => 'website_favicon',
      'type'    => 'upload',
      'title'   => 'Favicon',
      'desc'    => 'Tamaño recomendado 32px x 32px',
      'default' =>  get_template_directory_uri(). '/favicon.ico',
    ),
    //end a field
    // beging a field: color-primary
    array(
      'id'      => 'color_primary',
      'type'    => 'color_picker',
      'title'   => 'Color primario',
      'default' =>  '#0072A6',
    ),
    //end a field
    // beging a field: color-primary
    array(
      'id'      => 'color_secundary',
      'type'    => 'color_picker',
      'title'   => 'Color secundario',
      'default' =>  '#0B5172',
    ),
    //end a field
    // beging a field: color-primary
    array(
      'id'      => 'color_brilloso',
      'type'    => 'color_picker',
      'title'   => 'Color brilloso',
      'default' =>  '#009FDA',
    ),
    //end a field
    // begin: a field
    array(
      'id'      => 'url_app_register',
      'type'    => 'text',
      'title'   => 'Direccion de aplicacion web de registro',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'url_fb',
      'type'    => 'text',
      'title'   => 'Direccion de Facebook',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'url_tw',
      'type'    => 'text',
      'title'   => 'Direccion de Twitter',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'url_inst',
      'type'    => 'text',
      'title'   => 'Direccion de Instagram',
    ),
    // end: a field

  ), // end: fields
);

// ----------------------------------------
//                Portada  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'index',
  'title'       => 'Portada',
  'icon'        => 'fa fa-desktop',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'title_slide',
      'type'    => 'text',
      'title'   => 'Titulo del slide',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'description_slide',
      'type'    => 'text',
      'title'   => 'Descripcion del slide',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'image_slide',
      'type'    => 'upload',
      'title'   => 'Imagen slide',
    ),
    // end: a field      
    // begin: a field
    array(
      'id'      => 'title_section_one',
      'type'    => 'text',
      'title'   => 'Titulo de la seccion #1',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'content_section_one',
      'type'    => 'textarea',
      'title'   => 'Contenido de la seccion #1',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'content_frase',
      'type'    => 'textarea',
      'title'   => 'Frase celebre',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'author_frase',
      'type'    => 'text',
      'title'   => 'Autor frase',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'title_section_two',
      'type'    => 'text',
      'title'   => 'Titulo de la seccion #2',
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'content_section_two',
      'type'    => 'textarea',
      'title'   => 'Contenido de la seccion #2',
    ),
    // end: a field    
    // begin: a field
    array(
      'id'      => 'content_section_two_two',
      'type'    => 'textarea',
      'title'   => 'Mision',
    ),
    // end: a field    
    // begin: a field
    array(
      'id'      => 'content_section_two_three',
      'type'    => 'textarea',
      'title'   => 'Vision',
    ),
    // end: a field  
    // begin: a field
    array(
      'id'      => 'image_one',
      'type'    => 'upload',
      'title'   => 'Imagen #1',
    ),
    // end: a field  
    // begin: a field
    array(
      'id'      => 'image_two',
      'type'    => 'upload',
      'title'   => 'Imagen #2',
    ),
    // end: a field      
    // begin: a field
    array(
      'id'      => 'image_three',
      'type'    => 'upload',
      'title'   => 'Imagen #3',
    ),
    // end: a field          
    array(
  'id'              => 'members',
  'type'            => 'group',
  'title'           => 'Miembros de mesa directiva',
  'button_title'    => 'Añadir miembro',
  'accordion_title' => 'Miembro',
  'fields'          => array(

    array(
      'id'       => 'member_pic',
      'type'     => 'upload',
      'title'    => 'Fotografia',
    ),
    array(
      'id'       => 'member_name',
      'type'     => 'text',
      'title'    => 'Nombre completo',
    ),

    array(
      'id'       => 'member_desc',
      'type'     => 'textarea',
      'title'    => 'Bibliografia',
    ),

    array(
      'id'       => 'member_job',
      'type'     => 'select',
      'title'    => 'Puesto',
      'options'  => array(
        'Presidente'   => 'Presidente',
        'Vicepresidente'  => 'Vicepresidente',
        'Secretario' => 'Secretario',
        'Tesorero' => 'Tesorero',
        'Consejero' => 'Consejero',
      )
    ),

    array(
      'id'       => 'member_fb',
      'type'     => 'text',
      'title'    => 'Facebook',
    ),
    array(
      'id'       => 'member_tw',
      'type'     => 'text',
      'title'    => 'Twitter',
    ),
    array(
      'id'       => 'member_mail',
      'type'     => 'text',
      'title'    => 'Correo electronico',
    ),

  )
), //end :field group
    array(
  'id'              => 'events',
  'type'            => 'group',
  'title'           => 'Eventos',
  'button_title'    => 'Agregar evento',
  'accordion_title' => 'Evento',
  'fields'          => array(

    array(
      'id'       => 'event_title',
      'type'     => 'text',
      'title'    => 'Titulo del evento',
    ),
    array(
      'id'       => 'event_desc',
      'type'     => 'textarea',
      'title'    => 'Descripcion del evento',
    ),
    array(
      'id'    => 'event_icon',
      'type'  => 'icon',
      'title' => 'Icono',
    ),
  )
),

    // begin: a field
    array(
      'id'      => 'contact_shortcode',
      'type'    => 'text',
      'sanitize'=> false,
      'title'   => 'Shortcode Contact Form 7',
    ),
    // end: a field    

  ), // end: fields
);

CSFramework::instance( $settings, $options );
