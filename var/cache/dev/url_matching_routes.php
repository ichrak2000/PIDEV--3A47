<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type_reclamation' => [[['_route' => 'app_type_reclamation_index', '_controller' => 'App\\Controller\\TypeReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type_reclamation/tri' => [[['_route' => 'app_type_reclamation_tri', '_controller' => 'App\\Controller\\TypeReclamationController::tri'], null, ['GET' => 0], null, false, false, null]],
        '/type_reclamation/recherche' => [[['_route' => 'app_type_reclamation_search', '_controller' => 'App\\Controller\\TypeReclamationController::searchByNom'], null, null, null, false, false, null]],
        '/type_reclamation/new' => [[['_route' => 'app_type_reclamation_new', '_controller' => 'App\\Controller\\TypeReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:78)'
                        .'|/edit(*:90)'
                        .'|(*:97)'
                    .')'
                .')'
                .'|/type_reclamation/(?'
                    .'|statistiques/([^/]++)(*:148)'
                    .'|([^/]++)(*:164)'
                    .'|connexion(*:181)'
                    .'|([^/]++)(?'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:251)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:290)'
                    .'|wdt/([^/]++)(*:310)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:356)'
                            .'|router(*:370)'
                            .'|exception(?'
                                .'|(*:390)'
                                .'|\\.css(*:403)'
                            .')'
                        .')'
                        .'|(*:413)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        78 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        148 => [[['_route' => 'app_type_reclamation_statistics', '_controller' => 'App\\Controller\\TypeReclamationController::statistics'], ['nom'], ['GET' => 0], null, false, true, null]],
        164 => [[['_route' => 'app_type_reclamation_show', '_controller' => 'App\\Controller\\TypeReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'login', '_controller' => 'App\\Controller\\TypeReclamationController::login'], [], null, null, false, false, null]],
        205 => [[['_route' => 'app_type_reclamation_edit', '_controller' => 'App\\Controller\\TypeReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_type_reclamation_delete', '_controller' => 'App\\Controller\\TypeReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        290 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        310 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        356 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        370 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        390 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        403 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        413 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
