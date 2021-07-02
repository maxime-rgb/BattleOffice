<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delivery/adress' => [[['_route' => 'delivery_adress_index', '_controller' => 'App\\Controller\\DeliveryAdressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/delivery/adress/new' => [[['_route' => 'delivery_adress_new', '_controller' => 'App\\Controller\\DeliveryAdressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'confirmation', '_controller' => 'App\\Controller\\LandingPageController::confirmation'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/new' => [[['_route' => 'order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/paiement/new' => [[['_route' => 'paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/delivery/adress/([^/]++)(?'
                    .'|(*:246)'
                    .'|/edit(*:259)'
                    .'|(*:267)'
                .')'
                .'|/stripe/([^/]++)(*:292)'
                .'|/order/([^/]++)(?'
                    .'|(*:318)'
                    .'|/edit(*:331)'
                    .'|(*:339)'
                .')'
                .'|/p(?'
                    .'|aiement/([^/]++)(?'
                        .'|(*:372)'
                        .'|/edit(*:385)'
                        .'|(*:393)'
                    .')'
                    .'|roduct/([^/]++)(?'
                        .'|(*:420)'
                        .'|/edit(*:433)'
                        .'|(*:441)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'delivery_adress_show', '_controller' => 'App\\Controller\\DeliveryAdressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'delivery_adress_edit', '_controller' => 'App\\Controller\\DeliveryAdressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'delivery_adress_delete', '_controller' => 'App\\Controller\\DeliveryAdressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'stripe', '_controller' => 'App\\Controller\\LandingPageController::stripe'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        318 => [[['_route' => 'order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        372 => [[['_route' => 'paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        385 => [[['_route' => 'paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [
            [['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
