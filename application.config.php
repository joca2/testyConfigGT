<?php

$modules = array();

if (DEV) {
    $modules[] = 'Dev';
}

$modules[] = 'Application';
$modules[] = 'JcNavigation';

return array(
    'modules' => $modules,
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.ini',
            'config/autoload/{,*.}{global,local}.php'
        ),
    ),
);
