<?php

declare(strict_types=1);

/*
 * File header example
 *
 * (c) Ronan
 */

use Symplify\MonorepoBuilder\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
use Symplify\MonorepoBuilder\Config\MBConfig;

return static function (MBConfig $mBConfig): void {
  // Locations of the projects
  $mBConfig->packageDirectories([
    __DIR__.'/lib',
    __DIR__.'/packages',
  ]);

  // Extra parts to add after the merge
  $mBConfig->dataToAppend([
    ComposerJsonSection::REQUIRE_DEV => [
      'friendsofphp/php-cs-fixer' => '^3.64',
      'symplify/monorepo-builder' => '^11.2',
    ],
  ]);
};
