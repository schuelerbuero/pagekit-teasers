<?php

use Pagekit\Application;

return [
    'name' => 'teasers',
    'type' => 'extension',
    'autoload' => [
        'Schuelerbuero\\Teasers\\' => 'src'
    ],
// array of routes
'routes' => [

    // identifier to reference the route from your code
    '@teasers' => [

        // which path this extension should be mounted to
        'path' => '/teasers',

        // which controller to mount
        'controller' => 'Schuelerbuero\\Teasers\\Controller\\TeaserController',
    ]

],
'menu' => [
  'teasers' => [
    'label' => 'Teaser',
    'icon' => 'app/system/assets/images/placeholder-icon.svg',
    'url' => '@teasers'
  ]],
  'resources' => [
    'teasers:' => ''
]
];
