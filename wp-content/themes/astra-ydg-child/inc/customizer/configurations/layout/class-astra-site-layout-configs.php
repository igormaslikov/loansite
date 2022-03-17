<?php

/**
 * Register Site Layout Customizer Configurations.
 */
class Astra_Site_Layout_Configs extends Astra_Customizer_Config_Base {

    /**
     * Register Site Layout Customizer Configurations.
     *
     * @param Array                $configurations Astra Customizer Configurations.
     * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
     * @since 1.4.3
     * @return Array Astra Customizer Configurations with updated configurations.
     */
    public function register_configuration( $configurations, $wp_customize ) {

        $_configs = array(

            array(
                'name'        => ASTRA_THEME_SETTINGS . '[site-content-width]',
                'type'        => 'control',
                'control'     => 'ast-slider',
                'default'     => 1200,
                'section'     => 'section-container-layout',
                'priority'    => 10,
                'title'       => __( 'Container Width', 'astra' ),
                'required'    => array( ASTRA_THEME_SETTINGS . '[site-layout]', '==', 'ast-full-width-layout' ),
                'suffix'      => '',
                'input_attrs' => array(
                    'min'  => 768,
                    'step' => 1,
                    'max'  => 1920,
                ),
            ),

            array(
                'name'        => ASTRA_THEME_SETTINGS . '[site-row-spacing]',
                'type'        => 'control',
                'control'     => 'ast-slider',
                'default'     => 20,
                'section'     => 'section-container-layout',
                'priority'    => 20,
                'title'       => __( 'Row Spacing', 'astra' ),
                'suffix'      => '',
                'input_attrs' => array(
                    'min'  => 5,
                    'step' => 5,
                    'max'  => 120,
                ),
            ),

            array(
                'name'        => ASTRA_THEME_SETTINGS . '[site-module-spacing]',
                'type'        => 'control',
                'control'     => 'ast-slider',
                'default'     => 20,
                'section'     => 'section-container-layout',
                'priority'    => 30,
                'title'       => __( 'Module Spacing', 'astra' ),
                'suffix'      => '',
                'input_attrs' => array(
                    'min'  => 5,
                    'step' => 5,
                    'max'  => 120,
                ),
            ),
        );

        return array_merge( $configurations, $_configs );
    }

}