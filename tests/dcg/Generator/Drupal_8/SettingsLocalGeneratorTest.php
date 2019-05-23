<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for settings-local command.
 */
class SettingsLocalGeneratorTest extends BaseGeneratorTest {

  protected $class = 'SettingsLocal';

  protected  $interaction = [
    'Override database configuration? [No]:' => 'Yes',
    'Database name [drupal_local]:' => 'drupal_8',
    'Database username [root]:' => 'root',
    'Database password:' => '123',
    'Database host [localhost]:' => 'localhost',
    'Database type [mysql]:' => 'mysql',
  ];

  protected $fixtures = [
    'settings.local.php' => __DIR__ . '/_settings.local.php',
  ];

}
