<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_7;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d7:module command.
 */
class ModuleTest extends GeneratorBaseTest {

  protected $class = 'Drupal_7\Module';

  protected $interaction = [
    'Module name [%default_name%]: ' => 'Example',
    'Module machine name [example]: ' => 'example',
    'Module description [Module description.]: ' => 'Some description.',
    'Package [Custom]: ' => 'Custom',
    'Version [7.x-1.0-dev]: ' => '7.x-1.0',
  ];

  protected $fixtures = [
    'example/example.info' => __DIR__ . '/_module.info',
    'example/example.module' => __DIR__ . '/_.module',
    'example/example.install' => __DIR__ . '/_.install',
    'example/example.admin.inc' => NULL,
    'example/example.pages.inc' => NULL,
    'example/example.js' => NULL,
  ];

}