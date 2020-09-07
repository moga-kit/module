<?php

$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'tpl-manager',
    'title' => 'MOGA Template Manager',
    'description' => 'Template Manager for MOGA-Kit Theme',
    'thumbnail' => 'thumbnail.png',
    'version' => '0.0.1 ( 2020-09-01 )',
    'author' => 'Marat Bedoev',
    'email' => openssl_decrypt("Az6pE7kPbtnTzjHlPhPCa4ktJLphZ/w9gKgo5vA//p4=", str_rot13("nrf-128-pop"), str_rot13("gvalzpr")),
    'url' => 'https://github.com/moga-kit/tpl-manager',
    'extend' => [],
    'controllers' => [
        'mogacustomizer' => MogaKit\TplManager\Application\Controller\Admin\Mogacustomizer::class,
        'mogamanager' => MogaKit\TplManager\Application\Controller\Admin\Mogamanager::class
    ],
    'templates' => [
        'customizer.tpl' => 'moga-kit/tpl-manager/Application/views/admin/customizer.tpl',
        'tplmanager.tpl' => 'moga-kit/tpl-manager/Application/views/admin/tplmanager.tpl'
    ],
    'settings' => [
        ['group' => 'mogaSettings', 'name' => 'mogaBootstrapColors', 'type' => 'str', 'value' => ''],
        ['group' => 'mogaSettings', 'name' => 'oePayPalBannersHideAll', 'type' => 'bool', 'value' => 'false'],
        ['group' => 'mogaSettings', 'name' => 'oePayPalBannersStartPage', 'type' => 'bool', 'value' => 'true']
    ]
];
