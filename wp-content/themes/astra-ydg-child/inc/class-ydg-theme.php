<?php

namespace YDG\Astra;

class Theme
{
    public static function init()
    {
        require_once( ASTRA_YDG_DIR . '/vendor/autoload.php' );

        add_action( 'ydg_theme_loaded', [Customizer::class, 'init'] );
        add_action( 'ydg_theme_loaded', [SCSS::class, 'init'] );

        if ( class_exists( 'FLBuilder' ) ) {
            add_action( 'after_setup_theme', [Builder::class, 'init'] );
        }

        add_action( 'wp_enqueue_scripts',   [ __CLASS__, 'enqueue_assets' ], 15 );

        add_action( 'wp',   [ __CLASS__, 'disable_titles' ] );
        add_action( 'init', [ __CLASS__, 'disable_emojis' ] );

        do_action( 'ydg_theme_loaded' );
    }

    /**
     * Check if site is on dev server
     */
    public static function is_dev()
    {
        return stripos( get_option( 'siteurl' ), 'stagingweb' ) != false;
    }

    /**
     * Enqueue scripts for theme
     */
    public static function enqueue_assets()
    {
        wp_enqueue_style( 'ydg-theme-css', ASTRA_YDG_URL . '/css/main.css', array('astra-theme-css'), ASTRA_YDG_VERSION, 'all' );
    }

    /**
     * Disable titles on pages
     */
    public static function disable_titles()
    {
        $post_types = ['page'];

        if ( !in_array( get_post_type(), $post_types ) ) {
            return;
        }

        add_filter( 'astra_the_title_enabled', '__return_false' );
    }

    /**
     * Disable wordpress emojis
     */
    public static function disable_emojis()
    {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

        add_filter( 'tiny_mce_plugins',  [ __CLASS__, 'disable_emojis_tinymce' ] );
        add_filter( 'wp_resource_hints', [ __CLASS__, 'disable_emojis_remove_dns_prefetch' ], 10, 2 );
    }

    /**
     * Disable emojis in tinymce
     */
    public static function disable_emojis_tinymce( $plugins )
    {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, ['wpemoji'] );
        }
        
        return [];
    }

    /**
     * Remove dns prefetch for emojis
     */
    public static function disable_emojis_remove_dns_prefetch( $urls, $relation_type )
    {
        if ( 'dns-prefetch' == $relation_type ) {
            /** This filter is documented in wp-includes/formatting.php */
            $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
        
            $urls = array_diff( $urls, [ $emoji_svg_url ] );
        }

        return $urls;
    }
}