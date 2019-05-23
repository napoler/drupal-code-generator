<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for install-file command.
 */
class InstallFileGeneratorTest extends BaseGeneratorTest {

  protected $class = 'InstallFile';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
  ];

  protected $fixtures = [
    'foo.install' => __DIR__ . '/_.install',
  ];

}
