<?php

use Codeat3\BladeIconGeneration\Exceptions\InvalidFileExtensionException;
use Codeat3\BladeIconGeneration\IconProcessor;

$svgNormalization = static function (string $tempFilepath, array $iconSet) {

    // perform generic optimizations
    try {
        $iconProcessor = new IconProcessor($tempFilepath, $iconSet);
        $iconProcessor
            ->optimize()
            ->postOptimizationAsString(function ($svgLine){
                return str_replace([
                    'fill="#010101"'
                ], 'fill="currentColor"', $svgLine);
            })
            ->save();
    }catch (InvalidFileExtensionException $e) {
        print_r($e->getMessage());
    }

};

return [
    [
        // Define a source directory for the sets like a node_modules/ or vendor/ directory...
        'source' => __DIR__.'/../dist/svg/',

        // Define a destination directory for your icons. The below is a good default...
        'destination' => __DIR__.'/../resources/svg',

        // Enable "safe" mode which will prevent deletion of old icons...
        'safe' => true,

        // Call an optional callback to manipulate the icon
        // with the pathname of the icon and the settings from above...
        'after' => $svgNormalization,

        'is-solid' => true,
        'blacklisted-ext' => [
            'txt',
            'md',
        ]

    ],
    [
        // Define a source directory for the sets like a node_modules/ or vendor/ directory...
        'source' => __DIR__.'/../dist/svg/material',

        // Define a destination directory for your icons. The below is a good default...
        'destination' => __DIR__.'/../resources/svg',

        // Enable "safe" mode which will prevent deletion of old icons...
        'safe' => true,

        // Call an optional callback to manipulate the icon
        // with the pathname of the icon and the settings from above...
        'after' => $svgNormalization,

        'is-solid' => true,
        'blacklisted-ext' => [
            'txt',
            'md',
        ]

    ],
    [
        // Define a source directory for the sets like a node_modules/ or vendor/ directory...
        'source' => __DIR__.'/../dist/svg-outlined/',

        // Define a destination directory for your icons. The below is a good default...
        'destination' => __DIR__.'/../resources/svg',

        // Enable "safe" mode which will prevent deletion of old icons...
        'safe' => true,

        // Call an optional callback to manipulate the icon
        // with the pathname of the icon and the settings from above...
        'after' => $svgNormalization,

        'output-suffix' => '-o',

        'is-solid' => true,
        'blacklisted-ext' => [
            'txt',
            'md',
        ]

    ],
    [
        // Define a source directory for the sets like a node_modules/ or vendor/ directory...
        'source' => __DIR__.'/../dist/svg-outlined/material',

        // Define a destination directory for your icons. The below is a good default...
        'destination' => __DIR__.'/../resources/svg',

        // Enable "safe" mode which will prevent deletion of old icons...
        'safe' => true,

        // Call an optional callback to manipulate the icon
        // with the pathname of the icon and the settings from above...
        'after' => $svgNormalization,

        'output-suffix' => '-o',

        'is-solid' => true,
        'blacklisted-ext' => [
            'txt',
            'md',
        ]

    ],
];
