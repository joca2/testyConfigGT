<?php


$modules = array();

$modules[] = 'jc';

if (DEV) {
    //$modules[] = 'ZendDeveloperTools';
    //$modules[] = 'SanSessionToolbar';
    $modules[] = 'Dev';
}


$modules[] = 'JcMsieRedirect';

//$modules[] = 'JcCache';

$modules[] = 'JcErrorHandler';

$modules[] = 'ZfcBase';
$modules[] = 'ZfcUser';
$modules[] = 'JHttps';
$modules[] = 'MtMail';

$modules[] = 'ZfOpenGraph';
$modules[] = 'Application';
$modules[] = 'JcNavigation';

$modules[] = 'JcInfo';
$modules[] = 'JcImages';

$modules[] = 'JcFirma';

$modules[] = 'JcView';

$modules[] = 'JcTest';


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