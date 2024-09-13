<?php

return [
    'name'        => 'PocketMatic',
    'description' => 'Enables integrations with PocketMatic for email tracking',
    'version'     => '1.0',
    'author'      => 'Mautic',
    'services'    => [
        'integrations' => [
            'mautic.integration.pocketmatic' => [
                'class'     => MauticPlugin\MauticPocketMaticBundle\Integration\PocketMaticIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'logger',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
    ],
];
