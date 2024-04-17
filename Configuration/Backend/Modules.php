<?php

declare(strict_types=1);
//
//
//$boot = static function (): void {
//    ExtensionManagementUtility::addModule(
//        'web',
//        'FrontendEditing',
//        'after:layout',
//        null,
//        [
//            'routeTarget' => FrontendEditingModuleController::class . '::showAction',
//            'access' => 'user,group',
//            'name' => 'web_FrontendEditing',
//            'icon' => 'EXT:frontend_editing/Resources/Public/Icons/ext_icon.png',
//            'labels' => 'LLL:EXT:frontend_editing/Resources/Private/Language/locallang_mod.xlf',
//        ]
//    );
//};


/**
 * Definitions for modules provided by EXT:examples
 */
return [
//    // Example for a module registration with Extbase controller
//    'web_examples' => [
//        'parent' => 'web',
//        'position' => ['after' => 'web_info'],
//        'access' => 'user',
//        'workspaces' => 'live',
//        'path' => '/module/page/example',
//        'labels' => 'LLL:EXT:examples/Resources/Private/Language/Module/locallang_mod.xlf',
//        // Extbase-specific configuration telling the TYPO3 Core to bootstrap Extbase
//        'extensionName' => 'Examples',
//        'controllerActions' => [
//            ModuleController::class => [
//                'flash', 'tree', 'clipboard', 'links', 'fileReference', 'fileReferenceCreate',
//            ],
//        ],
//    ],
    // Example for a module registration with a simple PHP script
    'web_frontendediting' => [
        'parent' => 'web',
        'position' => ['after' => 'layout'],
        'access' => 'user,group',
        'workspaces' => 'live',
        'icon' => 'EXT:frontend_editing/Resources/Public/Icons/ext_icon.png',
        'labels' => 'LLL:EXT:frontend_editing/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'FrontendEditing',
        'controllerActions' => [
            \TYPO3\CMS\FrontendEditing\Controller\FrontendEditingModuleController::class => [
                'show'
            ]
        ],
    ],

];
