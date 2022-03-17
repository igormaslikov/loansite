<?php

namespace YDG\Astra;

use Leafo\ScssPhp\Compiler;

class SCSS
{
    public static function init()
    {
        add_action( 'after_setup_theme',    [ __CLASS__, 'check_for_updates' ] );
        add_action( 'customize_save_after', [ __CLASS__, 'save_styles' ] );
    }

    public static function check_for_updates()
    {
        if ( Theme::is_dev() ) {
            self::save_styles();
            return;
        }

        $css_filetime = filemtime( ASTRA_YDG_DIR . '/css/main.css' );

        $main_filetime = filemtime( ASTRA_YDG_DIR . '/scss/main.scss' );
        $style_filetime = filemtime( ASTRA_YDG_DIR . '/style.css' );

        if ( $main_filetime > $css_filetime || $style_filetime > $css_filetime ) {
            self::save_styles();
            return;
        }
    }

    public static function save_styles()
    {
        $css = self::compile_scss();

        self::store( $css );
    }

    public static function compile_scss()
    {
        try {
            \Astra_Theme_Options::refresh();

            $scss = new Compiler();

            $scss->setImportPaths( ASTRA_YDG_DIR . '/scss' ); // set path

            $theme_color = astra_get_option( 'theme-color', '#0274be' );
            $sec_color = astra_get_option( 'secondary-color', '#f5f5f5' );

            $row_spacing = astra_get_option( 'site-row-spacing' );
            $module_spacing = astra_get_option( 'site-module-spacing' );

            $pri_color = astra_get_option( 'theme-color' );
            $accent_color = astra_get_option( 'link-color' );
            $hover_color = astra_get_option( 'link-h-color' );

            $body_color = astra_get_option( 'text-color' );
            $heading_color = astra_get_option( 'heading-color' );

            $base_font_size = astra_get_option( 'font-size-body' );
            $base_line_height = astra_get_option( 'body-line-height' );
            $base_margin_bottom = astra_get_option( 'para-margin-bottom' );

            $btn_style = astra_get_option( 'button-style' );
            $btn_hover_style = astra_get_option( 'button-hover' );

            $btn_bg_color = astra_get_option( 'button-bg-color', $accent_color );
            $btn_text_color = astra_get_option( 'button-color', $hover_color );
            $btn_hover_bg_color = astra_get_option( 'button-bg-h-color' );
            $btn_hover_text_color = astra_get_option( 'button-h-color' );

            $btn_font_size = astra_get_option( 'button-font-size', $base_font_size['desktop'] );
            $btn_border_width = astra_get_option( 'button-border-width' );
            $btn_border_radius = astra_get_option( 'button-radius' );
            $btn_padding_x = astra_get_option( 'button-v-padding' );
            $btn_padding_y = astra_get_option( 'button-h-padding' );

            $vars = [
                'row-spacing'          => astra_get_css_value( $row_spacing, 'px' ),
                'module-spacing'       => astra_get_css_value( $module_spacing, 'px' ),
    
                'pri-color'            => $pri_color,
                'sec-color'            => $sec_color,
                'accent-color'         => $accent_color,
                'hover-color'          => $hover_color,
    
                'body-color'           => $body_color,
                'heading-color'        => $heading_color,
    
                'base-font-size'       => $base_font_size['desktop'] . $base_font_size[ 'desktop-unit' ],
                'base-line-height'     => $base_line_height,
                'base-margin-bottom'   => $base_margin_bottom,
    
                'btn-style'            => $btn_style,
                'btn-hover-style'      => $btn_hover_style,
                'btn-bg-color'         => $btn_bg_color,
                'btn-text-color'       => $btn_text_color,
                'btn-hover-bg-color'   => $btn_hover_bg_color,
                'btn-hover-text-color' => $btn_hover_text_color,
    
                'btn-font-size'        => astra_get_css_value( $btn_font_size, 'px' ),
                'btn-border-width'     => astra_get_css_value( $btn_border_width, 'px' ),
                'btn-border-radius'    => astra_get_css_value( $btn_border_radius, 'px' ),
                'btn-padding-x'        => astra_get_css_value( $btn_padding_x, 'px' ),
                'btn-padding-y'        => astra_get_css_value( $btn_padding_y, 'px' ),
            ];

            $scss->setVariables( $vars );
    
            $str = file_get_contents( ASTRA_YDG_DIR . '/scss/main.scss' );
    
            return $scss->compile( $str );
        } catch ( Exception $e ) {
            if ( Theme::is_dev() ) {
                echo $e->getMessage();
            } else {
                error_log( $e->getMessage() );
            }

            return false;
        }
    }

    public static function store( $css )
    {
        file_put_contents( ASTRA_YDG_DIR . '/css/main.css', $css );
    }
}