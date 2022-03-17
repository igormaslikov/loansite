<?php

namespace YDG\Astra;

class Builder
{
    protected static $is_loaded = false;
    protected static $pri_color;
    protected static $accent_color;
    protected static $hover_color;
    protected static $base_font_size;
    protected static $body_color;
    protected static $btn_bg_color;
    protected static $btn_text_color;
    protected static $btn_hover_bg_color;
    protected static $btn_hover_text_color;
    protected static $btn_font_size;
    protected static $btn_border_width;
    protected static $btn_border_radius;
    protected static $btn_padding_x;
    protected static $btn_padding_y;

    public static function init()
    {
        add_filter( 'fl_builder_module_details',         [ __CLASS__, 'builder_module_details' ], 10, 2 );

        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'call_to_action_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'content_slider_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_highlight_box_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_info_box_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_icon_list_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_pricing_table_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_smart_button_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_dual_button_defaults' ], 10, 2 );
        add_filter( 'fl_builder_register_settings_form', [ __CLASS__, 'pp_gravity_form_defaults' ], 10, 2 );

        \FLPageData::add_group( 'theme', ['label' => __( 'Theme' )] );

        \FLPageData::add_site_property( 'ydg_primary_color', [
            'label' => __( 'Primary Color' ),
            'group' => 'theme',
            'type'  => 'color',
            'getter' => Builder::class . '::get_primary_color',
        ] );

        \FLPageData::add_site_property( 'ydg_secondary_color', [
            'label' => __( 'Secondary Color' ),
            'group' => 'theme',
            'type'  => 'color',
            'getter' => Builder::class . '::get_secondary_color',
        ] );

        \FLPageData::add_site_property( 'ydg_accent_color', [
            'label' => __( 'Accent Color' ),
            'group' => 'theme',
            'type'  => 'color',
            'getter' => Builder::class . '::get_accent_color',
        ] );

        \FLPageData::add_site_property( 'ydg_hover_color', [
            'label' => __( 'Hover Color' ),
            'group' => 'theme',
            'type'  => 'color',
            'getter' => Builder::class . '::get_hover_color',
        ] );
    }

    public static function get_primary_color()
    {
        return self::fix_color( astra_get_option( 'theme-color', '#0274be' ) );
    }

    public static function get_secondary_color()
    {
        return self::fix_color( astra_get_option( 'secondary-color', '#f5f5f5' ) );
    }

    public static function get_accent_color()
    {
        return self::fix_color( astra_get_option( 'link-color' ) );
    }

    public static function get_hover_color()
    {
        return self::fix_color( astra_get_option( 'link-h-color' ) );
    }

    public static function builder_module_details( $options, $slug )
    {
        $options['group'] = false;

        switch ( $slug ) {
            // case '' :
            //     $options['category'] = __( 'Frequently Used' );
            //     break;

            case 'uabb-infobox' :
            case 'info-banner' :
            case 'info-box' :
            case 'info-table' :
            case 'content-slider' :
            case 'pp-timeline' :
            case 'pp-business-hours' :
            case 'pp-pullquote' :
            case 'pp-restaurant-menu' :
            case 'pp-team' :
            case 'pp-testimonials' :
            case 'team' :
            case 'info-circle' :
            case 'uabb-call-to-action' :
                $options['category'] = __( 'Grouped Elements' );
                break;

            case 'pp-flipbox' :
            case 'pp-highlight-box' :
            case 'pp-hover-cards' :
            case 'pp-hover-cards-2' :
            case 'pp-advanced-accordion' :
            case 'pp-advanced-tabs' :
            case 'pp-modal-box' :
            case 'uabb-content-toggle' :
            case 'interactive-banner-1' :
            case 'interactive-banner-2' :
            case 'ihover' :
            case 'slide-box' :
                $options['category'] = __( 'Hide/Show Content' );
                break;

            case 'rich-text' :
            case 'pp-animated-headlines' :
            case 'pp-fancy-heading' :
            case 'pp-heading' :
            case 'fancy-text' :
                $options['category'] = __( 'Headings/Text' );
                break;

            case 'pp-iconlist' :
            case 'pp-infolist' :
                $options['category'] = __( 'Lists' );
                break;

            case 'pp-pricing-table' :
            case 'uabb-table' :
                $options['category'] = __( 'Tables' );
                break;

            case 'pp-dual-button' :
            case 'pp-smart-button' :
                $options['category'] = __( 'Buttons' );
                break;

            case 'advanced-icon' :
                $options['category'] = __( 'Icons' );
                break;

            case 'pp-3d-slider' :
            case 'pp-logos-grid' :
            case 'pp-filterable-gallery' :
            case 'pp-gallery' :
            case 'pp-image-carousel' :
            case 'pp-image-panels' :
            case 'pp-image' :
            case 'uabb-beforeafterslider' :
            case 'uabb-hotspot' :
                $options['category'] = __( 'Images' );
                break;

            case 'audio' :
            case 'video' :
            case 'uabb-video' :
            case 'uabb-video-gallery' :
                $options['category'] = __( 'Audio/Video' );
                break;

            case 'post-slider' :
            case 'woocommerce' :
            case 'pp-post-timeline' :
            case 'pp-content-grid' :
            case 'pp-content-tiles' :
            case 'pp-custom-grid' :
            case 'blog-posts' :
            case 'uabb-woo-add-to-cart' :
            case 'uabb-woo-categories' :
            case 'uabb-woo-products' :
                $options['category'] = __( 'Posts/Products' );
                break;

            case 'pp-countdown' :
            case 'uabb-numbers' :
            case 'progress-bar' :
                $options['category'] = __( 'Counters/Progress' );
                break;

            case 'pp-advanced-menu' :
            case 'pp-dotnav' :
            case 'creative-link' :
                $options['category'] = __( 'Menus/Nav' );
                break;

            case 'pp-facebook-button' :
            case 'pp-facebook-comments' :
            case 'pp-facebook-embed' :
            case 'pp-facebook-page' :
            case 'pp-instagram-feed' :
            case 'pp-twitter-buttons' :
            case 'pp-twitter-grid' :
            case 'pp-twitter-timeline' :
            case 'pp-twitter-tweet' :
            case 'pp-social-icons' :
            case 'uabb-social-share' :
                $options['category'] = __( 'Social' );
                break;

            case '' :
                $options['category'] = __( 'Search' );
                break;

            case 'pp-column-separator' :
            case 'pp-spacer' :
            case 'advanced-separator' :
            case 'image-separator' :
                $options['category'] = __( 'Separators/Spacers' );
                break;

            case 'html' :
            case 'sidebar' :
            case 'pp-announcement-bar' :
            case 'pp-notifications' :
            case 'pp-gravity-form' :
            case 'google-map' :
            case 'ribbon' :
                $options['category'] = __( 'Misc' );
                break;
        }

        return $options;
    }

    public static function call_to_action_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'cta' == $slug ) {
            $form['button']['sections']['btn_colors']['fields']['btn_bg_color']['default']         = self::$btn_bg_color;
            $form['button']['sections']['btn_colors']['fields']['btn_bg_hover_color']['default']   = self::$btn_hover_bg_color;
            $form['button']['sections']['btn_colors']['fields']['btn_text_color']['default']       = self::$btn_text_color;
            $form['button']['sections']['btn_colors']['fields']['btn_text_hover_color']['default'] = self::$btn_hover_text_color;

            $form['button']['sections']['btn_colors']['fields']['btn_border_size']['default']      = self::$btn_border_width;

            $form['button']['sections']['btn_structure']['fields']['btn_font_size']['default']     = self::$base_font_size['desktop'];
            $form['button']['sections']['btn_structure']['fields']['btn_padding']['default']       = self::$btn_padding_x;
            $form['button']['sections']['btn_structure']['fields']['btn_border_radius']['default'] = self::$btn_border_radius;
        }

        return $form;
    }

    public static function content_slider_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'content_slider_slide' == $slug ) {
            $form['tabs']['cta']['sections']['btn_colors']['fields']['btn_bg_color']['default']         = self::$btn_bg_color;
            $form['tabs']['cta']['sections']['btn_colors']['fields']['btn_bg_hover_color']['default']   = self::$btn_hover_bg_color;
            $form['tabs']['cta']['sections']['btn_colors']['fields']['btn_text_color']['default']       = self::$btn_text_color;
            $form['tabs']['cta']['sections']['btn_colors']['fields']['btn_text_hover_color']['default'] = self::$btn_hover_text_color;

            $form['tabs']['cta']['sections']['btn_style']['fields']['btn_border_size']['default']       = self::$btn_border_width;

            $form['tabs']['cta']['sections']['btn_structure']['fields']['btn_font_size']['default']     = self::$base_font_size['desktop'];
            $form['tabs']['cta']['sections']['btn_structure']['fields']['btn_padding']['default']       = self::$btn_padding_x;
            $form['tabs']['cta']['sections']['btn_structure']['fields']['btn_border_radius']['default'] = self::$btn_border_radius;
        }

        return $form;
    }

    public static function pp_highlight_box_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-highlight-box' == $slug ) {
            $form['style']['sections']['general_colors']['fields']['box_bg_color']['default']         = self::$btn_bg_color;
            $form['style']['sections']['general_colors']['fields']['box_bg_hover_color']['default']   = self::$btn_hover_bg_color;
            $form['style']['sections']['general_colors']['fields']['box_text_color']['default']       = self::$btn_text_color;
            $form['style']['sections']['general_colors']['fields']['box_text_hover_color']['default'] = self::$btn_hover_text_color;
        }

        return $form;
    }

    public static function pp_info_box_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-infobox' == $slug ) {
            $form['button_link']['sections']['link_style']['fields']['button_bg_color']['default']                  = self::$btn_bg_color;
            $form['button_link']['sections']['link_style']['fields']['button_bg_hover_color']['default']            = self::$btn_hover_bg_color;
            $form['button_link']['sections']['link_style']['fields']['pp_infobox_read_more_color']['default']       = self::$btn_text_color;
            $form['button_link']['sections']['link_style']['fields']['pp_infobox_read_more_color_hover']['default'] = self::$btn_hover_text_color;

            $form['button_link']['sections']['link_style']['fields']['button_padding']['default'] = [
                'top'               => self::$btn_padding_x,
                'bottom'            => self::$btn_padding_x,
                'left'              => self::$btn_padding_y,
                'right'             => self::$btn_padding_y,
            ];

            $form['button_link']['sections']['link_style']['fields']['button_radius']['default'] = self::$btn_border_radius;
        }

        return $form;
    }

    public static function pp_icon_list_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-iconlist' == $slug ) {
            $form['style']['sections']['icon_style']['fields']['icon_color']['default']       = self::$accent_color;
            $form['style']['sections']['icon_style']['fields']['icon_color_hover']['default'] = self::$hover_color;
        }

        return $form;
    }

    public static function pp_pricing_table_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp_pricing_column_form' == $slug ) {
            $form['tabs']['button']['sections']['btn_colors']['fields']['btn_bg_color']['default']         = self::$btn_bg_color;
            $form['tabs']['button']['sections']['btn_colors']['fields']['btn_bg_hover_color']['default']   = self::$btn_hover_bg_color;
            $form['tabs']['button']['sections']['btn_colors']['fields']['btn_text_color']['default']       = self::$btn_text_color;
            $form['tabs']['button']['sections']['btn_colors']['fields']['btn_text_hover_color']['default'] = self::$btn_hover_text_color;

            $form['tabs']['button']['sections']['btn_style']['fields']['btn_border_size']['default']       = self::$btn_border_width;

            $form['tabs']['button']['sections']['btn_structure']['fields']['button_padding']['default'] = [
                'top'    => self::$btn_padding_x,
                'bottom' => self::$btn_padding_x,
                'left'   => self::$btn_padding_y,
                'right'  => self::$btn_padding_y,
            ];

            $form['tabs']['button']['sections']['btn_structure']['fields']['btn_border_radius']['default'] = self::$btn_border_radius;
        }

        return $form;
    }

    public static function pp_smart_button_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-smart-button' == $slug ) {
            //  $form['style']['sections']['colors']['fields']['bg_color']['default']['primary']     = self::$btn_bg_color;
            //  $form['style']['sections']['colors']['fields']['bg_color']['default']['secondary']   = self::$btn_hover_bg_color;
            //  $form['style']['sections']['colors']['fields']['text_color']['default']['primary']   = self::$btn_text_color;
            //  $form['style']['sections']['colors']['fields']['text_color']['default']['secondary'] = self::$btn_hover_text_color;

            $form['style']['sections']['formatting']['fields']['padding']['default'] = [
                'top'    => self::$btn_padding_x,
                'bottom' => self::$btn_padding_x,
                'left'   => self::$btn_padding_y,
                'right'  => self::$btn_padding_y,
            ];

            $form['style']['sections']['formatting']['fields']['border_radius']['default'] = self::$btn_border_radius;

            $form['typography']['sections']['text_fonts']['fields']['font_size']['default']['desktop'] = self::$btn_font_size;
        }

        return $form;
    }

    public static function pp_dual_button_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-dual-button' == $slug ) {
            $form['style']['sections']['button_1_style']['fields']['button_1_bg_color']['default']['primary']       = self::$btn_bg_color;
            $form['style']['sections']['button_1_style']['fields']['button_1_bg_color']['default']['secondary']     = self::$btn_hover_bg_color;

            $form['style']['sections']['button_1_style']['fields']['button_1_border_color']['default']['primary']   = self::$btn_bg_color;
            $form['style']['sections']['button_1_style']['fields']['button_1_border_color']['default']['secondary'] = self::$btn_hover_bg_color;
            
            $form['style']['sections']['button_1_style']['fields']['button_1_text_color']['default']['primary']     = self::$btn_text_color;
            $form['style']['sections']['button_1_style']['fields']['button_1_text_color']['default']['secondary']   = self::$btn_hover_text_color;

            $form['style']['sections']['button_2_style']['fields']['button_2_bg_color']['default']['primary']       = '';
            $form['style']['sections']['button_2_style']['fields']['button_2_bg_color']['default']['secondary']     = self::$btn_hover_bg_color;

            $form['style']['sections']['button_2_style']['fields']['button_2_border_color']['default']['primary']   = self::$btn_bg_color;
            $form['style']['sections']['button_2_style']['fields']['button_2_border_color']['default']['secondary'] = self::$btn_hover_bg_color;
            
            $form['style']['sections']['button_2_style']['fields']['button_2_text_color']['default']['primary']     = self::$body_color;
            $form['style']['sections']['button_2_style']['fields']['button_2_text_color']['default']['secondary']   = self::$btn_hover_text_color;

            $form['style']['sections']['general_colors']['fields']['button_padding']['default'] = [
                'button_top_padding'    => self::$btn_padding_x,
                'button_bottom_padding' => self::$btn_padding_x,
                'button_left_padding'   => self::$btn_padding_y,
                'button_right_padding'  => self::$btn_padding_y,
            ];

            $form['style']['sections']['general_colors']['fields']['button_border_width']['default']  = self::$btn_border_width;
            $form['style']['sections']['general_colors']['fields']['button_border_radius']['default'] = self::$btn_border_radius;

            $form['button_typography']['sections']['typography']['fields']['button_font_size']['default']['button_font_size_desktop'] = self::$btn_font_size;
        }

        return $form;
    }

    public static function pp_gravity_form_defaults( $form, $slug )
    {
        self::load_variables();

        if ( 'pp-gravity-form' == $slug ) {
            $form['button_style']['sections']['button_bg']['fields']['button_bg_color']['default']         = self::$btn_bg_color;
            $form['button_style']['sections']['button_bg']['fields']['button_hover_bg_color']['default']   = self::$btn_hover_bg_color;
            $form['button_style']['sections']['button_bg']['fields']['button_text_color']['default']       = self::$btn_text_color;
            $form['button_style']['sections']['button_bg']['fields']['button_hover_text_color']['default'] = self::$btn_hover_text_color;

            $form['button_style']['sections']['button_border']['fields']['button_border_width']['default'] = self::$btn_border_width;
            $form['button_style']['sections']['button_border']['fields']['button_border_color']['default'] = self::$btn_bg_color;
            
            $form['button_style']['sections']['button_corners']['fields']['button_border_radius']['default'] = self::$btn_border_radius;
            
            $form['button_style']['sections']['button_corners']['fields']['button_padding_top_bottom']['default'] = self::$btn_padding_x;
            $form['button_style']['sections']['button_corners']['fields']['button_padding_left_right']['default'] = self::$btn_padding_y;
        }

        return $form;
    }

    /**
     * Load global variables
     */
    public static function load_variables()
    {
        if ( self::$is_loaded ) {
            return;
        }

        \Astra_Theme_Options::refresh();

        self::$pri_color = self::fix_color( astra_get_option( 'theme-color' ) );
        self::$accent_color = self::fix_color( astra_get_option( 'link-color' ) );
        self::$hover_color = self::fix_color( astra_get_option( 'link-h-color' ) );

        self::$base_font_size = astra_get_option( 'font-size-body' );

        self::$body_color = self::fix_color( astra_get_option( 'text-color' ) );

        self::$btn_bg_color = self::fix_color( astra_get_option( 'button-bg-color', self::$accent_color ) );
        self::$btn_text_color = self::fix_color( astra_get_option( 'button-color', self::$hover_color ) );
        self::$btn_hover_bg_color = self::fix_color( astra_get_option( 'button-bg-h-color' ) );
        self::$btn_hover_text_color = self::fix_color( astra_get_option( 'button-h-color' ) );

        self::$btn_font_size = astra_get_option( 'button-font-size' );
        self::$btn_border_width = astra_get_option( 'button-border-width' );
        self::$btn_border_radius = astra_get_option( 'button-radius' );
        self::$btn_padding_x = astra_get_option( 'button-v-padding' );
        self::$btn_padding_y = astra_get_option( 'button-h-padding' );

        self::$is_loaded = true;
    }

    /**
     * Remove hexes from colors, builder doesn't like them
     */
    private static function fix_color( $color )
    {
        return str_replace( '#', '', $color );
    }
}