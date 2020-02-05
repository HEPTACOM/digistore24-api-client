<?php declare(strict_types=1);

return [
    'openapi-file' => __DIR__ . '/openapi.yaml',
    'namespace' => 'Heptacom\\DigiStore24',
    'directory' => __DIR__ . '/jane',
    'client' => 'psr18',
    'clean-generated' => true,
    'fixer-config-file' => __DIR__ . '/.php_cs.dist',
    'use-fixer' => true,
];
