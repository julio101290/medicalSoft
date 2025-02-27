<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Class Boilerplate.
 */
class Boilerplate extends BaseConfig
{
    //--------------------------------------------------------------------------
    // App name
    //--------------------------------------------------------------------------

    public $appName = 'MedicalSoft';

    //--------------------------------------------------------------------------
    // Dashboard controller
    //--------------------------------------------------------------------------

    public $dashboard = [
        'namespace'  => 'App\Controllers',
        'controller' => 'DashboardController::index',
        'filter'     => 'permission:back-office',
    ];

    //--------------------------------------------------------------------------
    // Config cdn for language datatables
    // pelase see https://cdn.datatables.net/plug-ins/1.10.20/i18n/
    //--------------------------------------------------------------------------

    public $i18n = 'English';

    //--------------------------------------------------------------------------
    // Theme boilerplate
    //
    // BG: blue, indigo, purple, pink, red, orange, yellow, green, teal, cyan,
    //     gray, gray-dark, black
    // Type: dark, light
    // Shadow: 0-4
    //
    //--------------------------------------------------------------------------

    public $theme = [
        'body-sm' => false,
        'navbar'  => [
            'bg'     => 'white',
            'type'   => 'light',
            'border' => true,
            'user'   => [
                'visible' => true,
                'shadow'  => 0,
            ],
        ],
        'sidebar' => [
            'type'    => 'dark',
            'shadow'  => 4,
            'border'  => false,
            'compact' => true,
            'links'   => [
                'bg'     => 'blue',
                'shadow' => 1,
            ],
            'brand' => [
                'bg'   => 'gray-dark',
                'logo' => [
                    'icon'   => 'favicon.ico', // path to image | this example icon on public root folder.
                    'text'   => '<strong>CI4</strong>MedicalSoft',
                    'shadow' => 2,
                ],
            ],
            'user' => [
                'visible' => true,
                'shadow'  => 2,
            ],
        ],
        'footer' => [
            'fixed'      => false,
            'vendorname' => 'Cesar Systems',
            'vendorlink' => 'https://cesarsystems.com.mx/ci4medicalsoft-lanzado',
        ],
    ];
}
