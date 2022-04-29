<?php
    add_action(
        'customize_register',
        function(WP_Customize_Manager $manager) {
            $manager->add_section(
                'couleurs', 
                [
                    'title'=>'Couleurs'
                ]
            );
            $manager->add_setting(
                'header_fond',
                [
                    'default'=>'#fff',
                    'sanitize_callback'=>'sanitize_hex_color'
                ]
            );
            $manager->add_control(
                new WP_Customize_Color_Control(
                    $manager,
                    'header_fond',
                    [
                        'section'=>'couleurs',
                        'label'=>'Couleur de fond de lentête'
                    ]
                )
            );
            $manager->add_setting(
                'main_fond',
                [
                    'default'=>'#fff',
                    'sanitize_callback'=>'sanitize_hex_color'
                ]
            );
            $manager->add_control(
                new WP_Customize_Color_Control(
                    $manager,
                    'main_fond',
                    [
                        'section'=>'couleurs',
                        'label'=>'Couleur de fond principale'
                    ]
                )
            );
        }
    )
?>