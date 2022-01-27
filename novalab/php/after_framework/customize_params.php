<?php

/* Remove unused params */

remove_action( 'customize_register', 'boldthemes_customize_blog_side_info' );
remove_action( 'boldthemes_customize_register', 'boldthemes_customize_blog_side_info' );


// SUPERTITLE WEIGHT

BoldThemes_Customize_Default::$data['default_supertitle_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_supertitle_weight' ) ) {
	function boldthemes_customize_default_supertitle_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_supertitle_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_supertitle_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_supertitle_weight', array(
			'label'     		=> esc_html__( 'Supertitle Font Weight', 'novalab' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_supertitle_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'novalab' ),
				'thin' 			=> esc_html__( 'Thin', 'novalab' ),
				'lighter' 		=> esc_html__( 'Lighter', 'novalab' ),
				'light' 		=> esc_html__( 'Light', 'novalab' ),
				'normal' 		=> esc_html__( 'Normal', 'novalab' ),
				'medium' 		=> esc_html__( 'Medium', 'novalab' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'novalab' ),
				'bold' 			=> esc_html__( 'Bold', 'novalab' ),
				'bolder' 		=> esc_html__( 'Bolder', 'novalab' ),
				'black' 		=> esc_html__( 'Black', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_supertitle_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_supertitle_weight' );


// HEADING WEIGHT

BoldThemes_Customize_Default::$data['default_heading_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_heading_weight' ) ) {
	function boldthemes_customize_default_heading_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_heading_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_heading_weight', array(
			'label'     		=> esc_html__( 'Heading Weight', 'novalab' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_heading_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'novalab' ),
				'thin' 			=> esc_html__( 'Thin', 'novalab' ),
				'lighter' 		=> esc_html__( 'Lighter', 'novalab' ),
				'light' 		=> esc_html__( 'Light', 'novalab' ),
				'normal' 		=> esc_html__( 'Normal', 'novalab' ),
				'medium' 		=> esc_html__( 'Medium', 'novalab' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'novalab' ),
				'bold' 			=> esc_html__( 'Bold', 'novalab' ),
				'bolder' 		=> esc_html__( 'Bolder', 'novalab' ),
				'black' 		=> esc_html__( 'Black', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_heading_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_heading_weight' );


// SUBTITLE WEIGHT

BoldThemes_Customize_Default::$data['default_subtitle_weight'] = 'default';
if ( ! function_exists( 'boldthemes_customize_default_subtitle_weight' ) ) {
	function boldthemes_customize_default_subtitle_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_subtitle_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_subtitle_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));

		$wp_customize->add_control( 'default_subtitle_weight', array(
			'label'     		=> esc_html__( 'Subtitle Font Weight', 'novalab' ),
			'section'   		=> BoldThemesFramework::$pfx . '_typo_section',
			'settings'  		=> BoldThemesFramework::$pfx . '_theme_options[default_subtitle_weight]',
			'priority'  		=> 100,
			'type'      		=> 'select',
			'choices'   => array(
				'default'		=> esc_html__( 'Default', 'novalab' ),
				'thin' 			=> esc_html__( 'Thin', 'novalab' ),
				'lighter' 		=> esc_html__( 'Lighter', 'novalab' ),
				'light' 		=> esc_html__( 'Light', 'novalab' ),
				'normal' 		=> esc_html__( 'Normal', 'novalab' ),
				'medium' 		=> esc_html__( 'Medium', 'novalab' ),
				'semi-bold' 	=> esc_html__( 'Semi bold', 'novalab' ),
				'bold' 			=> esc_html__( 'Bold', 'novalab' ),
				'bolder' 		=> esc_html__( 'Bolder', 'novalab' ),
				'black' 		=> esc_html__( 'Black', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_subtitle_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_subtitle_weight' );


// BUTTON FONT

BoldThemes_Customize_Default::$data['button_font'] = 'Barlow';
if ( ! function_exists( 'boldthemes_customize_button_font' ) ) {
	function boldthemes_customize_button_font( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[button_font]', array(
			'default'           => urlencode( BoldThemes_Customize_Default::$data['button_font'] ),
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'button_font', array(
			'label'     => esc_html__( 'Button Font', 'novalab' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[button_font]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => BoldThemesFramework::$customize_fonts
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_button_font' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_button_font' );


// BUTTON FONT WEIGHT

BoldThemes_Customize_Default::$data['default_button_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_button_weight' ) ) {
	function boldthemes_customize_default_button_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_button_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_button_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_button_weight', array(
			'label'     => esc_html__( 'Button Font Weight', 'novalab' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_button_weight]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'novalab' ),
				'thin' 		=> esc_html__( 'Thin', 'novalab' ),
				'lighter' 	=> esc_html__( 'Lighter', 'novalab' ),
				'light' 	=> esc_html__( 'Light', 'novalab' ),
				'normal' 	=> esc_html__( 'Normal', 'novalab' ),
				'medium' 	=> esc_html__( 'Medium', 'novalab' ),
				'semi-bold' => esc_html__( 'Semi bold', 'novalab' ),
				'bold' 		=> esc_html__( 'Bold', 'novalab' ),
				'bolder' 	=> esc_html__( 'Bolder', 'novalab' ),
				'black' 	=> esc_html__( 'Black', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_button_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_button_weight' );


// MENU WEIGHT

BoldThemes_Customize_Default::$data['default_menu_weight'] = 'default';

if ( ! function_exists( 'boldthemes_customize_default_menu_weight' ) ) {
	function boldthemes_customize_default_menu_weight( $wp_customize ) {

		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]', array(
			'default'           => BoldThemes_Customize_Default::$data['default_menu_weight'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'default_menu_weight', array(
			'label'     => esc_html__( 'Menu Font Weight', 'novalab' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[default_menu_weight]',
			'priority'  => 102,
			'type'      => 'select',
			'choices'   => array(
				'default'	=> esc_html__( 'Default', 'novalab' ),
				'thin' 		=> esc_html__( 'Thin', 'novalab' ),
				'lighter' 	=> esc_html__( 'Lighter', 'novalab' ),
				'light' 	=> esc_html__( 'Light', 'novalab' ),
				'normal' 	=> esc_html__( 'Normal', 'novalab' ),
				'medium' 	=> esc_html__( 'Medium', 'novalab' ),
				'semi-bold' => esc_html__( 'Semi bold', 'novalab' ),
				'bold' 		=> esc_html__( 'Bold', 'novalab' ),
				'bolder' 	=> esc_html__( 'Bolder', 'novalab' ),
				'black' 	=> esc_html__( 'Black', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_default_menu_weight' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_default_menu_weight' );


// CAPITALIZE MAIN MENU

BoldThemes_Customize_Default::$data['capitalize_main_menu'] = true;
if ( ! function_exists( 'boldthemes_customize_capitalize_main_menu' ) ) {
	function boldthemes_customize_capitalize_main_menu( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]', array(
			'default'           => BoldThemes_Customize_Default::$data['capitalize_main_menu'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'capitalize_main_menu', array(
			'label'     => esc_html__( 'Capitalize Menu Items', 'novalab' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[capitalize_main_menu]',
			'priority'  => 103,
			'type'      => 'checkbox'
		));
	}
}

add_action( 'customize_register', 'boldthemes_customize_capitalize_main_menu' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_capitalize_main_menu' );


// TEXT EFFECT

BoldThemes_Customize_Default::$data['blog_title_color'] = '';

if ( ! function_exists( 'boldthemes_customize_blog_title_color' ) ) {
	function boldthemes_customize_blog_title_color( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_title_color]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_title_color'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'blog_title_color', array(
			'label'    	=> esc_html__( 'Post headlines color scheme', 'novalab' ),
			'description'    => esc_html__( 'Choose color scheme for blog and portfolio headlines', 'novalab' ),
			'section'  	=> BoldThemesFramework::$pfx . '_blog_section',
			'settings' 	=> BoldThemesFramework::$pfx . '_theme_options[blog_title_color]',
			'priority' 	=> 80,
			'type'      => 'select',
			'choices'   => array(
				''     					=> esc_html__( 'Inherit (template skin colors - light or dark)', 'novalab' ),
				'accent_alternate'      => esc_html__( 'Accent font, alternate details', 'novalab' ),
				'alternate_accent'      => esc_html__( 'Alternate font, accent details', 'novalab' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_title_color' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_blog_title_color' );


// CUSTOM 404 IMAGE

if ( ! function_exists( 'boldthemes_customize_image_404' ) ) {
	function boldthemes_customize_image_404( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[image_404]', array(
			'default'           => BoldThemes_Customize_Default::$data['image_404'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_image'
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_404', array(
			'label'    => esc_html__( 'Custom Error 404 Page Image', 'novalab' ),
			'description'    => esc_html__( 'Set static image as a background on Error page. Minimum recommended size: 1920x1080px', 'novalab' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[image_404]',
			'priority' => 121,
			'context'  => BoldThemesFramework::$pfx . '_image_404'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_image_404' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_image_404' );


/* Helper function */

if ( ! function_exists( 'novalab_body_class' ) ) {
	function novalab_body_class( $extra_class ) {
		if ( boldthemes_get_option( 'default_heading_weight' ) ) {
			$extra_class[] =  'btHeadingWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_heading_weight' ) );
		}
		if ( boldthemes_get_option( 'default_supertitle_weight' ) ) {
			$extra_class[] =  'btSupertitleWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_supertitle_weight' ) );
		}
		if ( boldthemes_get_option( 'default_subtitle_weight' ) ) {
			$extra_class[] =  'btSubtitleWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_subtitle_weight' ) );
		}
		if ( boldthemes_get_option( 'default_button_weight' ) ) {
			$extra_class[] =  'btButtonWeight' . boldthemes_convert_param_to_camel_case ( boldthemes_get_option( 'default_button_weight' ) );
		}
		return $extra_class;
	}
}