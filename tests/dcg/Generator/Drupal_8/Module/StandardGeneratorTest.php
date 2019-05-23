<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Module;

use DrupalCodeGenerator\Tests\Generator\BaseGeneratorTest;

/**
 * Test for module:standard command.
 */
class StandardGeneratorTest extends BaseGeneratorTest {

  protected $class = 'Module\Standard';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Module description:' => 'Some description.',
    'Package [Custom]:' => 'Custom',
    'Dependencies (comma separated):' => 'drupal:views',
    'Would you like to create module file? [Yes]:' => 'Yes',
    'Would you like to create install file? [Yes]:' => 'Yes',
    'Would you like to create libraries.yml file? [Yes]:' => 'Yes',
    'Would you like to create permissions.yml file? [Yes]:' => 'Yes',
    'Would you like to create event subscriber? [Yes]:' => 'Yes',
    'Would you like to create block plugin? [Yes]:' => 'Yes',
    'Would you like to create a controller? [Yes]:' => 'Yes',
    'Would you like to create settings form? [Yes]:' => 'Yes',
  ];

  protected $fixtures = [
    'foo/foo.info.yml' => __DIR__ . '/_standard/foo.info.yml',
    'foo/foo.install' => __DIR__ . '/_standard/foo.install',
    'foo/foo.libraries.yml' => __DIR__ . '/_standard/foo.libraries.yml',
    'foo/foo.links.menu.yml' => __DIR__ . '/_standard/foo.links.menu.yml',
    'foo/foo.module' => __DIR__ . '/_standard/foo.module',
    'foo/foo.permissions.yml' => __DIR__ . '/_standard/foo.permissions.yml',
    'foo/foo.routing.yml' => __DIR__ . '/_standard/foo.routing.yml',
    'foo/foo.services.yml' => __DIR__ . '/_standard/foo.services.yml',
    'foo/config/schema/foo.schema.yml' => __DIR__ . '/_standard/config/schema/foo.schema.yml',
    'foo/src/Controller/FooController.php' => __DIR__ . '/_standard/src/Controller/FooController.php',
    'foo/src/EventSubscriber/FooSubscriber.php' => __DIR__ . '/_standard/src/EventSubscriber/FooSubscriber.php',
    'foo/src/Form/SettingsForm.php' => __DIR__ . '/_standard/src/Form/SettingsForm.php',
    'foo/src/Plugin/Block/ExampleBlock.php' => __DIR__ . '/_standard/src/Plugin/Block/ExampleBlock.php',
  ];

}
