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
        '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/ads' => [[['_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'hello_base', '_controller' => 'App\\Controller\\HomeController::hello'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
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
                .'|/ads/([^/]++)(*:182)'
                .'|/hello(?'
                    .'|/([^/]++)/age(?:/(\\d+))?(*:223)'
                    .'|(?:/([^/]++))?(*:245)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        182 => [[['_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
        223 => [[['_route' => 'hello', 'prenom' => 'anonyme', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'], ['prenom', 'age'], null, null, false, true, null]],
        245 => [
            [['_route' => 'hello_prenom', 'prenom' => 'anonyme', '_controller' => 'App\\Controller\\HomeController::hello'], ['prenom'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
