<?php

return array(
    'app_options' => array(
        'dev' => DEV,

        'view_helper_enable' => [
            'AppPhotoHeader' => 0,
            'jcCarousel' => 0,
        ],


        'session' => [
            'name'                => 'T_SESSID',
            'save_path'           => "./data/session",
            'remember_me_seconds' => null,
            'cookie_lifetime'     => null,
            'expiration'          => null,
        ]
    ),



);