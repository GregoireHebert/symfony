<?php

$container->loadFromExtension('framework', [
    'secret' => 's3cr3t',
    'default_locale' => 'fr',
    'available_locales' => ['mi', 'fr'],
]);