<?php

namespace YDG\Astra;

class Customizer
{
    public static function init()
    {
        if ( is_admin() || is_customize_preview() ) {
            add_action( 'customize_register', [ __CLASS__, 'include_configurations' ], 1 );

            add_action( 'customize_controls_print_styles', [ __CLASS__, 'styles' ], 999 );
        }
    }

    public static function include_configurations()
    {
        // require( get_template_directory() . '/inc/customizer/configurations/class-astra-customizer-config-base.php' );

        // require( ASTRA_YDG_DIR . '/inc/customizer/configurations/layout/class-astra-site-layout-configs.php' );
        // require( ASTRA_YDG_DIR . '/inc/customizer/configurations/colors-background/class-astra-body-colors-configs.php' );
        // require( ASTRA_YDG_DIR . '/inc/customizer/configurations/buttons/class-astra-customizer-button-configs.php' );
    }

    function styles() {
        ?>
        <style>
            .wp-picker-container .iris-picker {
                width: 100% !important;
            }

            .wp-picker-container .iris-picker .iris-strip {
                margin-left: 10px !important;
            }
        </style>
        <?php
    }
}