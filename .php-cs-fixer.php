<?php

/*
 * File header example
 *
 * (c) Ronan
 */

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$fileHeaderComment = <<<EOF
File header example

(c) Ronan
EOF;

return (new Config())
  ->setParallelConfig(ParallelConfigFactory::detect())
  ->setRules([
    '@PSR12' => true,
    '@Symfony' => true,
    'header_comment' => [
      'header' => $fileHeaderComment,
    ],
    'trailing_comma_in_multiline' => [
      'elements' => [
        'arrays',
        'array_destructuring',
        'match',
        'parameters',
      ],
    ],
  ])
  ->setFinder(
    (new Finder())
      ->in(__DIR__)
      ->append([__FILE__])
      ->exclude([
        '*/vendor/*',
        '*/node_modules/*',
      ])
  )
  ->setIndent('  ')
  ->setCacheFile('.php-cs-fixer.cache')
;
