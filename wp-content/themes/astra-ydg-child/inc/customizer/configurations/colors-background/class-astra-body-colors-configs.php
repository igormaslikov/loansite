<?php

/**
 * Register Body Color Customizer Configurations.
 */
class Astra_Body_Colors_Configs extends Astra_Customizer_Config_Base {

    /**
     * Register Body Color Customizer Configurations.
     *
     * @param Array                $configurations Astra Customizer Configurations.
     * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
     * @since 1.4.3
     * @return Array Astra Customizer Configurations with updated configurations.
     */
    public function register_configuration( $configurations, $wp_customize ) {
        $_configs = array(

            /**
             * Option: Theme Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[theme-color]',
                'section'  => 'section-colors-body',
                'type'     => 'control',
                'control'  => 'ast-color',
                'default'  => '#0274be',
                'priority' => 5,
                'title'    => __( 'Theme Color', 'astra' ),
            ),

            /**
             * Option: Secondary Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[secondary-color]',
                'section'  => 'section-colors-body',
                'type'     => 'control',
                'control'  => 'ast-color',
                'default'  => '#f5f5f5',
                'priority' => 10,
                'title'    => __( 'Secondary Color', 'astra' ),
            ),

            /**
             * Option: Link Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[link-color]',
                'section'  => 'section-colors-body',
                'type'     => 'control',
                'control'  => 'ast-color',
                'default'  => '#0274be',
                'priority' => 15,
                'title'    => __( 'Link Color', 'astra' ),
            ),

            /**
             * Option: Text Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[text-color]',
                'default'  => '#3a3a3a',
                'type'     => 'control',
                'control'  => 'ast-color',
                'section'  => 'section-colors-body',
                'priority' => 20,
                'title'    => __( 'Text Color', 'astra' ),
            ),

            /**
             * Option: Text Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[heading-color]',
                'default'  => '#333333',
                'type'     => 'control',
                'control'  => 'ast-color',
                'section'  => 'section-colors-body',
                'priority' => 25,
                'title'    => __( 'Heading Color', 'astra' ),
            ),

            /**
             * Option: Link Hover Color
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[link-h-color]',
                'section'  => 'section-colors-body',
                'default'  => '#3a3a3a',
                'type'     => 'control',
                'control'  => 'ast-color',
                'priority' => 30,
                'title'    => __( 'Link Hover Color', 'astra' ),
            ),

            /**
             * Option: Divider
             */
            array(
                'name'     => ASTRA_THEME_SETTINGS . '[divider-outside-bg-color]',
                'type'     => 'control',
                'control'  => 'ast-divider',
                'section'  => 'section-colors-body',
                'priority' => 35,
                'settings' => array(),
            ),
        );

        $configurations = array_merge( $configurations, $_configs );

        return $configurations;
    }
}