<?php

declare(strict_types=1);

use Symplify\MonorepoBuilder\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
use Symplify\MonorepoBuilder\Config\MBConfig;

return static function (MBConfig $mBConfig): void {
  // Locations of the projects
  $mBConfig->packageDirectories(
    [
      __DIR__ . '/lib',
      __DIR__ . '/packages',
    ]
  );

  // Extra parts to add after the merge
  $mBConfig->dataToAppend(
    [
      ComposerJsonSection::REQUIRE_DEV => [
        'squizlabs/php_codesniffer' => '^3.10',
        'symplify/monorepo-builder' => '^11.2',
      ],
    ]
  );
};
