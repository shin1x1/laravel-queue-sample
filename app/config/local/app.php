<?php

return [
    'debug' => true,
    'providers' => append_config([
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Way\Generators\GeneratorsServiceProvider',
    ]),
];
