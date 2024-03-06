<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/historique' => [[['_route' => 'app_historique', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\SecurityController::goHome'], null, null, null, false, false, null]],
        '/home1' => [[['_route' => 'app_home1', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\SecurityController::goDashboard'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/newAdmin' => [[['_route' => 'app_utilisateur_newAdmin', '_controller' => 'App\\Controller\\UtilisateurController::newA'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/save-img' => [[['_route' => 'app_save_img', '_controller' => 'App\\Controller\\UtilisateurController::saveImg'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/newFreelancer' => [[['_route' => 'app_utilisateur_newFreelancer', '_controller' => 'App\\Controller\\UtilisateurController::newF'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/newEntreprise' => [[['_route' => 'app_utilisateur_newEntreprise', '_controller' => 'App\\Controller\\UtilisateurController::newE'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/recherche' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UtilisateurController::searchByEmail'], null, null, null, false, false, null]],
        '/utilisateur/tri' => [[['_route' => 'app_utilisateur_tri', '_controller' => 'App\\Controller\\UtilisateurController::tri'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/statistiques' => [[['_route' => 'app_utilisateur_statistiques', '_controller' => 'App\\Controller\\UtilisateurController::statistiques'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/sta2' => [[['_route' => 'app_utilisateur_sta2', '_controller' => 'App\\Controller\\UtilisateurController::sta2'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/search' => [[['_route' => 'app_utilisateur_search', '_controller' => 'App\\Controller\\UtilisateurController::searchByDomaine'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/utilisateur/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\UtilisateurController::exportExcel'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
                .'|/utilisateur/(?'
                    .'|([^/]++)(*:74)'
                    .'|profile/([^/]++)(*:97)'
                    .'|([^/]++)(?'
                        .'|/edit(?'
                            .'|(*:123)'
                            .'|Profile(*:138)'
                        .')'
                        .'|(*:147)'
                    .')'
                    .'|verify(*:162)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:202)'
                    .'|wdt/([^/]++)(*:222)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:268)'
                            .'|router(*:282)'
                            .'|exception(?'
                                .'|(*:302)'
                                .'|\\.css(*:315)'
                            .')'
                        .')'
                        .'|(*:325)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        74 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_utilisateur_showProfile', '_controller' => 'App\\Controller\\UtilisateurController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'app_utilisateur_editProfile', '_controller' => 'App\\Controller\\UtilisateurController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        162 => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\UtilisateurController::verifyUserEmail'], [], null, null, false, false, null]],
        202 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        222 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        268 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        282 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        302 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        315 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        325 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
