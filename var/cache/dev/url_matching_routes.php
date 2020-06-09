<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\MainController::cartlist'], null, ['GET' => 0], null, false, false, null]],
        '/add' => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\MainController::add'], null, ['POST' => 0], null, false, false, null]],
        '/remove' => [[['_route' => 'remove_from_cart', '_controller' => 'App\\Controller\\MainController::remove'], null, null, null, false, false, null]],
        '/payement_eligibility' => [[['_route' => 'payement_eligibility', '_controller' => 'App\\Controller\\MainController::check'], null, ['POST' => 0], null, false, false, null]],
        '/payement' => [[['_route' => 'payement', '_controller' => 'App\\Controller\\MainController::payement'], null, ['POST' => 0], null, false, false, null]],
        '/confirm-order' => [[['_route' => 'thankyou', '_controller' => 'App\\Controller\\MainController::thankyou'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
