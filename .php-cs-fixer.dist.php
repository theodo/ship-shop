<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())->in(__DIR__)->exclude(['var', 'migrations']);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
    ])
    ->setFinder($finder)
;
