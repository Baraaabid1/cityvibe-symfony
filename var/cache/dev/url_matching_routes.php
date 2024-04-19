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
        '/Admin/reclamationsDESC' => [[['_route' => 'app_list_reclamationsDESC', '_controller' => 'App\\Controller\\ReclamationController::listReclamationsDESC'], null, null, null, false, false, null]],
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
                        .'|/(?'
                            .'|delete/([^/]++)(*:119)'
                            .'|Admin/([^/]++)(*:141)'
                        .')'
                        .'|A/delete/([^/]++)(*:167)'
                    .')'
                    .'|sponse(?'
                        .'|user/edit/([^/]++)(*:203)'
                        .'|/edit/([^/]++)(*:225)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/reclamationpartype/([^/]++)(*:272)'
                    .'|jout/reponser/([^/]++)(*:302)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:342)'
                    .'|wdt/([^/]++)(*:362)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:408)'
                            .'|router(*:422)'
                            .'|exception(?'
                                .'|(*:442)'
                                .'|\\.css(*:455)'
                            .')'
                        .')'
                        .'|(*:465)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamation'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'app_edit_reclamation', '_controller' => 'App\\Controller\\ReclamationController::editReclamation'], ['id'], null, null, false, true, null]],
        84 => [[['_route' => 'app_delete_reclamation_admin', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamationAdmin'], ['id'], null, null, false, true, null]],
        119 => [[['_route' => 'app_delete_reponse', '_controller' => 'App\\Controller\\ReclamationController::deleteReponse'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'app_mainAdmin_reponse', '_controller' => 'App\\Controller\\ReclamationController::data'], ['id'], null, null, false, true, null]],
        167 => [[['_route' => 'app_delete_reponseA', '_controller' => 'App\\Controller\\ReclamationController::deleteReponsea'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'app_update_response_user', '_controller' => 'App\\Controller\\ReclamationController::updateMessageuser'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'pp_update_response', '_controller' => 'App\\Controller\\ReclamationController::updateMessage'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'app_list_reclamationspartype', '_controller' => 'App\\Controller\\ReclamationController::listReclamationspartype'], ['type'], null, null, false, true, null]],
        302 => [[['_route' => 'app_ajout_reponser', '_controller' => 'App\\Controller\\ReclamationController::indexRepnse'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        362 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        408 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        422 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        442 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        455 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        465 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
