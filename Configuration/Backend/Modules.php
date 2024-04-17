<?php

declare(strict_types=1);

/**
 * Definitions for modules provided by EXT:examples
 */
return [
    'web_frontendediting' => [
        'parent' => 'web',
        'position' => ['after' => 'layout'],
        'access' => 'user,group',
        'workspaces' => 'live',
        'icon' => 'EXT:frontend_editing/Resources/Public/Icons/ext_icon.png',
        'labels' => 'LLL:EXT:frontend_editing/Resources/Private/Language/locallang_mod.xlf',
        'controllerActions' => [
            \TYPO3\CMS\FrontendEditing\Controller\FrontendEditingModuleController::class => [
                'show'
            ]
        ],
    ],
];
