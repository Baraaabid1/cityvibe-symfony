<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_Admin_main', '_controller' => 'App\\Controller\\MainController::indexAdmin'], null, null, null, false, false, null]],
        '/ajout/reclamation' => [[['_route' => 'app_ajout_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/User/reclamations' => [[['_route' => 'app_list_user_reclamations', '_controller' => 'App\\Controller\\ReclamationController::listUserReclamations'], null, null, null, false, false, null]],
        '/Admin/reclamations' => [[['_route' => 'app_list_reclamations', '_controller' => 'App\\Controller\\ReclamationController::listReclamations'], null, null, null, false, false, null]],
        '/ajout/reponser' => [[['_route' => 'app_ajout_reponser', '_controller' => 'App\\Controller\\ReclamationController::indexRepnse'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|delete/([^/]++)(*:41)'
                        .'|edit/([^/]++)(*:61)'
                        .'|Adelete/([^/]++)(*:84)'
                    .')'
                    .'|ponse(?'
                        .'|/Admin/([^/]++)(*:115)'
                        .'|A/delete/([^/]++)(*:140)'
                    .')'
                    .'|sponse/edit/([^/]++)(*:169)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:209)'
                    .'|wdt/([^/]++)(*:229)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:275)'
                            .'|router(*:289)'
                            .'|exception(?'
                                .'|(*:309)'
                                .'|\\.css(*:322)'
                            .')'
                        .')'
                        .'|(*:332)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamation'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'app_edit_reclamation', '_controller' => 'App\\Controller\\ReclamationController::editReclamation'], ['id'], null, null, false, true, null]],
        84 => [[['_route' => 'app_delete_reclamation_admin', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationAdmin'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'app_mainAdmin_reponse', '_controller' => 'App\\Controller\\ReclamationController::data'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'app_delete_reponseA', '_controller' => 'App\\Controller\\ReclamationController::deleteReponsea'], ['id'], null, null, false, true, null]],
        169 => [[['_route' => 'pp_update_response', '_controller' => 'App\\Controller\\ReclamationController::updateMessage'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        229 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        275 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        289 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        309 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        322 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        332 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
