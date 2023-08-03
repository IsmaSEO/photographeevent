<?php

// ajout du logo via le customier
add_action('customize_register', function (WP_Customize_Manager $manager) {

    $manager->add_section('photographeevent_appearance', [
        'title' => __('Theme appearance')
    ]);

    $manager->add_setting('logo');

    $manager->add_control(new WP_Customize_Control($manager, 'logo', [
        'label' => __('logo', 'photographeevent'),
        'section' => 'photographeevent_appearance'
    ]));
});

